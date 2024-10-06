FROM php:8.0.9-apache as builder

COPY index.php /var/www/html/

CMD ["apache2-foreground"]