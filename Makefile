.PHONY:

pull:
	docker-compose pull
build: pull
	docker-compose build
dependencies:
	docker-compose run --rm php composer install
up: build dependencies
	docker-compose up -d
down:
	docker-compose down
volume: down
	docker volume prune -f
logs:
	docker-compose logs
init: volume up logs
specs:
	docker-compose run --rm php vendor/phpspec/phpspec/bin/phpspec run
behat:
	docker-compose run --rm php vendor/behat/behat/bin/behat
