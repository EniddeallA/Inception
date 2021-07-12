sed -i "s/127\.0\.0\.1/0\.0\.0\.0/g" /etc/mysql/mariadb.conf.d/50-server.cnf

service mysql start

mysql -u root -e "CREATE USER '${dbuser}'@'%' IDENTIFIED BY '${userpw}'"
mysql -u root -e "CREATE DATABASE wordpress;"
mysql -u root -e "USE wordpress;GRANT ALL PRIVILEGES ON * TO '${dbuser}'@'%' WITH GRANT OPTION; FLUSH PRIVILEGES;"
mysql -u root wordpress < wp.sql
mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '${rootpw}';"

mysqld_safe