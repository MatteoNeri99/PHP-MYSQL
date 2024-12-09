<?php 

// rachhiudo in variabile le stringhe che mi servono per connetermi al db
$host = '127.0.0.1';
$username = 'root';
$password = 'root';
$nomeDb= 'tutorial_db';

$connessione = new mysqli($host, $username, $password, $nomeDb);

if($connessione === false){
    die('errore nella connessio con il db' . $connessione->error);
}

echo 'La connessione con il db è andata a buon fine';

// iniazio con il formare la query
$sql= 'SELECT * FROM persone';

// controlle se la query funzioni
if($results= $connessione->query($sql)){

    // controllo che la query abbia come risultato almeno una riga
    if($results->num_rows > 0){

        echo'
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nome</th>
                    <th>cognome</th>
                    <th>email</th>
                </tr>
            </thead>
        ';

        // con l'utillizzo di un ciclo while vado a prendere dinamicamente tutti i record contenuti nella taabella del db
        while($row = $results->fetch_array()){
            echo'
            <tbody>
            
                <tr>
                    <td>' .  $row['id'] . '</td>
                    <td>' .  $row['nome'] . '</td>
                    <td>' .  $row['cognome'] . '</td>
                    <td>' .  $row['email'] . '</td>
                </tr>

            </tbody>
            ';

        }

        echo '</table>';

    }else{
        echo'non ci sono righe per questa query ';
    }

}else{
    echo'impossibile eseguire la query';
}









// termino la connessione con il db
$connessione->close();





















?>