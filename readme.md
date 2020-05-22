## POData-Laravel-Northwind

This is a minimal Laravel 5.1 application to verify that the POData-Laravel package (https://github.com/AlgoWeb/POData-Laravel) actually does what it says on the tin and integrates with Laravel.

Thank you to Kyrylo Kostiukov (https://github.com/kirill533) for prodding me to get some very basic setup instructions written and kindly testing earlier versions of this document.

0.  Clone out project.
1.  Run *composer install*.
2.  Copy .env.example to .env.
3.  This step depends on which DB you're using:
4. SQLite:
    -  Create *database/database.sqlite*.
    - Alter the *DB_CONNECTION=mysql* line in .env to *DB_CONNECTION=sqlite*.
5. Other DB:
    -  Change the *DB_CONNECTION*, *DB_HOST*, *DB_DATABASE*, *DB_USERNAME* and *DB_PASSWORD* values to match the DB you're using - 'mysql' for MySQL/MariaDB, 'pgsql' for PostgreSQL, 'sqlsrv' for SQL Server.
6.  Generate application key with *php artisan key:generate*.
7.  Smoke-check your database connection with *php artisan migrate:status*.  If it throws an error, double-check (and fix) your DB_ settings in your .env file.
8.  Migrate and seed application with *php artisan migrate --seed*.
9. If you are running locally and just want to get something running to play with, add a line to your .env file with *APP_DISABLE_AUTH=true* . Don't do this if your POData-Laravel-NorthWind instance is externally accessible.
10. Otherwise, set up a test user by:
    -   Running *php artisan tinker*.
    -   When tinker boots, run *DB::table('users')->insert(['name'=>'MyUsername','email'=>'thisis@myemail.com','password'=>Hash::make('123456')]);* .  You can freely change the name and email values, and the password value _that is passed to the *Hash:make* call_.
    -   Quit tinker with Ctrl-C.
11.  Serve application with *php artisan serve*.
12.  Browse to *http://localhost:8000/odata.svc* in your browser of choice..

### License

POData-Laravel-Northwind is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)