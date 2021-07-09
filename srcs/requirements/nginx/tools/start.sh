mkdir ~/mkcert && \
  cd ~/mkcert && \
  wget https://github.com/FiloSottile/mkcert/releases/download/v1.1.2/mkcert-v1.1.2-linux-amd64 && \
  mv mkcert-v1.1.2-linux-amd64 mkcert && \
  chmod +x mkcert
./mkcert -install
./mkcert localhost
ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/
chmod -R 755 /var/www/*
service nginx start
nginx -g "daemon off;"