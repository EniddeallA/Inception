service mysql start

mysql -u root -e "CREATE USER 'wp-user'@'%' IDENTIFIED BY '$MYSQL_PASSWORD'"
mysql -u root -e "CREATE DATABASE wordpress"
mysql -u root -e "USE wordpress; GRANT ALL PRIVILEGES ON * TO 'wp-user'@'%' WITH GRANT OPTION; FLUSH PRIVILEGES"
mysqld_safe