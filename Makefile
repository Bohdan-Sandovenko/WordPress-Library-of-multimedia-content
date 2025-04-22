.PHONY: build

scss:
	docker-compose exec node bash -c "cd /app && npm i && npx gulp watch"