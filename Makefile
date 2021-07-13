# docker stop $(docker ps -qa); docker rm $(docker ps -qa);
# docker rmi -f $(docker images -qa); docker volume rm $(docker volume ls -q);
# docker network rm $(docker network ls -q) 2>/dev/null
SRC = ./srcs/docker-compose.yml
NAME = inception
all : ${NAME}

${NAME}:
	docker-compose -f ${SRC} up --build
re : fclean all
clean :
	docker-compose -f ${SRC} down
fclean :
	docker-compose -f ${SRC} down --rmi all
