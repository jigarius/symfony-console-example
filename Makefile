PHONY: ssh
ssh:
	docker compose exec -w /code main sh

PHONY: provision
provision:
	docker compose exec -w /code main composer install
