## Docker Manual
> คู่มือการใช้งาน docker ฉบับ YoProgrammer

## Table of Contents
- Beginner
  - Introduce Docker
    - แนะนำ ประวัติ ความเป็นมา Docker
    - Tradition Sotfware Development Workflow (Without Docker)
    - Tradition Sotfware Development Workflow (With Docker)
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

## Workshop
- Playground
  - [Labs playground winth docker](http://labs.play-with-docker.com/)

- Play with Docker classroom
  - [Reference](http://training.play-with-docker.com/alacart/)

## Install docker-engine on Ubuntu
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

## Install docker-compose on Ubuntu
```
sudo curl -L https://github.com/docker/compose/releases/download/1.17.0/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
```

## Install docker-machine on Ubuntu
```
curl -L https://github.com/docker/machine/releases/download/v0.13.0/docker-machine-`uname -s`-`uname -m` >/tmp/docker-machine &&
chmod +x /tmp/docker-machine &&
sudo cp /tmp/docker-machine /usr/local/bin/docker-machine
```