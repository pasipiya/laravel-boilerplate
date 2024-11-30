# Laravel Boilerplate

A Laravel Boilerplate application setup for rapid development, including Docker, MySQL, and authentication scaffolding. This boilerplate is ideal for starting new Laravel projects with essential features pre-configured.

---

## Features

- **Laravel Framework**: A robust PHP framework for building modern web applications.
- **Dockerized Setup**: Includes Docker and Docker Compose for containerized development.
- **MySQL Database**: Pre-configured MySQL database container.
- **Authentication**: Scaffolding provided via Laravel Breeze or Jetstream.
- **phpMyAdmin**: Database management through an easy-to-use web interface.
- **Pre-configured Scripts**: Convenient commands for setup and deployment.

---

## Prerequisites

Ensure you have the following installed on your system:

- Docker & Docker Compose
- PHP 8.1 or higher (if running locally)
- Composer (if running locally)
- Node.js & npm

---

## Installation

### Clone the Repository

```bash
git clone https://github.com/your-repo/laravel-boilerplate.git
cd laravel-boilerplate

## Prerequisites

Before using this tool, make sure you have the following installed:

- **Docker**: Docker is required to build and run the application in a container.

## Building the Docker Image

To build the Docker image for the SES-Automation Tool, execute the following command in the root directory of the project:

```bash
docker-compose run --rm app composer install
docker-compose exec app php artisan key:generate
docker-compose run --rm app chmod -R 777 storage bootstrap/cache
docker-compose up --build -d
docker-compose up -d
docker-compose down

docker-compose logs app
docker-compose logs nginx
docker-compose logs mysql
