FROM debian:bullseye

RUN apt-get update \
    && apt-get install -y nginx openssl \
    && openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/ssl/private/nginx-selfsigned.key \
    -out /etc/ssl/certs/nginx-selfsigned.crt \
    -subj "/C=KR/ST=Seoul/L=Gaepo/O=Ecole42/OU=42Seoul/CN=surkim.42.fr"

COPY ./conf/default /etc/nginx/sites-available/default
COPY ./tools/init.sh init.sh

RUN chmod +x init.sh

ENTRYPOINT [ "./init.sh" ]
CMD ["nginx", "-g", "daemon off;"]
