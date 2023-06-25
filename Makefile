.PHONY: up
up: ## into container
	cd docker && docker-compose up -d

.PHONY: bash
bash: ## into container
	docker exec -ti test_laravel_routes_php bash
