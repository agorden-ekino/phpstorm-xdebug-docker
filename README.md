# Use Xdebug in PhpStorm with Docker

![Developer Riding a Whale and shooting lasers from an old-school](./assets/images/Designer_Xdebug_Article_Illustration.jpeg)

## 2 + 2 = 4?

Is reality a simulation?
Were Mathematics created by the Illuminati so that you'd be bad at school?
Is the answer 42?
Or is there a tiny bug in this application?

## Medium Article

[Link to Medium Article](https://medium.com/@arthur.gorden_83247/xdebug-configuration-phpstorm-docker-desktop-817da3005556)

## Installation

Build the image and run the container with the following commands

```shell
docker build -t xdebug-phpstorm-docker . # Build the image
docker run -d --rm -p 8080:8000 -v $(pwd):/var/www/html --name xdebug-phpstorm-docker xdebug-phpstorm-docker # Run the container in the background
```

## In Browser

Go to the [localhost](http://localhost:8080/)

## Stop the container

```shell
docker stop xdebug-phpstorm-docker
```
