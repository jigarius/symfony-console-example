FROM php:8-alpine
WORKDIR /code

RUN php --version

COPY . /code

RUN /code/.docker/main/install-composer.sh
RUN composer install

CMD ["tail", "-f", "/dev/null"]
