let persone;

fetch('./select.php', {
    method:'POST',
    header:{
        'Content-Type': 'application/json'
    }
})

.then(response => response.json())

.then(data => {
    persone = data;
    console.log('dati ricevuti: ', data);
    let tabella = `       
    <table>
            <thead>
               
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Cognome</td>
                    <td>Email</td>
                    <td>
                        <button id="nuova-riga">Inserisci nuova riga</button>
                    </td>
                    

                </tr>
            </thead>

            <tbody>

                ${generaRighe(data)}
               
            </tbody>
    </table> `;

    let tabellaContainer = document.querySelector("#tabella-container")
    tabellaContainer.insertAdjacentHTML('beforeend', tabella)
})

.catch((error) => {
    console.error('Errore: ', error);
});

function generaRighe (persone){
    let righe ='';
    persone.forEach(persona => {
        let riga =`

            <tr>
                <td>${persona.id}</td>
                <td>${persona.nome}</td>
                <td>${persona.cognome}</td>
                <td>${persona.email}</td>
                <td>
                    <button class='modifica-persona' data-val='${persona.id}'>Modifica</button>
                    <button  class='elimina-persona' data-val='${persona.id}'>Elimina</button>
                </td>

            </tr>
        
        `
        righe+= riga;
    });

    return righe;

}