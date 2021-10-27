#Get from docker hub
FROM centos:7

USER root

SHELL ["/bin/bash", "-c"]

#Run base common
RUN yum update -y && \
    yum install -y \
    epel-release \
    yum-utils \
    python2 \
    python3 \
    zip \
    gcc-c++ \
    make \
    unzip \
    nano \
    openssl

#Install nginx
RUN echo $'\n\
[nginx-stable] \n\
name=nginx stable repo \n\
baseurl=https://nginx.org/packages/centos/$releasever/$basearch/ \n\
gpgcheck=1 \n\
enabled=1 \n\
gpgkey=https://nginx.org/keys/nginx_signing.key \n\
module_hotfixes=true' > /etc/yum.repos.d/nginx.repo
RUN yum install -y nginx

#Install php8
RUN yum install https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm -y && \
    yum install https://rpms.remirepo.net/enterprise/remi-release-7.rpm -y && \
    yum-config-manager --enable remi-php80 -y && \
    yum install -y \
    php-fpm  \
    php-mysqlnd  \
    php-zip  \
    php-devel  \
    php-gd  \
    php-mcrypt  \
    php-mbstring  \
    php-curl  \
    php-xml  \
    php-pear  \
    php-bcmath  \
    php-json  \
    php-pgsql \
    php-redis

#Install composer for php
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    php -r "unlink('composer-setup.php');"

#Install nodejs14.x and yarn
RUN curl -fsSL https://rpm.nodesource.com/setup_14.x | bash - && \
    yum install -y nodejs && \
    npm install -g yarn

#Install supervisor
RUN yum install supervisor -y

#Install new config
ADD config/supervisord.conf /etc/supervisord.conf
ADD config/supervisord/nginx.ini /etc/supervisord.d/nginx.ini
ADD config/supervisord/php-fpm.ini /etc/supervisord.d/php-fpm.ini

ADD config/nginx.conf /etc/nginx/nginx.conf
ADD config/php-fpm.conf /etc/php-fpm.d/www.conf
ADD config/vhost.conf /etc/nginx/conf.d/default.conf

#Make dir php-fpm to running
RUN mkdir /run/php-fpm

RUN mkdir /app

ADD src /app

WORKDIR /app

EXPOSE 80 443 9000

CMD ["/usr/bin/supervisord"]