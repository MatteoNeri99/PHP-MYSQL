<?php 

$host = '127.0.0.1';
$username = 'root';
$password = 'root';
$nomeDb = 'tutorial_db';



$connessione = new mysqli($host,$username,$password,$nomeDb);

if($connessione === false){
    die('Errore nella connessione con il db');
}

echo'Connessione con il db andata buon fine' . '<br>';

// con UPDATE  vado ad aggiornare l'email (fare attenzione ad mettere l'id del record senno ado a modificarla a tutti)
$sql='UPDATE persone SET email ="emailnuovaClaudio@gmoail.com" WHERE id="14" ';

if($connessione->query($sql) === true){
    echo 'l\'email è stata aggiornata';
}else{
    echo 'errore nell\'aggiornamento dell\'email';
}

$connessione->close();




























?>