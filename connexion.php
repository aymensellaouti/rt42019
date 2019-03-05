<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 05/03/2019
 * Time: 14:57
 */
session_start();
$userName = $_POST['username'];
$pwd = $_POST['pwd'];

if($userName == 'test' && $pwd == 'userTest') {
    $_SESSION['user']=$userName;
    $path = 'home.php';
} else {
    $_SESSION['errorMessage'] = 'Veuillez vérifier vos credentials';
    $path = 'login.php';
}

header('location: '.$path);