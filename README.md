# DOCKER COMPOSE LEMP (LINUX NGINX,MYSQL,PostgreSQL,PHP)

Este repositorio contiene una pequeña configuración `docker-compose` para un server local  `LEMP (Linux, Nginx, MariaDB, PostgreSQL, Redis, Composer, PHP)` con contenedores separados, incluyendo una base de datos vacia.
[![LEMP](https://www.techcoil.com/wp-content/uploads/2018/03/lemp-logos.gif)](https://www.nginx.com/)

# Antes de ejecutar
- Se debe tener instalado y configurado Docker Compose.
[![docker-compose](https://cdn-images-1.medium.com/max/1400/1*olciNQ2FJu8HVmfjOjQCag.png)](https://docs.docker.com/)

## Detalles

Se usaron las siguientes versiones:

* PHP 7.2 (FPM) con Xdebug 3.1.5
* Composer 1.9.0
* Nginx 1.14.0
* MariaDB 10.4.8
* PosgreSQL 13.4
* Redis 4.0.9
* Mongo 5.0.3

## Configuración

La configuración de  Nginx se encuentra en `docker/dockerfiles/nginx/`.
La configuración de  PHP se encuentra en `docker/dockerfiles/php/`.

Puedes encontrar las siguientes variables de entorno incluidas en el archivo `.env`:

| Clave | Descripción |
|-----|-------------|
|APP_NAME|Nombre base utilizado para crear los contenedores.|
|MARIADB_DATABASE|Nombre de la base de datos de ejemplo de MariaDB.|
|MARIADB_ROOT_PASSWORD|Password de MariaDB.|
|POSTGRESQL_USER|Nombre del usuario de PostgreSQL.|
|POSTGRESQL_PASSWORD|Password de PostgreSQL.|
|POSTGRESQL_DATABASE|Nombre de la base de datos de ejemplo de PostgreSQL.|

### Instrucciones de instalación
- Entrar en la carpeta donde desea que ejecute
- Descargar todo haciendo un clone.
```sh
git clone git@gitlab.com:jehutyhernandez/tw-docker-laravel-nginx-mysql-2-php.git
```
- Iniciar el servidor ejecutando el comando en consola:
```sh
$ docker-compose up -d
```
- Escribir en la barra de direccciones del navegador : 
```sh
    http://pwa.host/
```

## Entrando a los contenedores

Puede usar el siguiente comando para entrar a un contenedor:

Donde `{CONTAINER_NAME}` es el nombre del contenedor:

```sh
    docker exec -ti {CONTAINER_NAME} /bin/bash
```
* `{APP_NAME}-php`
* `{APP_NAME}-nginx`
* `{APP_NAME}-mariadb`
* `{APP_NAME}-mongo`
* `{APP_NAME}-postgresql`
* `{APP_NAME}-redis`

### Referencia
Este repositorio es una mejora de este: https://gitlab.com/jehutyhernandez/tw-docker-laravel-nginx-mysql-2-php
