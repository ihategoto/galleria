<?php
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
if(!isset($json_obj['pk']) || !isset($json_obj['target'])){
    http_response_code(400);
    $detail = array("detail" => "richiesta non valida");
    echo json_encode($detail);
    die();
}

$target = $json_obj['target'];
$pk = $json_obj['pk'];
/*
    Nel caso in cui l'input ricevuto non sia tra quelli previsti, ritorna un errore.
*/
if(strcmp($target, "autori") != 0 && strcmp($target, "quadri") !=0 && strcmp($target, "tecniche") != 0 || !is_numeric($pk)){
    http_response_code(400);
    $detail = array("detail" => "input non valido");
    echo json_encode($detail);
    die();
}

/*
    Selezione le generalità dell'oggetto.
*/
$query = "SELECT * FROM ".$target." WHERE id = ".$pk.";";

if(!($r = $conn->query($query))){
    /* Qualcosa è andato storto nell'esecuzione della query */
    http_response_code(500);
    $detail = array("detail" => "qualcosa è andato storto:".$conn->error);
    echo json_encode($detail);
    /* Chiudo la connessione al server MySQL */
    $conn->close();
    die();
}

$result_detail = $r->fetch_array(MYSQLI_ASSOC);
$r->close();

if(strcmp($target, "quadri") != 0){ 
    $targets = array("autori" => array("quadri", "Autore"), "tecniche" => array("quadri", "Tecnica"));
    $query = "SELECT * FROM ".$targets[$target][0]." WHERE ".$targets[$target][1]." = ".$pk.";";
}else{
    $query = "SELECT autori.Nome, autori.Cognome, tecniche.NomeT FROM quadri INNER JOIN autori ON autori.id = quadri.Autore INNER JOIN tecniche ON tecniche.id = quadri.Tecnica WHERE quadri.id = $pk";
}

if(!($r = $conn->query($query))){
    /* Qualcosa è andato storto nell'esecuzione della query */
    http_response_code(500);
    $detail = array("detail" => "qualcosa è andato storto:".$conn->error);
    echo json_encode($detail);
    /* Chiudo la connessione al server MySQL */
    $conn->close();
    die();
}
$related = array("related" => array());
while(($row = $r->fetch_array(MYSQLI_ASSOC))){
    array_push($related['related'], $row);
}
/* Chiudo lo stream da cui prendo le informazioni */
$r->close();
/* Chiudo la connessione al server MySQL */
$conn->close();
$result = array_merge($result_detail, $related);
header('Content-Type: application/json');
echo json_encode($result);
die();
?>