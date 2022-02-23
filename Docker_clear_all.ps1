docker stop $(docker container ls -a -q)
docker container rm $(docker container ls -a -q)
docker image rm -f $(docker image ls -q)
docker volume rm $(docker volume ls -q)
