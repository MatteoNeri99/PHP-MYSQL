<?php 

// ci sono tre modi per connetersi al DB con PHP 

// primo modo PROCEDURALE (primo valore-> host, secondo valore-> username, terzo valore password, quarto valore-> nome del database)

// $connessione = mysqli_connect('localhost', 'root', 'root', 'prova_DB');


// secondo metodo OOP (quello che andremo ad usare)
//  $connessione = new mysqli('localhost', 'root', 'root', 'prova_DB');


// terzo metodo PDO
// $connessione = new PDO('mysql:host=localhost;dbname=prova_DB', 'root','root');


$host = '127.0.0.1';
$username = 'root';
$password= 'root';
$dbName = 'prova_DB';


$connessione = new mysqli($host, $username, $password, $dbName);

// se non è avvenuta una connessione fermiamo il codice e mandiamo a schermo il messaggio di errore
if ($connessione === false){
    die('errore di connessione'. $connessione->connect_error);
}

// se il die non blocca il codice ci siamo connessi e leggeremo questo echo
echo 'ti sei connesso al DB '. $connessione->host_info;

// per chiudere la connesione con il DB
$connessione->close();



























?>