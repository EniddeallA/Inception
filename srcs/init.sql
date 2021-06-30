CREATE DATABASE wordpress;
FLUSH PRIVILEGES;
UPDATE mysql.user SET plugin = 'mysql_native_password' WHERE user='root';
GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost';