## Setup

1. Clone the repo:
```
git clone https://github.com/iskandar93/user-service.git
```

2. Install composer package and dependencies:

```
composer install
```

3. Copy .env.example to .env file

4. Generate key
```
php artisan key:generate
```

5. Create a database based on `DB_DATABASE` name

5. Run this command
- This command will generate migration file, seeding and install passport client with secret
```
composer migrate-fresh
```

6. Copy passport client ID and Secret from `oauth_clients` table into .env file from `ClientCredentials Grant Client`

6. Start a dev server
```
php artisan serve
```

7. Login a user from users table using ```api/v1/login``` 
