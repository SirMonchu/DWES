<?php

print "<h1>ARRAYS</h1>";

print "Un array es un tipo de datos que nos permite almacenar varios valores. Cada miembro del array se almacena en una posición a la que se hace referencia utilizando un valor clave. Las claves pueden ser numéricas o asociativas.";

print "<br/>";

print "Array asociativo y sus dos formas de usarlo";

$persona = array(
    "nombre" => "Juan",
    "apellidos" => "Perez",
    "edad" => 20
);

$alumno = [
    "nombre"=> "Juan",
    "apellidos" => "Perez",
    "edad" => "20"
];

print "<br/>";

print "Imprimir array asociativo de persona";

print_r($persona);
print "<br/>";

print "Imprimir array asociativo de alumno";

print_r($alumno);

print "<br/>";

print "Array numerico y sus tres formas de crearlos";

$modulos = array(0 => "Programacion", 1 => "Base de Datos", 2 => "Desarrollo Web");
$alumnos1 = array("Juan", "Pedro", "Jose");
$alumnos2 = ["Juan", "Pedro", "Jose"];

print "<br/>";

print "Imprimir array numerico de modulos";

print_r($modulos);

print "<br/>";

print "Imprimir array numerico de alumnos 1";

print_r($alumnos1);

print "<br/>";

print"Imprimir array numerico de alumno 2";

print_r($alumnos2);

print"<br/>";

print"El alumno 2 es: $alumnos2[1]";
print "El alumno 2 es: ". $alumnos2[1];

print "<br/>";

print "Texto como array";

print "<br> print_r de la variable TEXTO para ver que las cadenas se pueden tratar como arrays  ";
    $texto= "hola";
    print_r ($texto);
    print "<br /> ELEMENTO CADENA DE TEXTO hola [3]: ". $texto[3];

print "<br/>";

print "Array bidimensional y multidimensional";

print "<br/>";

$cliclos = array(
    "DAW" => array("PR" => "Programacion", "BD" => "Base de datos", "DWES" => "Desarrollo web en Entorno Servidor"),
    "DAM" => array("PR" => "Programacion", "BD" => "Base de datos", "PMDM" => "Programacion Multimedia y Dispositivos Moviles")
);

print "Array ciclos";

print "<br/>";

print($cliclos);

print "<br/>";

print "Fila daw del array cliclos";

print "<br/>";

print_r($cliclos["DAW"]);

print "Elemento PR de la fila daw del array cliclos";

print "<br/>";

print_r($cliclos["DAW"]["PR"]);

$deportes = [
    "Futbol" => ["Femenino", "Masculino"],
    "Basketball" => ["Femenino", "Masculino"],
    "Tenis" => ["Femenino", "Masculino"]
];

$deportes2 = [
    ["Futbol", "Femenino", "Masculino"],
    ["Basketball", "Femenino", "Masculino"],
    ["Tenis", "Femenino", "Masculino"]
];

print "Asociativo: clave => valor";

print "<br/>";

print_r($deportes);

print "<br/>";

print "Numerico: indice => valor";

print_r($deportes2);

print "<br/>";

print "Array sin especificar el tamaño";

print "<br/>";

$cena_navidad[] = "Carlos";
$cena_navidad[] = "Maria";
$cena_navidad[] = "Pedro";

print_r($cena_navidad);

print "<br/>";

print "Recorrer array";

print "<br/>";

print "Foreach";

foreach ($cena_navidad as $cena) {
    print "Invitado: <br/>". $cena . "<br/>";
}

print "<br/>";

foreach ($cena_navidad as $id => $invitado) {

    print "El invitado " . $id+1 . " es: " . $invitado . "<br/>";
}

print "<br/>";

// ANEXO FOREACH con clave valor <br />";
print "<h2>FOREACH con clave valor de la variable SERVER </h2>";
 
foreach ($_SERVER as $clave => $valor) 
{
    print "<br/>";
    print "<tr/>";
        print "<td> Clave: ".$clave."</td> --------- Valor: ";
        print "<td>".$valor."</td>";
    print "</tr>";

}

print "<br/>";

print "Recorrer array con current y reset";

print "<br/>";

$musica = array("Rock", "Pop", "Jazz");

print_r($musica);

print "<br/>";

print "Recorrer array con while next";

print "<br/>";

while ($valor = current($musica))
{
    print $valor . "<br/>";
    next($musica);
}

print "<br/>";

echo "<br><br /> <b> Recorrerlo uno a uno </b>";

   print "<br/>Reinicio el puntero con reset: ".reset($musica) ;
   print "<br/>La clave de la posición actual del array es: ". key($musica) ;
   print "<br/>El elemento del array musica es ".current($musica) ;
   next($musica);
   next($musica);
   print "<br/>El elemento del array musica es ".current($musica);
   prev($musica);
   print "La clace actual del array es: ".key($musica);
   print "El elemento del array musica es ".current($musica);

   print "Reinicio el puntero con reset: ".reset($musica) ;
   print "La cavle de la ciudad actual del array es: ".key($musica) ;
   print "Elelemento final del array de musica es ".end($musica) ;
   print "La clave actual del array es: ".key($musica) ;

   print "Funciones importantes para tratar arrays";

   print "Eliminar elemento de un array";
   unset($musica[0]);
   unset($musica[1]);

   $musica[] = "Cumbia";
   sort($musica);
   print_r($musica);

   print "Busqueda con in_array";
   if (in_array("Cumbia", $musica)) {
       print "Cumbia se encuentra en el array";
   } else {
       print "Cumbia no se encuentra en el array";
   }


?>