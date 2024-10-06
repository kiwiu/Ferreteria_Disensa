# Usa una imagen base de PHP con Apache
FROM php:8.2-apache

# Copia el código fuente de la aplicación a la carpeta donde Apache buscará los archivos
COPY . /var/www/html/

# Exponer el puerto 80 para que Apache sea accesible
EXPOSE 80
