<?php 


$host = '127.0.0.1';
$username = 'root';
$password= 'root';


$connessione = new mysqli($host, $username, $password);

// se non è avvenuta una connessione fermiamo il codice e mandiamo a schermo il messaggio di errore
if ($connessione === false){
    die('errore di connessione'. $connessione->connect_error);
}

// se il die non blocca il codice ci siamo connessi e leggeremo questo echo
echo 'ti sei connesso al DB '. $connessione->host_info . '<br>';

$sql= 'CREATE DATABASE creazione_db';

// controlliamo che la creazione del database con la query vada a buon fine(naturalmente se già esiste non verra creato)
if($connessione->query($sql) == true){

    echo'database creato con successo';

}else{

    echo'Errore nella creazione deldatabase '. $connessione->error;
}

// per chiudere la connesione con il DB
$connessione->close();






























?>