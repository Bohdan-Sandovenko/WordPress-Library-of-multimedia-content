@echo off
docker-compose exec node bash -c "cd /app && npm i && npx gulp watch" 