<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 05/03/2019
 * Time: 14:29
 */

function getTabByType(array $tab, string $type) {
    $result = array();
    $k = 0;
    $maFonction = 'is_'.$type;
    if (function_exists($maFonction)){
        for ($i=0; $i<count($tab); $i++) {
            if($maFonction($tab[$i])){
                $result[$k] = $tab[$i];
                $k++;
            }
        }
        return $result;
    } else {
        echo 'Fonction '.$maFonction.' indéfini';
    }
}

$tableau =  array(
    array(1,2,3),
    1,
    1.5,
    'test',
    2,
    true
);

var_dump(getTabByType($tableau, 'float'));