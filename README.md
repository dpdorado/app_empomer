# Aplicación web para la empresa Empomer

>La aplicación esta desarrollada con Laravel 8 y su sistema de plantillas Blade y se utiliza Bootstrap principalmente para los diseño para los diseños.
>
>Se utiliza como motor de bases de datos a MySQL y se utiliza los modelos Eloquent y Migraciones de Laravel.



# Funcionalidades

> * Sistema de autentificación Laravel Jetstream con registro de usuarios, inicio de sesión, recuperación de contraseñas y una vista del perfil de usuario.
> 
> * Registro, actualización, eliminación y listado de clientes.
>
> * Registro, actualización, eliminación y 
listado de facturas.
>
> * Registro, actualización, eliminación y listado de ofrendas.
>
> * Registro, actualización, eliminación y listado de categorias (servicio o producto).
>
> Pendientes: 
>
>* Agregar roles al sistema (rol cliente y rol admin)
>
>* Agregar vistas que permitan a los clientes visualizar sus datos.

# Modelo físico de la Base de Datos

# Vistas de la App Empomer

![Modelo físico de la BD Empomer](https://raw.githubusercontent.com/dpdorado/app_empomer/main/bd/modelo_fisico.png)

# Requerimientos

>* Tener instalado composer.
>* Tener instalado git.
>* Tener instalado Xampp.

# Descargar y correr la App Empomer

>1. *git clone repo*: clonamos el repositorio que aloja la aplicación.
>2. Nos ubicamos en el directorio empomer y descargamos las depencias con *composer install*.
>3. Iniciamos los servicios *Xampp* especialmente *MySQL* y creamos la Basede Datos con nombre *empomer*.
>4. Nos aseguramos que las migraciones esten creadas con el comando *php artisan migrate* y verificamos que las tablas esten creadas en la Base de Datos *empomer*.
>5. Corremos la App Empomer con el comando *php artisan serve* desde el directorio empomer.
>6. Desde el navegador accedemos a la url: http://127.0.0.1:8000/


