# Requirements
    Docker installed
    Docker Compose installed
# Services
    PHP-FPM 7.2
    Nginx 1.13
    MySQL 5.7 | PostgreSQL 9.6 | MongoDB 3.4
    Redis 4.0
# Installation
    ...
    1- Update the database configuration according to your choice of database

    $ sudo docker-compose -f docker-compose.yml -f docker-compose.mongodb.yml build
    then
    $ sudo docker-compose -f docker-compose.yml -f docker-compose.mongodb.yml up -d

    2- Compose install
    $ docker-compose exec app chown -R www-data:1000 var
    then:
    $ docker-compose exec -u www-data app composer install

    ...
    