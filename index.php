<?php
require_once 'Writable.php';
require_once 'Item.php';
require_once 'Food.php';
require_once 'Drink.php';
require_once 'Bonus.php';
require_once 'ItemsWriter.php';

$rom = new Drink('Capitan Morgan','1000');

$bigTesti = new Food('Big Testi','50');

$tester = new ItemsWriter();
$tester->addItem(new Drink('Coca cola', '199'));
$tester->addItem(new Food('snikers',50000000));
$tester->addItem(new Bonus('ass','50','1'));
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container">
    <div id="header">
        <h2>Testing classes</h2>
    </div>
    <div id="content">
        <?=$bigTesti->getSummary()?>
        <br>
        <?=$rom->getSummary()?>
        <br>
        <?=$tester->write()?>
    </div>
    <div id="footer">
        <h2>Hillel lesson 12</h2>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>