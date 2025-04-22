# Multib WordPress Theme

## Description
This is a development environment for the Multib WordPress theme, which includes WordPress, MySQL, Adminer, SFTP server, and a Node.js container for frontend development.

## Authors
- Bohdan Sandovenko
- Daniil Mudrak

## Requirements
- Docker
- Docker Compose

## Project Setup

### 1. Clone the repository
```bash
git clone [repository-url]
cd [project-name]
```

### 2. Start containers
```bash
docker-compose up -d
```

After startup, the following services will be available:
- WordPress: http://localhost:8080
- Adminer: http://localhost:8081
- SFTP: localhost:2222

### 3. Stop containers
```bash
docker-compose down
```

## Compile and watch SCSS
```bash
make scss
```
