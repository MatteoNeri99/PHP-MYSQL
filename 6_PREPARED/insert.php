<?php 

// prepared è un metodo che ci permette di scrivere una query e poi eseguirla quando ci serve tramite execute

$host = 'localhost';
$username = 'root';
$password = 'root';
$nameDB = 'tutorial_db';


$connessione = new mysqli($host, $username, $password, $nameDB );

if ($connessione === false){
    die('Problema nella connesione con il db: ' .  $connessione->error . '<br>');
}

echo 'connessione al db avvenuta con successo';

// creo la query da salvare con il valori da inserire come punto di domanda in modo poi da andarli cambiare solo quelli quando la queri verrà inserita
$sql = "INSERT INTO persone (nome, cognome, email) VALUES (?, ?, ?)";


// preparo la query da inviare con il metodo prepare
if($statement = $connessione->prepare($sql)){

    // vado a cambiare i punti di domanda con i dati da inserire (il primo valore è il tipo di dato cha va inserito quindi in questo caso 3 stringhe e quindi 'sss')
    $statement->bind_param('sss', $nome, $cognome, $email);

    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];

    // eseugo la query
    $statement->execute();

    echo 'i record sono stati inseriti';

}else{

    echo 'problema nell\'inserimento dati';
}

$statement->close();
$connessione->close();










































?>