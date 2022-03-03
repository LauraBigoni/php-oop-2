<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Material.php';
require_once __DIR__ . '/models/Food.php';

$scatolette = new Food('Stuzzy Dog Monoproteico Pollo', 1.80, 'Stuzzy Monoproteico al Pollo, cibo umido per cani soggetti ad intolleranze alimentari.', 'Stuzzy Monoproteico al Pollo è un patè per cani con alta percentuale di materie prime, con pezzi selezionati. La ricetta monoproteica, grain free e gluten free, è caratterizzata da un\'elevata digeribilità, priva di coloranti e conservanti aggiunti, adatta ai cani cui è stato prescritto un regime alimentare ad eliminazione. La formulazione di Stuzzy Monoproteico al Pollo è stata approvata nutrizionalmente dal Dipartimento di Scienze Mediche Veterinarie dell’Alma Mater Studiorum Università di Bologna.', 5, 'Pollo fresco, ' . 'Brodo di pollo, ' . 'Sostanze minerali, ' . 'Vitamine', true);

var_dump($scatolette);


$cuccia = new Material('Cuccia Ovale Morbida Tartan', 18.14, 'La cuccia ovale per cani di Lovedì è l\'accessorio indispensabile per il sonno tranquillo del tuo cane.', 'Con imbottitura morbida ed indeformabile, è resistente e duratura nel tempo e contribuirà a donare istanti di intenso relax al tuo amico a quattro zampe. Un elemento importante che compone la cuccia è il cuscino, estraibile e rivestito di un tessuto robusto e resistente che proteggerà il tuo peloso dal freddo del pavimento. Cuccia per cani con cuscino estraibile dalla soffice imbottitura, in tessuto robusto e resistente, per il relax del tuo cane.',  4.6, '100% Tartan', true);

var_dump($cuccia);


$osso = new Material('Osso Natural Prosciutto Goodbite', 5.9, 'L\'Osso di pollo Goodbite Natural di Ferplast è un simpatico gioco per cani creato appositamente per soddisfare l\'irrefrenabile istinto di masticare e di giocare del tuo amico a quattro zampe.', 'Si tratta di un osso, aromatizzato al prosciutto, realizzato con componenti naturali, atossici e biodegradabili che, anche se ingerito, non è pericoloso e non altera la dieta del cane in quanto completamente privo di sostanze nutritive. Utile come antistress, l\' Osso di Pollo Goodbite Natural, aiuta a tenere puliti i denti grazie all\'azione meccanica della masticazione: riduce la formazione del tartaro, rinforza i denti e favorisce la salute della bocca del tuo fedele amico. Gioco per cani commestibile, privo di calorie, naturale, attrattivo, igienicamente sicuro: non sviluppa microbi, patogeni, muffe e funghi. Si conserva a lungo il suo sapore e non scade. Adatto a cuccioli e cani DIMENSIONI: XS: 4 ossi da 15 g. S: 2 ossi da 40 g. M: 2 ossi da 70 g.', 3.8, 'Componenti naturali, atossici e biodegradabili.', false);

var_dump($osso);


$salviette = new Material('Salviette Dito Monouso Pulizia Denti', 8.9, 'Salviettine da dito monouso per la pulizia dei denti del cane, gatto o altri piccoli animali, confezione da 50pz', 'Salviettine da dito monouso per la pulizia dei denti del cane, gatto o altri piccoli animali con lozione detergente e nutriente, con menta. Questo prodotto è una valida alternativa allo spazzolino da denti e al dentifricio per animali domestici. Puoi usarlo semplicemente indossandolo e con il dito indice e il pollice potrai pulire i denti del tuo amato peloso. Confezione da 50 pezzi.', 3, 'Detergente, ' . 'Menta, ' . 'Naturale', true);

var_dump($salviette);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet shop</title>
</head>

<body>
    
</body>

</html>