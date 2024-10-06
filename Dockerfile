# Usa una imagen base de PHP con Apache
FROM php:8.1-apache

# Copia el código fuente de la aplicación a la carpeta donde Apache buscará los archivos
COPY . /var/www/html/

# Instala las extensiones necesarias de PHP (agrega más si tu aplicación lo requiere)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Establece los permisos correctos para los archivos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exponer el puerto 80 para que Apache sea accesible
EXPOSE 80

# Iniciar Apache en modo foreground
CMD ["apache2-foreground"]
