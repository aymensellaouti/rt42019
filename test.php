<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 19/02/2019
 * Time: 14:27
 */
$nom = 'aymen';
$ndv ='varDyn';
$$ndv ='contenuVarDyn';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
        function test() {
            echo $GLOBALS['nom'];
            echo $nom;
        }
        ?>
    </title>
</head>
<body>

<h1>Bonjour <?= $nom ?></h1>

<?php
 test();
 print_r($GLOBALS);
?>
</body>
</html>
