# Aprendiendo PHP

## Introducción
PHP es un lenguaje de programación de uso común especialmente adecuado para el desarrollo web. Con PHP, podemos generar contenido dinámico en las páginas web, gestionar formularios, interactuar con bases de datos y realizar muchas otras tareas esenciales para el desarrollo de aplicaciones web.

Hasta ahora, hemos aprendido los conceptos fundamentales de PHP, incluyendo los **tipos de datos básicos** y su tratamiento, la **creación de funciones** y cómo utilizar otros archivos de código dentro de nuestros proyectos mediante `require` e `include`.

---

## Tipos de Datos Básicos en PHP

PHP maneja varios tipos de datos básicos que son esenciales para desarrollar aplicaciones web. Entre los tipos más comunes, encontramos:

- **Enteros (`int`)**: Números enteros, positivos o negativos, sin decimales. Ejemplo: `5`, `-42`.
- **Flotantes (`float`)**: Números con decimales. Ejemplo: `3.14`, `-0.99`.
- **Cadenas (`string`)**: Texto. Ejemplo: `"Hola, PHP!"`.
- **Booleanos (`bool`)**: Valores lógicos `true` o `false`, muy utilizados en operaciones de control de flujo.
- **Arreglos (`array`)**: Estructuras que permiten almacenar múltiples valores en una sola variable. Pueden ser indexados o asociativos.
- **Nulos (`null`)**: Representa una variable sin valor o una variable que ha sido eliminada.

Ejemplo de declaración y uso de estos tipos de datos:

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

## Operaciones con Tipos de Datos

Ejemplos de operaciones en PHP:

- **Operaciones aritméticas**: suma (`+`), resta (`-`), multiplicación (`*`), división (`/`).
- **Concatenación de cadenas**: Para unir cadenas de texto, se usa el operador `.`.

```php
<?php
$nombre = "Ana";
$edad = 25;
echo "Hola, " . $nombre . ". Tienes " . $edad . " años."; // Resultado: Hola, Ana. Tienes 25 años.
?>
```

## Creación de Funciones

Las **funciones** en PHP permiten reutilizar bloques de código y definir tareas específicas. La sintaxis básica es:

```php
<?php
function nombreFuncion($parametro1, $parametro2) {
    // Código de la función
    return $resultado;
}
?>
```
## Uso de `require` e `include`

Podemos organizar el código en múltiples archivos e incluirlos usando `include` o `require`:

- **`include`**: Incluye un archivo y permite que el programa siga ejecutándose si el archivo no se encuentra.
- **`require`**: Incluye un archivo, pero detiene la ejecución si el archivo no se encuentra.

Ejemplo:

**Archivo `funciones.php`:**

```php
<?php
function saludar($nombre) {
    return "¡Hola, " . $nombre . "!";
}
?>
```
**Archivo `index.php`:**

```php
<?php
require 'funciones.php';
echo saludar("Carlos"); // Resultado: ¡Hola, Carlos!
?>
```

## Buenas Prácticas al Escribir Funciones

1. **Nombres significativos**: Utiliza nombres que describan claramente la tarea de cada función, como `calcularPromedio()`.
2. **Documentación**: Añade comentarios para el propósito y parámetros de cada función.
3. **Evitar efectos secundarios**: Las funciones deben, en lo posible, depender solo de sus parámetros y no modificar variables globales.

## Próximos Temas

1. **Control de Flujo**: Exploraremos estructuras como `if`, `else`, `switch`, y bucles (`for`, `while`, `foreach`).
2. **Manipulación Avanzada de Cadenas y Arreglos**: Mejorar el manejo de estos tipos de datos.
3. **Interacción con Bases de Datos**: Cómo conectar PHP con bases de datos como MySQL.

