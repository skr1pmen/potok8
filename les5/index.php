<?php
for ($num = 1; $num <= 100; $num++){
    echo $num . "<br>";
}

$num = 1;
while ($num <= 100){
    echo $num . "<br>";
    $num++;
}

$num = 1;
do{
    echo $num . "<br>";
    $num++;
}
while ($num <= 100);

for ($i=1; $i<=100; $i++){
    if ($i % 7 == 0){
        $summ += $i;
    }
}
echo $summ;

$str = '';
$number = 12;
for ($i = 1; $i <= $number; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        $str .= $i;
    }
}
echo $str;

echo "<ul>";
$i = 1;
while ($i <= 10){
    echo "<li>Строка № $i</li>";
    $i++;
}
echo "</ul>";