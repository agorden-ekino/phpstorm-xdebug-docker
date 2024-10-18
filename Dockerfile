FROM php:8.3

# Install and enable Xdebug
RUN pecl install xdebug-3.3.1 \
    && docker-php-ext-enable xdebug \
    && echo "\
xdebug.mode=debug,develop \n\
xdebug.client_host=host.docker.internal \n\
xdebug.idekey=PHPSTORM" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN rm -f /etc/php/conf.d/xdebug.ini.template
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# Set the working directory
WORKDIR /var/www/html
# Copy your application files to the container
COPY . /var/www/html
# Expose chosen port to the outside world
EXPOSE 8000
# Command to run PHP built-in webserver
CMD ["php", "-S", "0.0.0.0:8000"]
