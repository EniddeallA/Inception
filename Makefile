SRC = ./srcs/docker-compose.yml
NAME = inception
all : ${NAME}

${NAME}:
	docker-compose -f ${SRC} up --build -d
re : fclean all

clean :
	docker-compose -f ${SRC} down --rmi all