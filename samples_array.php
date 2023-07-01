
<?php
# indexed Arrays
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
  }
?>
<br>
<?php
$myArray = array(
    0 => 'Big',
    1 => 'Small',
    2 => 'Up',
    3 => 'Down'
);

echo  "myArray[0]=" . $myArray[2];
?>
<br>
<?php
//Associative Arrays
$offer =[
    'item' => 'apple',
    'qty' => 10,
    'price' => 3.2
];

$amount =$offer['qty'] * $offer['price'];

echo  "amount=" .$amount;

?>


<br>
<?php
# Multi-dimensional Array
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";

?>

<br>
<?php
#sort
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}

?>
<?php
#Descending order
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
/*
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
*/
?>