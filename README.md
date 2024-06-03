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

6. Run this command
- This command will generate migration file, seeding and install passport client with secret
```
composer migrate-fresh
```

7. Copy passport client ID and Secret from `oauth_clients` table into .env file from `ClientCredentials Grant Client`

8. Run `php artisan config:cache`

9. Start a dev server with port `8001`
```
php artisan serve --port=8001
```

10. Run this API `{url}/oauth/token` on Postman to generate client access token
- Get this client id and secret from database table oauth_client under `ClientCredentials Grand Client`
```
x-www-form-urlencoded
grant_type=client_credentials
client_id= 
client_secret= 
scope=
```

11. Copy access_token and paste into user_service .env file 
```
PLAYLIST_PLATFORM_URL=http://127.0.0.1:8001
ACCESS_TOKEN_TO_PLAYLIST_PLATFORM=
```

12. Run `php artisan config:cache`

13. Run API `{url}/api/v1/user/recommend/playlist/{id}`
