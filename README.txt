

1.- Mover la carpeta del proyecto dentro de C:/xampp/htdocs
2.- Abrir Xampp y activar Apache y MySQL
3.- Ingresar a MyPHPAdmin para crear la base de datos
4.- Dentro de la carpeta del proyecto ingresar al archivo ".env"
5.- Una vez dentro ubicar la linea 12 "DB_DATABASE=" e introducir el nombre de la base de datosdespues del signo "=", hacer lo mismo enla linea 13 y 14 con el usuario de MyPHPAdmin y su contraseña.
6.- Abrir el CMD y dirigirse a la ruta C:/xampp/htdocs/nombre_proyecto y ejecutar el comando "php artisan migrate" para migrar las tablas dentro de la base de datos
7.- En el CMD dentro de la misma ruta ejecutar el comando "php artisan serve" para iniciar el servidor local y poer visualizar el proyecto en el navegador
8.- En el navegador escribir la direccion "127.0.0.1:8000" para ingresar a la paguina principal del proyecto