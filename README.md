# BeeFlix

This web application is used as the mid-term exam of the Web Programming Course. BeeFlix is a simple website that displays movies. The movies are divided into 3 categories Drama, Kids, and TV show. The website serves as an introductory project of the Laravel framework, as such the website is not complicated.

To test out the application run these commmands:
* `php artisan migrate` to migrate the tables to the database
* `php artisan db:seed` to seed the database
* `php artisan storage:link` to create a symbolic link from the `/storage/` folder to the `/public/storage/`
* `php artisan serve` to start the web application

Note: database name is `beeflix`