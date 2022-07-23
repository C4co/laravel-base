# Laravel Base

Laravel starter

### What's inside?

- [Laravel](https://laravel.com/)
- [Laravel jetstream](https://jetstream.laravel.com/)
- [Laravel vite](https://laravel-vite.dev/)
- [Laravel wire](https://laravel-livewire.com/)
- [Tailwind](https://tailwindcss.com/)
- [AlpineJS](https://alpinejs.dev/)
- [Mailhog](https://github.com/mailhog/MailHog)

### Usage

clone project
```
gh clone c4co/laravel-base
```

generate new key
```
php artisan key:generate
```

running all test to check if everything is ok
```
php artisan test
```

### Dev

start server
```
php artisan serve
```

start front-end proxy(live reload)
```
npm run watch
```

start SMTP server to tests feature that need to send email
```
~/go/bin/MailHog
```
aliased
```
mailhog
```

### Digital Ocean app platform

**Build commands**
```
composer install --optimize-autoloader --no-dev\
&& npm run build
```

**Run commands**

```
php artisan migrate --force\
&& php artisan config:cache\
&& php artisan route:cache\
&& php artisan view:cache\
&& heroku-php-apache2 public/
```

**ENV vars**

> **database** = digital ocean database name

```
APP_NAME=Laravel base
APP_KEY=[generate new laravel app key]
DB_CONNECTION=pgsql
DB_HOST=${database.HOST}
DB_PORT=${database.PORT
DB_DATABASE=${database.DATABASE}
DB_USERNAME=${database.USERNAME}
DB_PASSWORD=${database.PASSWORD}
DATABASE_URL=${database.DATABASE_URL}
APP_URL=${APP_URL}
APP_ENV=production
```

---

Carlos Costa @ 2022
