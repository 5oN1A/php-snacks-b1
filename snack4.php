<!-- Snack 4 (bonus)
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opale</title>
</head>

<body>
    <p></p>


    <?php
    $paragraph = "L'opale è un minerale colloidale amorfo, costituito da silice idrata (SiO2·nH2O), semiamorfo o microcristallino, ovvero privo di struttura reticolare, infatti non si presenta in cristalli, ma in vene, noduli e croste di vari colori, spesso con iridescenze.Il colore è variabile dal trasparente al bianco latte, con un'infinità di differenti intermedi (verde, rosso, giallo, marrone, nero). Il contenuto in acqua può arrivare fino al 20%. La formazione dell'opale avviene mediante lento deposito geologico di un gel colloidale di silice a bassa temperatura.
    Esso comprende molte varietà fra cui l'opale comune, l'opale nobile, l'opale nero, l'opale d'acqua, l'opale di fuoco, l'opale xiloide e la ialite.
    La parola opale ha radice comune nel sanscrito ùpala, nel greco ὀπάλλιος opallios e nel latino opălus.
    Il 97% della produzione mondiale di opali è in Australia, paese che ne ha fatto la pietra nazionale, segnatamente nella zona di Lightning Ridge, dove si estrae l'opale nero. Giacimenti importanti sono situati anche in Messico e in Etiopia.
    L'opalescenza, il gioco di colori e di luce presentato dai campioni di opale, è dovuta ad effetti di interferenza ed alla diffrazione della luce causata a sua volta dalla regolare disposizione delle sferette di silice, le quali si dispongono in una forma impaccata, regolare e tridimensionale; è simile quindi alla disposizione dei cristalli.
    Il riscaldamento di campioni di opale può causarne la disidratazione e, pertanto, la perdita dell'effetto di opalescenza. Una parziale reidratazione è ottenibile con prolungata immersione dei campioni danneggiati in acqua";

    $paragraphsArray = explode(".", $paragraph);

    //var_dump($paragraphArray);

    for ($i=0; $i < count($paragraphsArray) ; $i++) { 
        $singleParagraph = $paragraphsArray[$i];
        echo "<p>$singleParagraph . "."</p>";
    };

    ?>
</body>

</html>