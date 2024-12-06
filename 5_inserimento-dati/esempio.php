<?php 


$host = '127.0.0.1';
$username = 'root';
$password= 'root';
$dbName = 'tutorial_db';


$connessione = new mysqli($host, $username, $password, $dbName);


if ($connessione === false){
    die('errore di connessione'. $connessione->connect_error);
}


echo 'ti sei connesso al DB '. $connessione->host_info . '<br>';

// creaiamo una semplice query per inseririre i dati a 'mano'
$sql= "INSERT INTO persone(nome, cognome, email) VALUES
    ('Claudio', 'Claudietti', 'ClaudioCluadietti75@gmmail.com')
";

if($connessione->query($sql) === true){
    // andiamo a chidere in una variabile l'id dell'ultima persona aggiunta
    $ultimo_elemento= $connessione->insert_id;
    echo 'record aggiunti con successo, il suo id è: ' . $ultimo_elemento . '<br>';
}else{
    echo 'errore inserimento record';
}

$connessione->close();









































?>