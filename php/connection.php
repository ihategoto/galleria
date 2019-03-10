<?php
/*
    Questo effettua la connessione con il database.

    Query utilizzate per la creazione:
    CREATE TABLE autori (id INT NOT NULL AUTO_INCREMENT, Nome TINYTEXT NOT NULL, Cognome TINYTEXT NOT NULL, Ritratto TINYTEXT NOT NULL, DataN DATE NOT NULL, PRIMARY KEY (id));
    CREATE TABLE tecniche (id INT NOT NULL AUTO_INCREMENT, nomeT VARCHAR(30) NOT NULL, PRIMARY KEY (id));
    CREATE TABLE quadri (id INT NOT NULL AUTO_INCREMENT, Titolo VARCHAR(50) NOT NULL, DataP DATE NOT NULL, Autore INT NOT NULL, Tecnica INT NOT NULL, PRIMARY KEY  (id), FOREIGN KEY  (Autore) REFERENCES autori(id), FOREIGN KEY  (Tecnica) REFERENCES tecniche(id));
*/

$conn = new mysqli("localhost", "root", "D3005Chh77", "Galleria");
/* Reference : http://php.net/manual/en/class.mysqli.php */

if($conn->connect_errno){
    $detail = array("detail" => "Errore nella connessione del server");
    echo json_encode($detail);
    die();
}

?>