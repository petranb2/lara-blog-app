#!/bin/bash

echo '*********************************************'
echo 'Build the new image'
sudo docker build --no-cache -f Dockerfile -t laravel:blog .
echo '*********************************************'
echo 'Stop the old container (if is running)'
sudo docker stop laravel-blog
echo 'Remove the old container'
sudo docker rm laravel-blog
echo '*********************************************'
echo 'Start the new container: exposed port 5000 container name:interoperability-backend'
sudo docker run -p 5000:8000 -v $(pwd):/var/www/html/blog-app --name laravel-blog -d laravel:blog
echo '*********************************************'
