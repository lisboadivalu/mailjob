<p> Hello, Everyone </p>

This project uses a job to send queue email. 

let's configure the project:

open your terminal and use these commands:

mysql -u root -p (and type your mysql password)
and type: 
CREATE DATABASE emailjob; 
after this exit from yout mysql process and go ahead with others steps below:

execute this commands on this project root directory:

composer install 
php artisan migrate 
npm install && npm run dev 
php artisan serve 

