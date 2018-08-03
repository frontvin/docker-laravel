FROM alexcheng/apache2-php7

#run instalation the dependencies and extensions required by Laravel

RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl php7.0-zip zlib1g-dev
RUN docker-php-ext-install pdo pdo_mysql mcrypt mbstring zip

#install composer

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#install lavarel
# RUN composer create-project --prefer-dist laravel/laravel test_project && chmod -R 777 *
RUN composer global require "laravel/installer" 
#&& chmod -R 777 .
ENV PATH="${PATH}:/root/.composer/vendor/bin"

ADD ./html.conf /etc/apache2/sites-available/

RUN a2dissite 000-default.conf
RUN a2ensite html.conf
RUN a2enmod rewrite
RUN service apache2 restart
