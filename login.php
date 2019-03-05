<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 05/03/2019
 * Time: 14:53
 */
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>

<form action="connexion.php" method="post" enctype="multipart/form-data">
    <input name="username" type="text" class="form-control">
    <input name="pwd" type="password" class="form-control">
    <input type="submit" class="btn btn-primary" value="login">
</form>
<?php
 if (isset($_SESSION['errorMessage'])) {
     ?>
     <div class="alert alert-danger">
         <?= $_SESSION['errorMessage'] ?>
     </div>
     <?php
     unset($_SESSION['errorMessage']);
 }
?>
</body>
</html>
