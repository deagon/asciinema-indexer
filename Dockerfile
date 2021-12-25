ARG  BASE_VERSION=latest

FROM trafex/php-nginx:${BASE_VERSION}

COPY *css *js *php /var/www/html/

VOLUME /var/www/html/casts

EXPOSE 8080/tcp
