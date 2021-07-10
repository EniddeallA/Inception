chmod -R 755 /var/www/html
chown www-data:www-data /var/www/html

service php7.3-fpm start
service php7.3-fpm stop

php-fpm7.3 -R -F