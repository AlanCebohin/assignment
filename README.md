<div class="col-10 mx-auto">
    <div class="row">
        <h1 class="mx-auto mt-5">
            "Products"
        </h1>
    </div>
</div>

## About the app

Create, read, update and delete products to send to your supplier.

## Clone the repository

1.a) If you are clonning this repo with https just do:

```bash
git clone https://github.com/AlanCebohin/assignment.git
```

1.b) If you are clonning this repo with ssh just do:

```bash
git clone git@github.com:AlanCebohin/assignment.git
```

2) 
```bash
cd assignment
```

3)
```bash
composer install
```

4) copy the .env.example's content and replace the .env file content
- Take care of not overwriding the "APP_KEY" value but in case you do, don't panic, just run:
```bash
php artisan key:generate
```

5) Make sure your connection to you mysql database is correct in .env file

6) run the migrations with
```bash
php artisan:migrate
```

7) Run the command:
```bash
php artisan serve
```

8) That's it! Your project should be up and running

If everything looks correct your "home" page should look like this:

<img src="/public/img/home.png" alt="home">

## Tests

### Unit

```bash
phpunit --filter CrudProductTest
```

### Dusk

```bash
php artisan dusk --filter guests_can_create_products
php artisan dusk --filter guest_can_delete_products
php artisan dusk --filter guests_can_edit_products
```
