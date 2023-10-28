# Sprint1PielDLujoINGSOFT2
Proyecto semestral Ingeniería de Software 2

Integrantes:
- Adrian Camilo Ledezma
- Pablo David Salazar
- Daniel Cortés Pérez

# ecommerce-laravel-piel-d-lujo

Para el desarrollo de este proyecto nos apoyamos en las clases del desarrollador: https://www.youtube.com/@drehimself

## Características

- Front-end y back-end del sitio web de Piel de lujo completamente funcional.
- Se usó laravel voyager como panel de administración del sitio.
- javascript, jquery, bootstrap y css para el front-end.
- Un comando artesanal para inicializar la base de datos con todos los datos ficticios necesarios, incluso para  tablas Voyager `php artisan ecommerce:install`
- Diferentes roles y privilegios de usuario.
- Categorías, etiquetas para facilitar la búsqueda de productos.
- Y muchas más funciones.
---

# Guía de instalación

1. Clona este repositorio en tu máquina local: `https://github.com/aledezma25/Sprint1PielDLujoINGSOFT2.git`
1. En el archivo `.env.example` cambiale el nombre a `.env`  
1. Cree una nueva base de datos en mysql llamada `ecommerce`
1. Correr `composer install`
1. Correr `php artisan ecommerce:install`
1. Correr `php artisan serve` y luego visitar `http://127.0.0.1:8000/`
1. Correr `php artisan key:generate`
1. Credenciales para acceder al panel de administración (email: `admin@admin.com`, password: `password`)
1. Después de iniciar sesión como administrador, puede acceder a la página de administración desde `http://127.0.0.1:8000/admin` o directamente desde el panel de administración en la barra de navegación superior.

## Nota
1. Para acceder a la página de administración, debe tener el rol de administrador.
1. Se podrá registrar como usuario, pero solo el administrador puede darle el rol de administrador a un usuario.