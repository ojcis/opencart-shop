# OpenCart-shop

### Category filter
### Discount label
### Order info

## Technologies used:
* PHP 7.4
* mySQL 8.0
* Composer 2.4

## Instructions
* Clone this repository.
* Install the required packages using the command:<br><code>composer install</code>
* Rename <code>config-dist.php</code> to <code>config.php</code> in <code>upload</code> directory an <code>upload/admin</code> directory.
* Start the local development server by using the command in <code>upload</code> directory:<br><code>php -S localhost:8000</code>
* Install OpenCart (http://localhost:8000/)
* As the admin generate an API key in System -> Users -> API.
* To get order info open new terminal, navigate to <code>opencart-shop</code> directory and run comand:<br><code>php orderInfo.php</code>.