FROM debian:buster

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y wget mariadb-server
COPY wp.sql wp.sql
COPY start.sh .
CMD ["sh", "start.sh"]