FROM nginx

ADD nginx.conf /etc/nginx/nginx.conf
ADD fastcgi.conf /etc/nginx/fastcgi.conf
ADD server.conf /etc/nginx/conf.d/default.conf
ADD localhost.crt /etc/ssl/certs/localhost.crt
ADD localhost.key /etc/ssl/certs/localhost.key

RUN chmod 400 /etc/ssl/certs/localhost.key

