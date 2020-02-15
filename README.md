# library

### 1) Installation

Install the dependencies and start the server.

```sh
git clone https://github.com/BaybaraEvgeny/library.git
cd library
composer install
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
symfony server:start
```

Your server address in your preferred browser: **localhost:8000**

### 2) .env

- **DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name** change for Database.
