<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Material.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Customer.php';

$scatolette = new Food('Stuzzy Dog Monoproteico Pollo', 1.80, 'Stuzzy Monoproteico al Pollo, cibo umido per cani soggetti ad intolleranze alimentari.', 'Pollo fresco, ' . 'Brodo di pollo, ' . 'Sostanze minerali, ' . 'Vitamine', true);

$cuccia = new Material('Cuccia Ovale Morbida Tartan', 18.14, 'La cuccia ovale per cani di Lovedì è l\'accessorio indispensabile per il sonno tranquillo del tuo cane.',  '100% Tartan', true);

$osso = new Material('Osso Natural Prosciutto Goodbite', 5.9, 'L\'Osso creato appositamente per soddisfare l\'irrefrenabile istinto di masticare e di giocare del tuo amico a quattro zampe.', 'Componenti naturali, atossici e biodegradabili.', false);

$salviette = new Material('Salviette Dito Monouso Pulizia Denti', 8.9, 'Salviettine da dito monouso per la pulizia dei denti del cane, gatto o altri piccoli animali, confezione da 50pz', 'Detergente, ' . 'Menta, ' . 'Naturale', true);

var_dump($scatolette);
var_dump($cuccia);
var_dump($osso);
var_dump($salviette);

$customer = new Customer('Laura', 'Bigoni', 22, 'carta di credito', true);
$card = new CreditCard(47246193294648, false);
var_dump($card);
var_dump($customer);

var_dump($cuccia->getMaterials());
echo $customer->getDiscount();
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