FROM php:8.3.1-apache

#mysqlに接続するためのパッケージをインストールする
#コンテナ内でパッケージをインストールするコマンド
RUN apt update \
  && docker-php-ext-install pdo_mysql

COPY src/ /var/www/html/