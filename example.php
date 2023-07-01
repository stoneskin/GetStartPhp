<!DOCTYPE html>
<html>
<body>

<?php
$username ='test';
$greeting ='Hello, '.$username . '!';

$offer =[
    'item' => 'apple',
    'qty' => 10,
    'price' => 3.2
];

$amount =$offer['qty'] * $offer['price'];
?>

<?=$greeting ?>
</br>
The amount of <?=$offer['item']?> is <?=$amount ?>
<br>


</body>
</html>