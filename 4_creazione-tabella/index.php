<?php 

$host = '127.0.0.1';
$username = 'root';
$password= 'root';
$dbName = 'tutorial_db';


$connessione = new mysqli($host, $username, $password, $dbName);

// se non è avvenuta una connessione fermiamo il codice e mandiamo a schermo il messaggio di errore
if ($connessione === false){
    die('errore di connessione'. $connessione->connect_error);
}

// se il die non blocca il codice ci siamo connessi e leggeremo questo echo
echo 'ti sei connesso al DB '. $connessione->host_info . '<br>';

// creaiamo una query che crei una tabella
$sql = 'CREATE TABLE persone(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    email VARCHAR(40)NOT NULL UNIQUE
)';

// controlliamo che la tabella venga creata
if($connessione->query($sql) === true){

    echo 'tabella creata con successo' . '<br>';

}else{
    echo 'Errore creazione tabella ' . $connessione->error ;
}

// per chiudere la connesione con il DB
$connessione->close();













































?>