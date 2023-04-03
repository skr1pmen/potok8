<?php
echo "Привет, мир!";
$one = "Первая строчка";
$two = "Вторая строчка";
$tree = "Третья строчка";
?>
<ul>
    <li><?php echo $one; ?></li>
    <li><?= $two; ?></li>
    <li><?php echo $tree; ?></li>
</ul>


<?php
$str_1 = "Привет";
$str_2 = "этот";
$str_3 = "мир!";

echo "<ul>
    <li>$str_1</li>
    <li>$str_2</li>
    <li>$str_3</li>
</ul>"

?>

<?php
$num_1 = 6;
$num_2 = 2;
$num_3 = 7;
$num_4 = 15;
$num_5 = -5;
echo $num_1 + $num_2 + $num_3 + $num_4 + $num_5;
echo 1012 * 0.3;
echo 2 ** 15;