##laravel setup
composer create-project laravel/laravel example-app
 
cd example-app
 
php artisan serve

##db setup artisan migration (creating tables in terminal)
1.php artisan make:migration create_students_table --create=students (as an example of students table)
2php artisan migrate

#create a controller
php artisan make:controller StudentController --resource --model=Student