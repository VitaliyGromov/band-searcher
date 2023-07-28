## Installation

Clone this repo and then run these commands in terminal

```
docker-compose up -d
docker-compose exec -it app bash
composer install

```
create .env file, copy .env.example to .env;

Set DB_PASSWORD

```
DB_PASSWORD=
```
Set admin password and email

```
DEFAULT_ADMIN_PASSWORD=
DEFAULT_ADMIN_EMAIL=
```

configurate this mail block

```
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="bandsearcherTeam@deo.com"
MAIL_FROM_NAME="${APP_NAME}"

```

```
php artisan key:generate 
php artisan migrate --seed

```

```
php artisan queue:listen

```