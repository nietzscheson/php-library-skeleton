FROM php:7.2-cli-alpine

RUN apk add --no-cache $PHPIZE_DEPS \
  && pecl install xdebug \
  && docker-php-ext-enable xdebug

RUN rm -rf /var/cache/apk/* && rm -rf /tmp/* && \
  curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer
