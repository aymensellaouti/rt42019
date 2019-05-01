<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 05/03/2019
 * Time: 16:24
 */

require 'autoloader.php';

$personne = new Personne();

echo 'Je suis : '.$personne->getName();

$pdo = ConnexionBD::getInstance();

$request =  "select * from personne";

$response = $pdo->query($request);

$persones = $response->fetchAll(PDO::FETCH_OBJ);

var_dump($persones);