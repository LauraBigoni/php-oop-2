<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Material.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Customer.php';

$scatolette = new Food('Stuzzy Dog Monoproteico Pollo', 1.80, 'Stuzzy Monoproteico al Pollo, cibo umido per cani soggetti ad intolleranze alimentari.', 'Pollo fresco, ' . 'Brodo di pollo, ' . 'Sostanze minerali, ' . 'Vitamine', true);

$cuccia = new Material('Cuccia Ovale Morbida Tartan', 18.14, 'La cuccia ovale per cani di Lovedì è l\'accessorio indispensabile per il sonno tranquillo del tuo cane.',  '100% Tartan', true);

$osso = new Material('Osso Natural Prosciutto Goodbite', 5.9, 'L\'Osso creato appositamente per soddisfare l\'irrefrenabile istinto di masticare e di giocare del tuo amico a quattro zampe.', 'Componenti naturali, atossici e biodegradabili.', false);

$salviette = new Material('Salviette Dito Monouso Pulizia Denti', 8.9, 'Salviettine da dito monouso per la pulizia dei denti del cane, gatto o altri piccoli animali, confezione da 50pz', 'Detergente, ' . 'Menta, ' . 'Naturale', true);

// var_dump($scatolette);
// var_dump($cuccia);
// var_dump($osso);
// var_dump($salviette);
// var_dump($cuccia->getMaterials());
// var_dump($scatolette->getDescription());
// var_dump($scatolette->getPrice());

$card = new CreditCard(47246193294648, 2022, 100);
$new_credit_card = new CreditCard(938464910, 2021, 0);
$customer = new Customer('Laura', 'Bigoni', 22, $card, true);
$new_customer = new Customer('Piero', 'Pierino', 52, $new_credit_card, false);

// var_dump($customer->getDiscount());
// var_dump($customer);
// var_dump($card);
// var_dump($customer->buyProduct($cuccia));
// var_dump($new_customer->buyProduct($osso));
// var_dump($card);
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
    <h1>Ciao, <?php echo $customer->getName(); ?></h1>
    <p>Hai <?php echo $customer->getBalance(); ?> nel tuo conto</p>
    <p>Hai appena comprato: '<?php echo $cuccia->name; ?>'</p>
    <p><?php echo $customer->buyProduct($cuccia) ?></p>
    <p>Saldo rimanente nel tuo conto: <?php echo $customer->getBalance(); ?></p>
</body>

</html>