FROM nginx:1.16-alpine

COPY ./code/ /var/www/html/
COPY ./nginx/conf.d/ /etc/nginx/conf.d/
COPY ./nginx/ssl/ /etc/nginx/ssl

VOLUME /var/log/nginx

EXPOSE 80
EXPOSE 443
