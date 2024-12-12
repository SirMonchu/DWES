# Sistema de Gestión de Electrodomésticos

Este proyecto es un sistema de gestión de electrodomésticos desarrollado en PHP utilizando el patrón MVC y SQLite como base de datos.

## Características Principales

- Sistema de autenticación de usuarios
- Gestión CRUD completa de productos
- Paginación de resultados
- Contraseñas encriptadas
- Manejo de sesiones y cookies
- Interfaz básica HTML

## Requisitos Previos

- PHP 7.0 o superior
- Extensión SQLite3 habilitada en PHP
- Servidor web (Apache recomendado)

## Instalación

1. Clonar o descargar el repositorio en el directorio del servidor web
2. Asegurarse de que la extensión SQLite3 está habilitada en php.ini
3. Crear una carpeta 'database' en el directorio raíz del proyecto
4. Asignar permisos de escritura a la carpeta 'database'
5. Acceder al proyecto a través del navegador web

## Estructura del Proyecto
- /ProyectoUD5
- /config - Archivos de configuración
- /controllers - Controladores MVC
- /models - Modelos de datos
- /views - Vistas de la aplicación
- /database - Base de datos SQLite
- index.php - Punto de entrada



## Credenciales por Defecto

- Usuario: admin
- Contraseña: admin

## Uso del Sistema

### Autenticación
- Acceder a la página principal
- Usar las credenciales proporcionadas
- El sistema mantiene la sesión activa
- Opción de cerrar sesión disponible

### Gestión de Productos

#### Listar Productos
- Acceder a la página principal tras el login
- Ver lista paginada de productos
- 5 productos por página

#### Crear Producto
1. Clic en "Nuevo Producto"
2. Rellenar formulario con:
   - Nombre
   - Descripción
   - Precio
   - Categoría
3. Guardar cambios

#### Editar Producto
1. Clic en "Editar" junto al producto
2. Modificar campos necesarios
3. Guardar cambios

#### Eliminar Producto
1. Clic en "Eliminar" junto al producto
2. Confirmar eliminación

### Categorías Disponibles
- Refrigeradores
- Lavadoras
- Microondas
- Aspiradoras

## Seguridad

- Contraseñas encriptadas con password_hash()
- Protección contra SQL injection
- Validación de sesiones
- Escape de datos HTML

## Manejo de Datos

### Base de Datos
- SQLite3 como motor de base de datos
- Archivo ubicado en /database/electrodomesticos.db
- Creación automática de tablas

### Tablas Principales

#### Users
- id (PRIMARY KEY)
- username
- password
- is_admin

#### Products
- id (PRIMARY KEY)
- name
- description
- price
- category

## Solución de Problemas (continuación)

3. Error de permisos
   - En Windows, asegurar permisos de escritura completos

4. Error de rutas
   - Verificar que BASE_URL está correctamente configurada
   - Comprobar estructura de directorios

## Funcionalidades Detalladas

### Sistema de Sesiones
- Tiempo de expiración: 24 horas
- Cookie de último acceso
- Cierre de sesión automático por inactividad

### Paginación
- 5 elementos por página
- Navegación mediante números de página
- Indicador de página actual

### Validaciones
- Campos obligatorios en formularios
- Validación de precios (números positivos)
- Validación de categorías predefinidas

## API y Métodos Principales

### AuthController
- login(): Gestiona autenticación
- logout(): Cierra sesión
- checkAuth(): Verifica autenticación

### ProductController
- index(): Lista productos
- create(): Crea producto
- edit(): Modifica producto
- delete(): Elimina producto

### Database
- getInstance(): Singleton de conexión
- createTables(): Estructura inicial
- getConnection(): Obtiene conexión

## Requisitos Técnicos Detallados

### Servidor
- Apache 2.4+
- PHP 7.0+
- SQLite3
