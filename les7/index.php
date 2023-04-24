<?php
//$arr = [14, 57, -56, 115, 99, "156"];
//echo $arr[count($arr) - 1];

$arr[] = $_POST['test'];
var_dump($arr);

?>
<form method="post">
    <input type="text" name="test">
    <input type="submit" value="Кнопка">
</form>
