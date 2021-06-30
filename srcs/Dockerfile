# Creating a docker image and Initializing a new build stage with debian 
# buster (the current stable debian 10 distribution) 
FROM debian:buster

COPY srcs/localhost /etc/nginx/sites-available/
COPY srcs/wordpress.zip /var/www/
COPY srcs/config.inc.php /var/www/
COPY srcs/wordpress.sql /var/www/
COPY srcs/init.sql /var/www/
COPY srcs/config.sh /config.sh
RUN sh config.sh
COPY srcs/wp-config.php /var/www/wordpress
COPY srcs/start.sh /start.sh
CMD sh start.sh