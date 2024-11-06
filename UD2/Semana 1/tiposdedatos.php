<?php

    $variable = 10.7;
    $variable = 10;
    $variable = "Hola mundo";
    $variable = true;
    $variable = null;
    $variable = array(1, 2, 3);

    echo gettype($variable) . "<br>";

    echo var_dump($variable);

    echo "<br> La variables es un array? ". (is_array($variable) ? "Si" : "No"). "<br>";

    error_reporting(0);

    echo settype($variable, "string");

    error_reporting(E_ALL);

    echo settype($variable, "array");
    echo settype($variable, "string");


    echo var_dump($variable);

    echo "<br>", isset($variable) ? "Si" : "No";
?>