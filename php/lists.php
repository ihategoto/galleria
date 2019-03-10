<?php

/*
    Richiamo l'oggetto connesso al database.
*/
require_once('connection.php');

/*
    Nel caso in cui la richiesta non rispetti il formato richiesto, ritorna un errore. 
*/
if(!isset($_GET['o'])){
    http_response_code(400);
    $detail = array("detail" => "richiesta non valida");
    echo json_encode($detail);
    /* Chiudo*/
    $conn->close();
    die();
}

$o = $_GET['o'];

/*
    Nel caso in cui l'input ricevuto non sia tra quelli previsti, ritorna un errore.
*/
if(strcmp($o, "autori") != 0 && strcmp($o, "quadri") !=0 && strcmp($o, "tecniche") != 0){
    http_response_code(400);
    $detail = array("detail" => "input non valido");
    echo json_encode($detail);
    die();
}

$query = "SELECT * FROM ".$o." WHERE 1;";   /* Seleziona tutte le informazioni inerenti agli autori. */
if(!($r = $conn->query($query))){
    /* Qualcosa è andato storto nell'esecuzione della query */
    http_response_code(500);
    $detail = array("detail" => "qualcosa è andato storto:".$conn.error);
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