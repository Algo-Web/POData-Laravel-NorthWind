## POData-Laravel-Northwind

This is a minimal Laravel 5.1 application to verify that the POData-Laravel package (https://github.com/AlgoWeb/POData-Laravel) actually does what it says on the tin and integrates with Laravel.

Thank you to Kyrylo Kostiukov (https://github.com/kirill533) for prodding me to get some very basic setup instructions written.

0.  Clone out project.
1.  Run *composer install*.
2.  Copy .env.example to .env.
3.  To get up and running as quickly as possible, alter the *DB_CONNECTION=mysql* line in .env to *DB_CONNECTION=sqlite*.  If you have another DB preference, add its credentials here.
4.  Generate application key with *php artisan key:generate*.
5.  Migrate and seed application with *php artisan migrate --seed*.
6.  Serve application with *php artisan serve*.
7.  Browse to *http://localhost:8000/odata.svc*.

### License

POData-Laravel-Northwind is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)