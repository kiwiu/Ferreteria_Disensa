# Usa la imagen base de PHP con Apache
FROM php:8.0.9-apache

# Habilita mod_rewrite si lo necesitas para las rutas amigables
RUN a2enmod rewrite

# Copia todo el contenido de tu proyecto al directorio raíz de Apache
COPY . /var/www/html/

# Establece permisos adecuados (opcional pero recomendado)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expone el puerto 80
EXPOSE 80

# Inicia Apache en primer plano
CMD ["apache2-foreground"]
