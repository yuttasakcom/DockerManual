## create volume

```bash
$ docker volume create --driver local --opt device=/data/mongodb data_mongodb
```

## Create network

```bash
$ docker network create db --driver bridge
```

## Start docker

```bash
docker-compose up -d
```
