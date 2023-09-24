<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!<br>";
$version = phpversion();

echo "version=";
?>

<?=$version ?>
<br>

php -i or phpInfo()
<?=phpinfo() ?>
</body>
</html>