<?php
/**
 * Created by PhpStorm.
 * User: xenlord
 * Date: 14/11/17
 * Time: 10:37
 */

$fichero = 'AJAX3.xml';

if(file_exists($fichero)){
    $output = file_get_contents($fichero);
    header('Content-Type: application/XML');
    print ($output);
} else{
    print("No existe el fichero");
}

?>