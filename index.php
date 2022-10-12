<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***)
tutte le occorrenze della parola da censurare. -->



<?php
// Creo una variabile con del testo
$variabileText = "Ogni prodotto che ha bisogno di un manuale per funzionare è rotto. Se le cose non stanno fallendo, non stai innovando abbastanza. Marte è l'unico posto nel sistema solare in cui è possibile che la vita diventi multi-planetaria. Le persone lavorano meglio quando sanno qual'è l obiettivo e perché.";

$badWords = str_replace('Marte', '***', $variabileText);
?>
<!-- creo il paragrafo -->
<p>Paragrafo: <?php echo $variabileText ?> </p>
<p>Paragrafo 2nd: <?php echo $badWords ?> </p>


