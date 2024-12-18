<?php 

$host='127.0.0.1';
$username='root';
$password='root';
$nameDb = 'tutorial_db';

$connessione = new mysqli($host, $username, $password, $nameDb);

if($connessione === false){
    die('Errore nella connessione al db');
}



?>