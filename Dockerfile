FROM nginx:1.24.0
COPY . /usr/share/nginx/html
WORKDIR /usr/src/swe40006-project
EXPOSE 80
