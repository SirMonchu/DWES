
# DWES

**Repositorio de Ramón Romero Cárdenas**

---

## Aprendiendo PHP

### Descripción
PHP es un lenguaje de programación ampliamente utilizado en el desarrollo web, que permite la creación de contenido dinámico en páginas web, gestión de formularios, interacción con bases de datos y muchas otras funciones esenciales para aplicaciones web. 

Hasta ahora, hemos explorado los conceptos básicos de PHP, incluyendo tipos de datos fundamentales, creación de funciones y la incorporación de código externo en nuestros proyectos mediante `require` e `include`.

### Tipos de Datos Básicos en PHP
PHP soporta varios tipos de datos esenciales para el desarrollo web, entre los cuales se destacan:

- **Enteros (int)**: Números enteros sin decimales, como `5` o `-42`.
- **Flotantes (float)**: Números decimales, como `3.14` o `-0.99`.
- **Cadenas (string)**: Texto, como `"Hola, PHP!"`.
- **Booleanos (bool)**: Valores `true` o `false`, muy útiles para estructuras de control.
- **Arreglos (array)**: Estructuras que almacenan múltiples valores en una sola variable, ya sean indexados o asociativos.
- **Nulos (null)**: Indica que una variable no tiene valor.

#### Ejemplo de Uso:
```php
<?php
$entero = 10;
$flotante = 10.5;
$cadena = "Hola, PHP!";
$booleano = true;
$arreglo = array("Manzana", "Banana", "Cereza");
$nulo = null;

echo $cadena; // Muestra "Hola, PHP!"
?>
```

### Operaciones Comunes
PHP permite realizar diversas operaciones con estos tipos de datos, tales como:

- **Operaciones Aritméticas**: Suma (`+`), resta (`-`), multiplicación (`*`), división (`/`).
- **Concatenación de Cadenas**: Uso del operador `.` para unir textos.

#### Ejemplo:
```php
<?php
$nombre = "Ana";
$edad = 25;
echo "Hola, " . $nombre . ". Tienes " . $edad . " años."; // Muestra: Hola, Ana. Tienes 25 años.
?>
```

### Creación de Funciones
Las funciones en PHP permiten estructurar el código en tareas específicas y reutilizables.

#### Ejemplo de Sintaxis Básica:
```php
<?php
function nombreFuncion($parametro1, $parametro2) {
    // Código de la función
    return $resultado;
}
?>
```

### Uso de `require` e `include`
Es posible organizar el código en varios archivos e incluirlos en el programa:

- **`include`**: Incluye un archivo y permite que el programa continúe si el archivo no se encuentra.
- **`require`**: Incluye un archivo, pero detiene la ejecución si el archivo no se encuentra.

#### Ejemplo:
- **Archivo `funciones.php`:**
  ```php
  <?php
  function saludar($nombre) {
      return "¡Hola, " . $nombre . "!";
  }
  ?>
  ```
- **Archivo `index.php`:**
  ```php
  <?php
  require 'funciones.php';
  echo saludar("Carlos"); // Resultado: ¡Hola, Carlos!
  ?>
  ```

### Buenas Prácticas en Funciones
- **Nombres Claros**: Utilizar nombres que describan la función, como `calcularPromedio()`.
- **Documentación**: Añadir comentarios sobre la funcionalidad y parámetros de cada función.
- **Minimizar Efectos Secundarios**: Las funciones deberían depender solo de sus parámetros y evitar modificar variables globales.

### Próximos Temas

- **Interacción con Bases de Datos**: Conectar PHP con bases de datos como MySQL.

---
