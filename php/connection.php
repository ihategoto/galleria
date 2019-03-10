<?php
/*
    Questo effettua la connessione con il database.
*/

$conn = new mysqli("localhost", "root", "D3005Chh77", "Galleria");
/* Reference : http://php.net/manual/en/class.mysqli.php */

if($conn->connect_errno){
    $detail = array("detail" => "Errore nella connessione del server");
    echo json_encode($detail);
    die();
}

?>