chown -R www-data:www-data /var/www/*
service mysql start
service nginx reload
service nginx start
service php7.3-fpm start
bash