FROM nimmis/alpine-apache-php7

RUN apk add -U --no-cache autoconf \
    vim \
    sudo \
    zip \
    curl \
    libressl \
    openssl \ 
    composer

RUN apk add --no-cache php7-pear php7-xml php7-mbstring php7-dev php7-dom php7-xmlreader php7-xmlwriter php7-tokenizer gcc musl-dev make \
    && pecl install xdebug

WORKDIR "/var/www/html"