#### install
```bash
git clone git@github.com:lonquan/laravel-init.git project_name
composer install
npm install
```

#### update
```bash
composer update
npm update
```

#### create app
```bash
php -r "file_exists('.env') || copy('.env.example', '.env');"
php artisan key:generate --ansi          
```
