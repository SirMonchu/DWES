<?php
    //ejemplo comentario de php
    echo "hola mundo <br>";

    $lunes = "lunes";
    $dia_mes = 14;

    echo $lunes. "<br>";
    echo $dia_mes. "<br>";

    echo "hoy es ".$lunes.", ".$dia_mes. "<br>";

    $numero_pie = 47;
    $precio = 30.99;
    $campaña = "2024/2025";
    $descuento = true;
    $colores = array("rojo", "verde", "azul");

    echo "<p> mostrar elementos de un array </p>";
    echo $colores[0]. "<br>";

    class Coche {
        public $marca;
        public function __construct($marca){
            $this->marca = $marca;
        }

        public function mostrar(){
            echo $this->marca. "<br>";
        }
    }

    $miChoche = new Coche("audi");
    $miChoche->mostrar();

    echo $_SERVER['HTTP_USER_AGENT']. "<br>";


    $x = 10; // Ámbito global

    function miFuncion() {
        global $x; // Hace $x accesible dentro de la función
        echo $x;
    }

    miFuncion(); // Imprime: 10

    function contador() {
        static $contador = 0; // Persiste su valor entre llamadas
        $contador++;
        echo "<p>Contador: $contador</p>";
    }
    
    contador(); // Imprime: 1
    contador(); // Imprime: 2
    contador(); // Imprime: 3
?>

<?php
    $foo = "0";  // $foo es string (ASCII 48)
    $foo += 2;   // $foo es ahora un integer (2)
    $foo = $foo + 1.3;  // $foo es ahora un float (3.3)
    $foo = 5 + "10"; // $foo es integer (15)
    $foo = 5 + (integer)"10 Cerdos pequeños";     // esto da error

    echo "<h2>pasar de decimal a binario</h2>";
    echo decbin(10);
?>

<?php
    echo "Hola, ", "mundo!";
    print "Hola mundo!";

    $nombre = "José Carlos";
    print "Hola, " . $nombre . "!";

    echo 10 + 20;

    echo "Este es un 'ejemplo' con comillas dobles y simples. <br>";

    printf("<p> Hola, me llamo %s! y tengo %s años </p>", $nombre, 22);
    printf("<p> Así se pone en binario %b</p>", 22);
    printf("<p> Esto es un ejemplo con la F %f </p>", 22.5);

    printf("Número flotante con 2 decimales: %.2f\n", 3.14159);

    printf("Número con ceros a la izquierda: '%05d'\n", 42); // Salida: Número con ceros a la izquierda: '00042'


    $txt_pi = sprintf("El número PI vale %+.2f", 3.1416);
    
    echo $txt_pi;
    
    echo "<br>";
    
    $ejemplo_Con_asig = "ejemplo";

    $ejemplo_Con_asig .= " con asignación";

    // $ejemplo_Con_asig = $ejemplo_Con_asig . " concatenación";

    echo $ejemplo_Con_asig;
?>