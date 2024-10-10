FROM php:8.3-cli
COPY . /usr/src/swe40006-project
WORKDIR /usr/src/swe40006-project
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80"]
