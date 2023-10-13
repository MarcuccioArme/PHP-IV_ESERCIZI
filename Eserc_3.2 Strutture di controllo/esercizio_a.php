<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pubblicità casuale</title>

    <style>
        .blink {
            animation: blinker 2s linear infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        .image-container {
            text-align: center;
        }
</style>

</head>
<body>

<?php

    // Definiamo un array di messaggi pubblicitari con vari tipi di contenuti.
    $messaggiPubblicitari = array(

        // Ogni elemento dell'array rappresenta un messaggio pubblicitario.
        array(
            'tipo' => 'testo_con_immagine',
            'contenuto' => '<h1 class="blink" style="text-align: center">Vieni a visitare il nostro centro benessere e concediti un meritato relax. I nostri trattamenti olistici ti aiuteranno a ristabilire l\'equilibrio tra mente, corpo e anima, regalandoti una sensazione di serenità e rinascita.</h1>',
            'immagine' => 'Immagini\img1.jpg',
        ),
        array(
            'tipo' => 'testo_con_immagine',
            'contenuto' => '<marquee><h1>La nostra collezione di abbigliamento autunnale ti farà innamorare della moda. Dai cappotti eleganti agli accessori accattivanti, troverai tutto ciò di cui hai bisogno per affrontare la stagione con stile e comfort.</h1></marquee>',
            'immagine' => 'Immagini\img2.jpg',
        ),
        array(
            'tipo' => 'testo_con_immagine',
            'contenuto' => '<h1 class="blink" style="text-align: center">Scopri il gusto irresistibile dei nostri gelati artigianali, preparati con ingredienti freschi e genuini. Ogni morso ti porterà in un viaggio gustativo unico, fatto di sapori autentici e cremosità straordinaria.</h1>',
            'immagine' => 'Immagini\img3.jpg',
        ),


        array(
            'tipo' => 'testo',
            'contenuto' => '<marquee><h1>Se sei un appassionato di cucina, non puoi perderti la nostra selezione di utensili da cucina di alta qualità. Dai pentolame agli accessori da chef, abbiamo tutto ciò che serve per trasformare la tua cucina in un laboratorio culinario.</h1></marquee>',
        ),
        array(
            'tipo' => 'testo',
            'contenuto' => '<h1 class="blink" style="text-align: center">Esplora le meraviglie del mondo subacqueo con le nostre escursioni di snorkeling. Le acque cristalline, i colori vivaci dei coralli e la varietà di pesci tropicali renderanno la tua avventura subacquea indimenticabile.</h1>',
        ),
        array(
            'tipo' => 'testo',
            'contenuto' => '<h1 class="blink" style="text-align: center">Il nostro ristorante è il luogo perfetto per gli amanti della buona cucina. Dai piatti tradizionali ai sapori internazionali, ogni boccone è un\'esperienza culinaria straordinaria che ti lascerà desiderare di più.</h1>',
        ),


        array(
            'tipo' => 'immagine',
            'contenuto' => 'Immagini\img4.jpeg',
        ),
        array(
            'tipo' => 'immagine',
            'contenuto' => 'Immagini\img5.jpg',
        ),
        array(
            'tipo' => 'immagine',
            'contenuto' => 'Immagini\img6.jpg',
        ),
        
    );

    // Selezioniamo casualmente un messaggio pubblicitario dall'array.
    $messaggioCasuale = $messaggiPubblicitari[rand(0, count($messaggiPubblicitari) - 1)];

    // Ora, a seconda del tipo di messaggio, visualizziamo il contenuto appropriato.
    if ($messaggioCasuale['tipo'] == 'immagine') {

        // Se il messaggio è un'immagine, visualizzala
        echo '<div class="image-container"><img src="' . $messaggioCasuale['contenuto'] . '" alt="Pubblicità"></div>';

    } elseif ($messaggioCasuale['tipo'] == 'testo') {

        // Se il messaggio è solo testuale, visualizzalo
        echo $messaggioCasuale['contenuto'];

    } elseif ($messaggioCasuale['tipo'] == 'testo_con_immagine') {

        // Se il messaggio contiene sia testo che un'immagine, visualizza entrambi
        echo $messaggioCasuale['contenuto'];
        echo '<div class="image-container"><img src="' . $messaggioCasuale['immagine'] . '" alt="Pubblicità"></div>';

    }

?>
    
</body>
</html>