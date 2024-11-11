
# Proyecto de Alquiler de Coches

Este proyecto es una aplicación web simple para gestionar el alquiler de coches, creada en PHP. Permite a los usuarios ver una lista de coches disponibles, consultar detalles de cada coche, y calcular el precio total de un alquiler basado en el número de días seleccionados.

## Características

- **Lista de coches**: Muestra una lista de coches con información básica y enlaces a sus detalles.
- **Detalles del coche**: Información detallada de cada coche, incluyendo el precio por día y una imagen ilustrativa.
- **Cálculo de precio**: Los usuarios pueden introducir el número de días que desean alquilar el coche, y el sistema calculará el precio total.
- **Estilo neumórfico**: Interfaz moderna con un diseño neumórfico, proporcionando una experiencia visual atractiva y profesional.

## Estructura de archivos

- `index.php`: Página principal donde se muestran todos los coches disponibles para alquilar.
- `detalles.php`: Página de detalles de un coche específico, donde se puede seleccionar el número de días de alquiler.
- `confirmacion.php`: Página de confirmación que muestra el precio total calculado para el alquiler seleccionado.

## Instalación y Uso

1. **Clonar el repositorio**:
   ```bash
   git clone https://github.com/SirMonchu/DWES.git
   cd DWES/UD2/ProyectoUD2/index.php
   ```

2. **Colocar el proyecto en un servidor local**:
   - Usa un servidor como XAMPP, WAMP, o MAMP para ejecutar el proyecto en un entorno local.
   - Asegúrate de colocar los archivos dentro del directorio de tu servidor web (por ejemplo, en `htdocs` para XAMPP).

3. **Abrir la aplicación**:
   - Inicia tu servidor local.
   - Accede al proyecto desde tu navegador ingresando `http://localhost/DWES/UD2/ProyectoUD2/index.php`.

## Tecnologías utilizadas

- **PHP**: Para la lógica de la aplicación y la generación dinámica de contenido.
- **HTML y CSS**: Para estructurar y estilizar la interfaz de usuario, con un diseño en estilo neumórfico.
  
## Descripción de cada página

1. **Página principal (`index.php`)**: Muestra una lista de coches con sus precios por día y un enlace para ver detalles. Cada coche tiene una imagen ilustrativa y un enlace a su página de detalles.

2. **Página de detalles (`detalles.php`)**: Muestra información detallada de un coche seleccionado. El usuario puede ingresar el número de días que desea alquilar y hacer clic en "Calcular" para ver el precio total. También incluye un enlace para regresar a la página principal.

3. **Página de confirmación (`confirmacion.php`)**: Muestra el resumen del alquiler, con el precio total calculado y un botón para regresar al inicio.

## Estilo y Diseño

Este proyecto utiliza un estilo **neumórfico** que simula efectos de profundidad y suavidad en la interfaz, brindando una apariencia moderna y profesional. Este estilo está presente en:
- Los contenedores de cada página, creando sombras sutiles en el fondo.
- Los botones e inputs, que dan una sensación de relieve para que parezcan presionables.
