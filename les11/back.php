<?php
$one = (int)$_GET['one'];
$two = (int)$_GET['two'];
$operation = $_GET['operation'];

if (!empty($one) and !empty($two)){
    if ($operation == "+"){
        echo $one + $two;
    }
    elseif ($operation == "-"){
        echo $one - $two;
    }
    elseif ($operation == "*"){
        echo $one * $two;
    }
    elseif ($operation == "/"){
        echo $one / $two;
    }
    elseif ($operation == "**"){
        echo $one ** $two;
    }
}
else{
    echo "Данных нет!";
}