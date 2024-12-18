<?php 

$host = 'localhost';
$username = 'root';
$password = 'root';
$nomeDb = 'tutorial_db';



$connessione = new mysqli($host, $username,$password,$nomeDb);

if ($connessione === false){
    die('Errore di connessione');
}

$sql = 'DELETE FROM persone WHERE id=  15';


if($connessione->query($sql) === true){
    echo 'Records eliniminato con successo';
}else{
    echo 'problema nell\'eliminazione del Records';
}





































?>