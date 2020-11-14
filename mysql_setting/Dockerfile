FROM mysql:8.0
ENV  MYSQL_ROOT_PASSWORD=project \
     MYSQL_DATABASE=project \
     MYSQL_USER=project \
     MYSQL_PASSWORD=project \
     TZ=Asia/Tokyo
COPY ./my.cnf /etc/mysql/conf.d/my.cnf
RUN chmod 644 /etc/mysql/conf.d/my.cnf