FROM wordpress


COPY / /var/www/html

FROM mysql/mysql-server:5.7

ENV MYSQL_ALLOW_EMPTY_PASSWORD=true
ENV MYSQL_USER=arshad
ENV MYSQL_PASSWORD=Akwapapp77
ENV MYSQL_DATABASE=wordpress

COPY etc/mysql/ /etc/mysql
