# Docker Manual
> คู่มือการใช้งาน docker

## Table of Contents
- Beginner
  - [Introduce Docker](#introduce-docker)
    - แนะนำ ประวัติ ความเป็นมา Docker
    - Tradition Sotfware Development Workflow (Without Docker)
    - Tradition Sotfware Development Workflow (With Docker)
    - [Install docker engine on Ubuntu](#install-docker-engine-on-ubuntu)
    - [Install docker compose on Ubuntu](#install-docker-compose-on-ubuntu)
    - [Install docker machine on Ubuntu](#install-docker-machine-on-ubuntu)
  - Docker Image
    - Docker image คืออะไร สร้าง เก็บ ใช้งาน อย่างไร
    - Dockerfile คืออะไร สร้าง เก็บ ใช้งาน อย่างไร
  - Docker Contianer
    - Docker container คืออะไร สร้าง ใช้งาน อย่างไร
    - Docker command คำสั่งใช้งาน docker ที่ใช้งานบ่อย และควรจำ
- Intermediate
  - Docker Engine
  - Docker Compose(v3)
  - Docker Machine
    - Provisioning machine (Manager & Nodes)
    - Cluster (Swarm Mode)
    - Docker Stack
    - Docker Service
  - Docker Registry (Public & Private Registry)
- Advance
  - Capabilities
  - Seccomp
- [Workshop](#workshop)
- How to implement on
  - Amazon Web Service
  - Google Cloud Platform
  - DigitalOcean

## Introduce Docker
- BUILD
```
Build an image from the Dockerfile in the current directory and tag the image
$docker build -t myapp:1.0 .

List all images that are locally stored with the Docker engine
$docker images

Delete an image from the local image store
$docker rmi alpine:3.4
```

- SHIP
```
Pull an image from a registry
$docker pull alpine:3.4

Retag a local image with a new image name and tag
$docker tag alpine:3.4 myrepo/myalpine:3.4

Log in to a registry (the Docker Hub by default)
$docker login my.registry.com:8000

Push an image to a registry
$docker push myrepo/myalpine:3.4
```

- RUN
```
$ docker run
  --rm  //remove container automatically after it exits
  --it //connect the container to terminal
  --name web //name the container
  -p 80:80 //expose port 80 externally and map to port 80
  -v /dev:/code //create a host mapped volume inside the container
  alpine:3.4 //the image from which the container is instantiated
  /bin/bash //the command to run inside the container

Stop a running container through SIGTERM
$docker stop web

Stop a running container through SIGKILL
$docker kill web

Create an overlay network and specify a subnet
$docker network create --subnet 10.1.0.0/24
--gateway 10.1.0.1 -d overlay mynet

List the networks
$docker network ls

List the running containers
$docker ps

Delete all running and stopped containers
$docker rm -f $(docker ps -aq)

Create a new bash process inside the container and connect it to the terminal
$docker exec -it web bash

Print the last 100 lines of a container’s logs
$docker logs --tail 100 web
```

## Workshop
- Playground
  - [Labs playground winth docker](http://labs.play-with-docker.com/)

- Play with Docker classroom
  - [Reference](http://training.play-with-docker.com/alacart/)

## Install docker engine on Ubuntu
```
sudo apt-get remove docker docker-engine docker.io
sudo apt-get update

sudo apt-get install \
    apt-transport-https \
    ca-certificates \
    curl \
    software-properties-common

curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -

sudo add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
   $(lsb_release -cs) \
   stable"

sudo apt-get update

sudo apt-get install docker-ce

sudo usermod -aG docker ${USER}

su - ${USER}
```

## Install docker compose on Ubuntu
```
sudo curl -L https://github.com/docker/compose/releases/download/1.17.0/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
```

## Install docker machine on Ubuntu
```
curl -L https://github.com/docker/machine/releases/download/v0.13.0/docker-machine-`uname -s`-`uname -m` >/tmp/docker-machine &&
chmod +x /tmp/docker-machine &&
sudo cp /tmp/docker-machine /usr/local/bin/docker-machine
```
