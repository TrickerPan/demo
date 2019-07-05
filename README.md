# 使用 Docker 开发 Laravel 应用

## 一、简介

此目录有两个 docker-compose.yml 文件，一个用于开发环境，一个用户生产环境。

## 生产环境使用

`$` 代表本机，`#` 代表容器内。

```bash
$ docker-compose -f docker-compose.development.yml up -d
$ docker exec -it demo_php-fpm_1 /bin/sh

# cp $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini
# docker-php-ext-install -j$(nproc) bcmath pdo_mysql
```
