<?php
//$x = 5;
//$y = 9;
//$z = -3;
//echo (3.4 * $x) + $y;
//echo ($x + $y) * $z;
//echo 0.8*$x + 0.9*$y + $x*$y;

$x = $_POST['x'];
$y = $_POST['y'];
echo $_POST;
var_dump($_POST);
$result = $x * $y;

?>

<form action="./index.php" method="post">
    <input type="text" name="x" placeholder="1">
    <input type="text" name="y" placeholder="2">
    <input type="submit" value="Кнопка">
</form>
<h1><?= $result; ?></h1>
