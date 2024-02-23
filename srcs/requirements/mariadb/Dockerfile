FROM debian:bullseye

RUN apt-get update \
    && apt-get install -y mariadb-server

COPY ./tools/init.sh /init.sh
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN chmod +x /init.sh

ENTRYPOINT [ "./init.sh" ]

CMD ["mysqld_safe"]
