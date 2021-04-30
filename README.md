# Docker: CRUD y Login con PHP y MySQL 
Recurso con el que puedes instalar rápidamente un ambiente de desarrollo local para comenzar un proyecto en el que haga falta un CRUD y Login con PHP y MySQL utilizando Docker. 
Es un CRUD sencillo de productos que tienen un nombre y un precio. Para utilizarlo es necesario estar registrado y en este registro se crea un hash de las contraseñas antes de almacenarlas en la base de datos.

## Requerimientos
- [Docker Desktop](https://www.docker.com/products/docker-desktop)

## Instrucciones para instalar el ambiente de desarrollo
En línea de comandos:
```
docker-compose up -d
```

https://user-images.githubusercontent.com/61329277/116688356-e2413b80-a9b6-11eb-81c6-1c460935d5c6.mp4


## Comandos
Una vez que lo instales, puedes utilizar los siguientes comandos:
```
docker-compose start   #Iniciar el ambiente de desarrollo
docker-compose stop    #Detener el ambiente de desarrollo
docker-compose down    #Detener y eliminar el ambiente de desarrollo
```
## Estructura de archivos
* /docker/ contiene los archivos de configuración de Docker.
* /www/ contiene los archivos PHP del proyecto.

## Credenciales para la conexión
| Usuario | Clave | Base de datos |
| :-------------: | :-------------: | :-------------: |
| dbuser  | dbpass  | dbname  |
