<?php 



$host ='localhost';
$username ='root';
$password ='root';
$nomeDb ='tutorial_db';

$connessione = new mysqli($host,$username,$password,$nomeDb);

if($connessione === false){
    die('Errore nella connessione con il db');
}

echo 'Connessione con il db andata buon fine';


// con ORDER BY possiamo ordinare i record in ordine crescente/decrescente (se ordiniamo delle stringhe o numeri varrà in ordine alfabetico)
// CON limit possiamo limitarte il numero di risultati che vogliamo ottenere

$sql= 'SELECT * FROM persone ORDER BY id DESC LIMIT 6';

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











































?>