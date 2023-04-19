<?php
//$arr = [15, 3.14, "Строка", [12]];
//echo($arr);

//var_dump($arr);
//$arr[] = "sky";
//var_dump($arr);

//foreach ($arr as $i){
//    var_dump($i);
//}

//for ($i = 0; $i < 2; $i++){
//    var_dump($arr[$i]);
//}

//$users = [
//    [
//        'name' => 'Иван',
//        'surname' => 'Булгаков',
//        'age' => 47
//    ],
//    [
//        'name' => 'Максим',
//        'surname' => 'Ларионов',
//        'age' => 14
//    ],
//];
//echo $users[0]['name'] . " " . $users[0]['surname'] . "<br>Тебе: " . $users[0]['age'];

$x = [];
for ($i = 1; $i <= 10; $i++){
    $x[] = rand(0, 10);
}
//for ($j = 0; $j < count($x); $j++){
//    $x[$j] = "$x[$j]$j";
//}
var_dump($x);
