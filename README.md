# OpenCart-shop

### Category filter
![opencart-category](https://user-images.githubusercontent.com/112757458/220173305-094dd02f-8d55-493e-aeff-9289128f32a2.gif)
### Discount label
![opencart-discount](https://user-images.githubusercontent.com/112757458/220173316-e9db46f8-dc81-4333-952e-2788fb3c8763.gif)
### Order info
![opencart-script](https://user-images.githubusercontent.com/112757458/220173325-efff1107-1427-4170-a1af-1b29d696a1ea.gif)

## Technologies used:
* PHP 7.4
* mySQL 8.0
* Composer 2.4

## Instructions
* Clone this repository.
* Install the required packages using the command:<br><code>composer install</code>
* Rename <code>config-dist.php</code> to <code>config.php</code> in <code>upload</code> directory and <code>upload/admin</code> directory.
* Start the local development server by using the command in <code>upload</code> directory:<br><code>php -S localhost:8000</code>
* Install OpenCart (http://localhost:8000/)
* As the admin generate an API key in System -> Users -> API.
* To get order info open new terminal, navigate to <code>opencart-shop</code> directory and run comand:<br><code>php orderInfo.php</code>.