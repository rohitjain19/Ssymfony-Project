FROM e20co/php:7


COPY app/composer.json ./
COPY app/composer.lock ./

RUN rm -rf /var/cache && \
    chmod -R a+w /tmp

RUN composer install --ansi --no-scripts --no-autoloader
COPY app/ ./

RUN /usr/local/bin/composer dump-autoload --optimize --ansi -d /var/www/symfony && \
    /usr/local/bin/composer run-script post-install-cmd --ansi -d /var/www/symfony
