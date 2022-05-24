FROM nimmis/alpine-apache-php7

RUN apk add -U --no-cache autoconf \
    vim \
    sudo \
    zip \
    curl \
    libressl \
    openssl

RUN apk add --no-cache php7-pear php7-dev gcc musl-dev make \
    && pecl install xdebug