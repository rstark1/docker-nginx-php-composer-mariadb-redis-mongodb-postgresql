# DOCKER COMPOSE LEMP (LINUX NGINX,MYSQL,PHP)

Este repositorio contiene una pequeña configuración `docker-compose` para un server local  `LEMP (Linux, Nginx, MySQL, Redis, PHP 2 Versiones)` con contenedores separados, incluyendo una base de datos vacia.
[![LEMP](https://www.techcoil.com/wp-content/uploads/2018/03/lemp-logos.gif)](https://www.nginx.com/)

# Antes de ejecutar
- Se debe tener instalado y configurado Docker Compose.
[![docker-compose](https://cdn-images-1.medium.com/max/1400/1*olciNQ2FJu8HVmfjOjQCag.png)](https://docs.docker.com/)

## Detalles

Se usaron las siguientes versiones:

* PHP 7.4.3 (FPM)
* PHP 8.0 (FPM)
* Nginx 1.23.1
* MYSQL 8.0.30

## Configuración

La configuración de  Nginx se encuentra en `docker/dockerfiles/nginx/`.
La configuración de  PHP se encuentra en `docker/dockerfiles/php/`.

Puedes encontrar las siguientes variables de entorno incluidas en el archivo `.env`:

| Clave | Descripción |
|-----|-------------|
|APP_NAME|Nombre base utilizado para crear los contenedores.|
|MYSQL_DATABASE|Nombre de la base de datos vacia.|
|MYSQL_ROOT_PASSWORD|La contraseña del usuario ROOT.|
|REDIS_PASSWORD|La contraseña de Redis.|

### Instrucciones de instalación
- Entrar en la carpeta donde desea que ejecute
- Descargar todo haciendo un clone.
```sh
git clone https://github.com/rstark1/docker-laravel-linux-nginx-mysql-redis-php-2-versions
```
- Iniciar el servidor ejecutando el comando en consola:
```sh
$ docker-compose up -d
```
- Escribir en la barra de direccciones del navegador : 
```sh
    http://site8.test/ y http://site74.test/
```

## Entrando a los contenedores

Puede usar el siguiente comando para entrar a un contenedor:

Donde `{CONTAINER_NAME}` es el nombre del contenedor:

```sh
    docker exec -ti {CONTAINER_NAME} /bin/bash
```
* `{APP_NAME}-php8`
* `{APP_NAME}-php74`
* `{APP_NAME}-nginx`
* `{APP_NAME}-mysql`
* `{APP_NAME}-redis`

### Referencia
Este repositorio es una mejora de este: https://github.com/rstark1/docker-linux-nginx-mariadb-php.git
