#### Run project

- cp .env.example .env
- composer install
- alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
- sail artisan migrate
- sail up
