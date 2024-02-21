COMPOSE_FILE = srcs/docker-compose.yml

up:
	@mkdir -p /Users/surokim/inception/data/wordpress
	@mkdir -p /Users/surokim/inception/data/mariadb
	chmod 777 /Users/surokim/inception/data/wordpress
	chmod 777 /Users/surokim/inception/data/mariadb
	docker-compose -f $(COMPOSE_FILE) up -d --build

stop:
	docker-compose -f $(COMPOSE_FILE) stop

stop-nginx:
	docker-compose -f $(COMPOSE_FILE) stop nginx

stop-mariadb:
	docker-compose -f $(COMPOSE_FILE) stop mariadb

stop-wordpress:
	docker-compose -f $(COMPOSE_FILE) stop wordpress

start:
	docker-compose -f $(COMPOSE_FILE) start

start-nginx:
	docker-compose -f $(COMPOSE_FILE) start nginx

start-mariadb:
	docker-compose -f $(COMPOSE_FILE) start mariadb

start-wordpress:
	docker-compose -f $(COMPOSE_FILE) start wordpress

clean:
	docker-compose -f $(COMPOSE_FILE) down
	docker images -q | xargs docker rmi -f
	rm -rf ./data

.PHONY: up stop stop-nginx stop-mariadb stop-wordpress \
		start start-nginx start-mariadb start-wordpress \
		clean