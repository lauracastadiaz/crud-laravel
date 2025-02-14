# Proyecto CRUD de Tareas en Laravel ✔️

Este proyecto es una aplicación de gestión de tareas construida con el framework Laravel. Permite crear, leer, actualizar y eliminar tareas, y gestionar la fecha y hora de vencimiento de cada tarea.

## Uso 💻
- Crear tarea

En la vista de "Crear Tarea", puedes ingresar los detalles de la tarea, incluyendo el título, la descripción, la fecha y hora límite (utilizando un campo de fecha y hora), y el estado de la tarea. Después de rellenar los campos, haz clic en "Crear".

- Ver tareas

En la vista principal (índice), verás todas las tareas almacenadas en la base de datos. Cada tarea tendrá la opción de ser editada o eliminada.

- Editar tarea

Al hacer clic en "Editar", puedes modificar los detalles de la tarea, incluyendo la fecha límite y el estado.

- Eliminar tarea

Para eliminar una tarea, haz clic en el botón "Eliminar" en la vista de la tabla de tareas. Se te pedirá confirmar la eliminación.

## Funcionalidades ✨

- CRUD de tareas: Crear, leer, actualizar y eliminar tareas.
- Fecha: Selección de fecha utilizando el campo due_date.
- Validaciones: Las tareas deben tener título, descripción, fecha límite y estado.
- Mensajes de éxito: Cuando una tarea se crea o actualiza correctamente, se muestra un mensaje de éxito.

## Tecnologías usadas 🖇️
- Laravel 11 (backend)
- PHP 8
- Bootstrap 5 (para el diseño)
- MySQL (base de datos)

## 🔧 Instalación por si quieres probar en local

- Instalar dependencias con Composer
- Entra en el directorio del proyecto y ejecuta el siguiente comando para instalar todas las dependencias necesarias.
```
cd laravel-tasks-crud
composer install
Configurar el archivo .env
```

- Crea una copia del archivo .env.example con el siguiente comando:
```
cp .env.example .env
```

- Luego, abre el archivo .env y configura los detalles de la base de datos:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

```

Si usas SQLite, la configuración de la base de datos será diferente:
```
DB_CONNECTION=sqlite
DB_DATABASE=/ruta/a/tu/base_de_datos/database.sqlite
```

- Generar la clave de aplicación

Ejecuta el siguiente comando para generar una clave de aplicación única:

`php artisan key:generate`

- Migrar la base de datos

Crea las tablas necesarias ejecutando las migraciones:

`php artisan migrate`

- Si deseas poblar la base de datos con datos de prueba (opcional), puedes usar un seeder:

`php artisan db:seed`

- Iniciar el servidor local

Ahora puedes iniciar el servidor de desarrollo local con el siguiente comando:

`php artisan serve`

La aplicación estará disponible en http://127.0.0.1:8000.

## ✨ Requisitos

Antes de empezar, asegúrate de tener instalados los siguientes programas:

- [PHP](https://www.php.net/) (recomendado: versión 8.x o superior)
- [Composer](https://getcomposer.org/)
- [Laravel versión 11](https://laravel.com/) 
- [Base de Datos (MySQL o SQLite)](https://www.mysql.com/) 

