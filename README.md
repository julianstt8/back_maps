# BACKEND LARAVEL

# Levantar servidor BD

Se debe utlizar wampp o xampp para levantar el servidor donde tendremos la BD localmente, al levantar el servidor ejecutar el query correspondiente.

# Query base de datos ó migracion laravel

Se puede realizar la migracion (php aritsan migrate:fresh --seed) ó ejecutar el query se encuentra en la raìz del back `query_ecotierra_bd.txt`, MySQL.

# Clonar repositorio

git clone https://github.com/julianstt8/back_maps.git

# Versiones usadas en el proyecto

Laravel Framework 8.83.23,
Composer version 2.3.10

## Instalaciones

CMD -> ingresas al proyecto back ejecutas los siguientes comandos `*composer install*` y `*composer remove laravel/sanctum*`

## Levantar servidor

Se debe cambiar la IP `192.168.80.11` que corresponde a la mía en los environment por la IP correspondiente a su PC (abrir CMD, escribir ipconfig y te arrojara la ip de su pc).
Luego ejecutar el comando `npm start` este levantara el servidor en esta IP.

## Colocar BD archivo .env

DB_DATABASE=maps_ecotierra

Solo cambiar esto, lo demás continúa igual
