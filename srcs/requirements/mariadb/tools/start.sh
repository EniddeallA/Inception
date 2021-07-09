service mysql start
MAINDB="wordpress"
USER="allaeddine"
mysql -uroot -e "CREATE DATABASE ${MAINDB};"
mysql -uroot -e "CREATE USER ${USER} IDENTIFIED BY '123456789';"
mysql -uroot -e "GRANT ALL PRIVILEGES ON ${MAINDB}.* TO ${USER};"
mysql -uroot -e "FLUSH PRIVILEGES;"
mysqld_safe