# Establecer la imagen base de PHP con Apache
FROM php:8.2-apache

# Instalar extensiones de PHP necesarias para MySQL
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copiar los archivos de la aplicación al contenedor
COPY . /var/www/html/

# Asignar permisos correctos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80 para acceder a la aplicación web
EXPOSE 80

# Habilitar el módulo de reescritura de Apache (opcional si usas URLs amigables)
RUN a2enmod rewrite

# Configuración de Apache (opcional si tienes un archivo .htaccess)
COPY ./apache-config.conf /etc/apache2/sites-available/000-default.conf
