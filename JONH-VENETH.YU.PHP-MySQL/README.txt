https://github.com/JohnnyYuVe/CONSEGNA-2

Per questa consegna ho preso spunto dall'esercizio 3 del carrello della spesa mischiando leggermente php e html, arricchito con un po di css per non renderla troppo noiosa da vedere;

In questa consegna ho realizzato diffirenti pagine con diverse funzionalità sfruttando quanto ho imparato precedentemente arrichendolo con alcuni script php assieme all'ausilio del localhost di xampp. 

-un piccolo script che mi permette di collegarmi ad server db senza doverlo fare manualmente.
-due interfaccie separate nella quale l'utente può registrarsi con nuove credenziali(non ho messo controlli per quanto riguarda la presenza di occorrenze multiple)

-tramite il login.php l'utente può accedere alla pagina principale e scegliere articoli da comprare.
-in base all'utente che è entrato possiamo dare una piccola personalizzazione su cosa ha scelto chi nel file carrello.php con un piccolo breafing su quali articoli ha scelto.
inoltre su carrello.php si può eliminare articoli che si ha scelto.

-la pagina principale prevede un piccolo script che sfrutta un ciclo for nella quale stampo tutti i dati della tabella articolo in modo tale da permettere all'utente di scegliere.
-l'immagine per questioni di spazio è una sola, ma è cmq possibile inserire per ogni articolo un immagine differente sfruttando una indicizzazione progressiva.
-infine l'ultima pagina,ovvero il logout.php che chiude semplicemente la sessione.

-per quanto riguarda il database usato c'è il file sito_web.sql che si neccessità di importarlo sul server in quanto sfrutta molti campi contenuti nelle tabelle per un sito più dinamico.

-lo stile delle varie pagine e stato raggruppato dentro il file stilesito.css che poi e stato importato nelle varie pagine così da avere un codice più pulito 