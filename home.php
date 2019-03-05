<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 05/03/2019
 * Time: 15:18
 */
session_start();

if (isset($_SESSION['user'])) {
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
          <div class="alert alert-success">
              Bonjour <?= $_SESSION['user'] ?>
          </div>
    </body>
    </html>

<?php
} else {
    header('location: login.php');
}
?>
