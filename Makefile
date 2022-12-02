all: 
	sudo docker compose -f srcs/docker-compose.yml up
	sudo docker system prune

d: 
	sudo docker compose -f srcs/docker-compose.yml up -d
	sudo docker system prune

clean:
	sudo docker compose -f srcs/docker-compose.yml down
	#sudo docker rmi mariadb nginx wordpress

build:
	sudo docker compose -f srcs/docker-compose.yml build

re: clean all

red:clean d
