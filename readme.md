# Company Profile TCMW

### Installation

- Clone project

```
git clone https://github.com/setakarim/tcmw.git
```

- Compose
```
composer install
```

- Generate Key
```
php artisan key:generate
```

- Copy file .env from .env.example
```
cp .env.example .env
```

- Import database
Import database from database/tcmw.sql


- Copy file .env from .env.example
Open the file .env
Edit values to match your database
Include that database name in the DB_DATABASE
```
DB_HOST=localhost
DB_DATABASE=tcmw
DB_USERNAME=root
DB_PASSWORD=
```

- Run project
```
php artisan serve
```