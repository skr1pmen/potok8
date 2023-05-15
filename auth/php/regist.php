<?php
session_start();
$user_name = $_POST['user_name'];
$login = $_POST['login'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

if ($password != $password_repeat){
    echo "Пароли не совпадают";
}
else{
    $file = file_get_contents('../db.json');
    $data_from_file = json_decode($file);
    if (!empty($data_from_file)){
        foreach ($data_from_file as $user){
            if ($user->login == $login){
                $_SESSION['error'] = "Пользователь существует!";
                header("Location: ../pages/regist.php");
            }
        }
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $user = [
        'username' => $user_name,
        'login' =>$login,
        'password' => $password
    ];
    $data_from_file[] = $user;
    $json = json_encode($data_from_file);
    file_put_contents('../db.json', $json);
}