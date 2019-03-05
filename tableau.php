<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 19/02/2019
 * Time: 14:51
 */

$chaine = 'Bonjour le monde :)';
$tab =count_chars($chaine,1)
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="row">
<div class="col-md-4 col-sm-12">
    <table class="table" border="1">
        <?php
        foreach ($tab as $indice => $valeur){
            ?>
            <tr >
                <td ><?= chr($indice)?></td>
                <td><?= $valeur?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
    <div class=" col-md-8 col-sm-12">
        Bonjour
    </div>
</div>
</body>
</html>
