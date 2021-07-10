FROM debian:buster

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install wget -y 
RUN apt install -y php7.3-fpm php7.3-common php7.3-mysql php
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvzf latest.tar.gz
RUN mkdir -p /var/www/html/
RUN mv wordpress/* /var/www/html/
COPY wp-config.php /var/www/html/wp-config.php
COPY www.conf /etc/php/7.3/fpm/pool.d/www.conf
COPY start.sh .

CMD ["sh", "start.sh"]