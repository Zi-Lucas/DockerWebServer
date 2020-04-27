# PHP 容器配置

# 从官方基础版本构建
#FROM php:7.2-apache
FROM hub.c.163.com/library/php:7.2-rc-fpm

#ADD ./php/extensions/* /root/
ARG WEB_NAME='web'

LABEL version="1.0.0"
LABEL author="tiango"
LABEL description=" PHP web server Image. All extensions."

EXPOSE 80 443

#===== PHP扩展版本号定义 ===========
## redis 扩展
ENV PHPREDIS_VERSION 4.0.1
## msgpack扩展
ENV MSGPACK_VERSION 2.0.3
## imagick扩展
ENV IMAGICK_VERSION 3.4.3
## memcached扩展
ENV MEMCACHED_VERSION 3.1.3
## mongodb扩展
ENV MONGODB_VERSION 1.5.3
## xhprof扩展 https://github.com/longxinH/xhprof/releases(pecl 不支持php7 使用这里的)
ENV XHPROF_VERSION 2.0.5
## swoole安装 如果以后用到的话，不用再安装了，4.0之后性能更好
#ENV SWOOLE_VERSION 4.4.16
#==================================
# 设置环境变量
ENV NGINX_CONF_PATH="/etc/nginx/conf.d"\
    NGINX_CERTS_PATH="/etc/nginx/certs" \
    NGINX_ENABLED_PATH="/etc/nginx/sites-enabled" \
    NGINX_LOGS_PATH="/var/log/nginx" \
    PHP_CONF_PATH="/usr/local/etc/php" \
    FPM_CONF_PATH="/usr/local/etc/php-fpm.d" \
    FPM_LOGS_PATH="/var/log/php" \
    WWW_PATH="/www/"

#修改 apt源
#RUN sed -i s@/deb.debian.org/@/mirrors.ustc.edu.cn/@g /etc/apt/sources.list
RUN echo "deb http://mirrors.aliyun.com/debian/ stretch main non-free contrib" > /etc/apt/sources.list \
    && echo "deb-src http://mirrors.aliyun.com/debian/ stretch main non-free contrib" >> /etc/apt/sources.list \
    && echo "deb http://mirrors.aliyun.com/debian-security stretch/updates main" >> /etc/apt/sources.list \
    && echo "deb-src http://mirrors.aliyun.com/debian-security stretch/updates main" >> /etc/apt/sources.list \
    && echo "deb http://mirrors.aliyun.com/debian/ stretch-updates main non-free contrib" >> /etc/apt/sources.list \
    && echo "deb-src http://mirrors.aliyun.com/debian/ stretch-updates main non-free contrib" >> /etc/apt/sources.list \
    && echo "deb http://mirrors.aliyun.com/debian/ stretch-backports main non-free contrib" >> /etc/apt/sources.list \
    && echo "deb-src http://mirrors.aliyun.com/debian/ stretch-backports main non-free contrib" >> /etc/apt/sources.list \
    && rm -f /etc/apt/sources.list.d/*
#RUN mv /etc/apt/sources.list /etc/apt/sources.list.bak && \
#echo "deb http://deb.debian.org/debian stretch main" >/etc/apt/sources.list && \
#echo "deb http://deb.debian.org/debian stretch-updates main" >/etc/apt/sources.list && \
#echo "deb http://security.debian.org stretch/updates main" >>/etc/apt/sources.list
RUN apt-get clean
#================= PHP =================
## PHP配置文件
COPY ./php/php.ini ${PHP_CONF_PATH}
COPY php/php-fpm.d/www.conf ${FPM_CONF_PATH}
## 安装php扩展所需的依赖
RUN apt-get update && apt-get install -y --no-install-recommends autoconf gcc g++ automake libtool make
# 官方版本默认安装扩展:
# Core, ctype, curl
# date, dom
# fileinfo, filter, ftp
# hash
# iconv
# json
# libxml
# mbstring, mysqlnd
# openssl
# pcre, PDO, pdo_sqlite, Phar, posix
# readline, Reflection, session, SimpleXML, sodium, SPL, sqlite3, standard
# tokenizer
# xml, xmlreader, xmlwriter
# zlib
# bcmath, calendar, exif, gettext, sockets, dba,
# mysqli, pcntl, pdo_mysql, shmop, sysvmsg, sysvsem, sysvshm 扩展
RUN docker-php-ext-install -j$(nproc) bcmath calendar exif gettext \
sockets dba mysqli pcntl pdo_mysql shmop sysvmsg sysvsem sysvshm

# bz2 扩展, 读写 bzip2（.bz2）压缩文件
#RUN apt-get install -y --no-install-recommends libbz2-dev && \
#rm -r /var/lib/apt/lists/* && \
#docker-php-ext-install -j$(nproc) bz2

# GD 扩展. 图像处理
#RUN apt-get update && apt-get install -y \
#        libfreetype6-dev \
#        libjpeg62-turbo-dev \
#        libpng-dev \
#    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include \
#    && docker-php-ext-install -j$(nproc) gd
# intl 扩展
#RUN apt-get install -y --no-install-recommends libicu-dev && \
#rm -r /var/lib/apt/lists/* && \
#docker-php-ext-install -j$(nproc) intl

# mcrypt 扩展由于安全问题 php7.2+已经默认废弃 对于PHP 7.2+，PHP使用libsodium作为加密库
#RUN apt-get update && apt-get install -y --no-install-recommends libmcrypt-dev && \
#rm -r /var/lib/apt/lists/* && \
#pecl install mcrypt-1.0.1 && \
#docker-php-ext-enable mcrypt

# imagick 扩展
RUN export CFLAGS="$PHP_CFLAGS" CPPFLAGS="$PHP_CPPFLAGS" LDFLAGS="$PHP_LDFLAGS" && \
apt-get update && apt-get install -y --no-install-recommends libmagickwand-dev && \
rm -rf /var/lib/apt/lists/* && \
pecl install imagick-${IMAGICK_VERSION} && \
docker-php-ext-enable imagick

# Memcached 扩展
#RUN apt-get update && apt-get install -y --no-install-recommends zlib1g-dev libmemcached-dev && \
#rm -r /var/lib/apt/lists/* && \
#pecl install memcached && \
#docker-php-ext-enable memcached

# xdebug 扩展
RUN pecl install xdebug && docker-php-ext-enable xdebug

# redis 扩展
RUN pecl install redis-${PHPREDIS_VERSION} && docker-php-ext-enable redis

### MessagePack是一种有效的二进制序列化格式。它使您可以在JSON之类的多种语言之间交换数据。但是它更快，更小。
RUN apt-get update && apt-get install -y --no-install-recommends wget && \
    wget http://pecl.php.net/get/msgpack-${MSGPACK_VERSION}.tgz -O /tmp/msgpack.tgz \
    && pecl install /tmp/msgpack.tgz \
    && rm -rf /tmp/msgpack.tgz \
    && docker-php-ext-enable msgpack

### xhprof 性能分析
RUN apt-get update && apt-get install -y --no-install-recommends wget && \
wget https://github.com/longxinH/xhprof/archive/v${XHPROF_VERSION}.tar.gz -O /tmp/xhprof.tar.gz \
    && mkdir -p /tmp/xhprof \
    && tar -xf /tmp/xhprof.tar.gz -C /tmp/xhprof --strip-components=1 \
    && rm /tmp/xhprof.tar.gz \
    && ( \
        cd /tmp/xhprof/extension \
        && phpize \
        && ./configure  \
        && make -j$(nproc) \
        && make install \
    ) \
    && rm -r /tmp/xhprof \
    && docker-php-ext-enable xhprof\
    && docker-php-source delete
RUN apt-get update && apt-get install -y --no-install-recommends graphviz
### Swoole 扩展安装 开启扩展 php7.0以上版本
RUN pecl install swoole && docker-php-ext-enable swoole
#============================================

#================= Nginx ====================
RUN apt-get update && apt-get install -y --no-install-recommends nginx \
    && rm -rf /var/lib/apt/lists/*
COPY ./nginx/nginx.conf ${NGINX_CONF_PATH}/../nginx.conf
COPY ./nginx/sites-enabled/default ${NGINX_ENABLED_PATH}/default
RUN echo "\ndaemon off;" >> /etc/nginx/nginx.conf \
    && chown -R www-data:www-data /var/lib/nginx\
    && echo "Asia/Shanghai" > /etc/timezone \
    && ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime \
    && dpkg-reconfigure -f noninteractive tzdata
#============================================
ADD run.sh /run.sh
RUN chmod 755 /*.sh

# 指定挂载点， nginx的配置文件和代码目录
VOLUME ["${WWW_PATH}" , "${NGINX_CONF_PATH}", "${NGINX_CERTS_PATH}", "${NGINX_ENABLED_PATH}", "${PHP_CONF_PATH}", "${FPM_CONF_PATH}","${NGINX_LOGS_PATH}","${FPM_LOGS_PATH}"]

#CMD ["/run.sh"]