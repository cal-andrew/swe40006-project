FROM nginx:latest
COPY . /usr/share/nginx/html
WORKDIR /usr/src/swe40006-project
EXPOSE 80
