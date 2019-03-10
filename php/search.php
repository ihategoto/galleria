<?php 
/*
    Il seguente file contiene la ricerca per quadro.
*/

/*
    Richiamo l'oggetto connesso al database.
*/
require_once('connection.php');

/*
    Controllo sul metodo utilizzato dalla richiesta.
*/
if(strcmp($_SERVER['REQUEST_METHOD'], "GET") == 0){
    http_response_code(405);    /* Method not allowed */
    $detail = array("detail" => "metodo non autorizzato");
    echo json_encode($detail);
    die();
}

/*
    Controllo sul formato della richiesta.
*/
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str, true);
if(!isset($json_obj['keyword'])){
    http_response_code(400);
    $detail = array("detail" => "richiesta non valida");
    echo json_encode($detail);
    die();
}

$keyword = $json_obj['keyword'];

$query = "SELECT quadri.id, quadri.Titolo, quadri.DataP, quadri.Immagine FROM quadri INNER JOIN autori ON quadri.Autore = autori.id WHERE quadri.Titolo LIKE '%$keyword%' OR autori.Cognome LIKE '%$keyword%'";
if(!($r = $conn->query($query))){
    /* Qualcosa è andato storto nell'esecuzione della query */
    http_response_code(500);
    $detail = array("detail" => "qualcosa è andato storto:".$conn->error);
    echo json_encode($detail);
    /* Chiudo la connessione al server MySQL */
    $conn->close();
    die();
}

$results = array("results" => array());
while(($row = $r->fetch_array(MYSQLI_ASSOC))){
    array_push($results["results"], $row);
}
/* Chiudo lo stream da cui prendo le informazioni */
$r->close();
/* Chiudo la connessione al server MySQL */
$conn->close();
header('Content-Type: application/json');
echo json_encode($results);
die();
?>