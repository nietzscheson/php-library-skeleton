.PHONY:

init: down up logs

pull:
	docker-compose pull
build: pull
	docker-compose build
up: build
	docker-compose up -d
down:
	docker-compose down -v --remove-orphans
logs:
	docker-compose logs
specs:
	docker-compose run --rm php vendor/phpspec/phpspec/bin/phpspec run
behat:
	docker-compose run --rm php vendor/behat/behat/bin/behat
