FROM alexcheng/apache2-php7

#run instalation the dependencies and extensions required by Laravel
RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl php7.0-zip zlib1g-dev \
    mysql-client libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install mcrypt pdo_mysql
RUN docker-php-ext-install pdo mcrypt mbstring zip

#install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# RUN composer create-project --prefer-dist laravel/laravel test_project && chmod -R 777 *
RUN composer global require "laravel/installer" 
ENV PATH="${PATH}:/root/.composer/vendor/bin"

#add apache config
ADD ./html.conf /etc/apache2/sites-available/

# dissable default config
RUN a2dissite 000-default.conf

# enable new config
RUN a2ensite html.conf

RUN a2enmod rewrite
RUN service apache2 restart
