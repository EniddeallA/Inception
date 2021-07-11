service mysql start

mysql -uroot -e "CREATE USER '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';"
mysql -uroot -e "CREATE DATABASE '$MYSQL_DB_NAME';"
mysql -uroot -e "USE '$MYSQL_DB_NAME'; GRANT ALL PRIVILEGES ON * TO '$MYSQL_USER'@'%';"
mysql -uroot -e "FLUSH PRIVILEGES;"
mysqld_safe