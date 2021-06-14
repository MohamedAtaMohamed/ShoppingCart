**ShoppingCart Task**,

_list of products or e-commerce operation (add, clear, update and delete item from cart)_

Task overview:
 1- designs by html, css , js , ajax, jquery and bootstrap. 
 2- backend by php laravel 7+, mysql. 
 3- code by MVC and Design pattern Repository

-- install on your local machine by : 
1- clone the manin branch 
2- cd ShoppingCart to open the folder in terminal or cmd. 
3- Run Composer install to install the vendor and laravel packages to our group. 
4- create a new db then go to the .env file and add your environment variables. 
5- after install db u can run this command (php artisan migrate:seed) 
6- you can run server now by php artisan serve to run the server 127.0.0.1:8000 to see the home page 
7- if u have any problems please check the permissions for folder ( chmod 777 -R /var/www/ShoppingCart/storage



**To run the cron job **

_* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1_


