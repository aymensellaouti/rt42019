<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 05/03/2019
 * Time: 16:28
 */

function load($className){
    $paths = [
      'class/',
      '',
      '../'
    ];
    foreach($paths as $path ) {
        $pathName = $path.$className.'.php';
        if (file_exists($pathName)) {
            require $pathName;
            break;
        }
    }
}

spl_autoload_register('load');