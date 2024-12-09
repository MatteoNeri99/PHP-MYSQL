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

echo '<br> <br> <br> <br> <br>';




// con la condizione WHERE vado ad cercare in questo caso tutti i record che hanno come id=15 mentre con OR vado a cercare ulteriormente anche i record che hanno come id=15
$sql= 'SELECT * FROM persone WHERE id ="15" OR id="17" ';

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



echo '<br> <br> <br> <br> <br>';

// con la condizione IN vado semplicemente ad aggiungere più campi da cercare 
$sql= 'SELECT * FROM persone WHERE id IN(1,14,18) ';

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


echo '<br> <br> <br> <br> <br>';


// con la condizione like vado a cercare ancora più a fondo potendo cercare anche solo per un carattere
$sql= 'SELECT * FROM persone WHERE nome  LIKE "C%" ';

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



echo '<br> <br> <br> <br> <br>';


// con la condizione like vado a cercare ancora più a fondo potendo cercare anche solo per un carattere o per una serie di caratteri. Con il NOT vado a cercare quelle che non iniziano per quel carattere o serie di caratteri
$sql= 'SELECT * FROM persone WHERE nome NOT LIKE "C%" ';

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

$connessione->close();





































?>