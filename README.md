<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Set up development environment using docker
- Install docker from the following link [Docker](https://docs.docker.com/install/)

#### Run the following commands in the project directory from the terminal

```bash
./develop up -d
```

Now you should rename .env.example to .env and update the database info if needed.

After the first command finishes, run the following:

```bash
php artisan route:clear
```

```bash
php artisan config:clear
```

```bash
php artisan cache:clear
```

Now you can access the application from your localhost on port 8090

```bash
http://localhost:8090/
```
