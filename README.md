# dZENcode Test task SPA-project
This application will allow you to send messages to other people.


## Implemented
- Backend part is implemented in Laravel & docker
- Frontend part implemented in Livewire
- App use MySQL database
- User can publish and comment on messages with the addition of images
- You can sort messages by sender name, email and message creation date
- The user can post and comment on messages with added images 320x240 


## Tech
This application uses the following technologies, applications, libraries:
- [Laravel v 10.33](https://laravel.com/)
- [Sail v 8.2](https://laravel.com/docs/master/sail)
- [Docker](https://www.docker.com/)
- [Livewire v3.2.1](https://livewire.laravel.com/)
- [Vite](https://vitejs.dev/)
- [Lightbox](https://lokeshdhakar.com/projects/lightbox2/)


## Installation
App require [php]() & [composer]()

```sh
git clone https://github.com/TestAndrii/dZENcode-spa.git
cd dZENcode-spa
composer install --ignore-platform-req=ext-curl
cp .env.example .env
sail up -d
sail artisan key:generate
sail composer update
sail npm i
sail npm run build 
sail restart
sail artisan migrate
```
Server start: http://localhost:80

- [MySQL dump](DUMP%20dZENcode.sql)
- [Screen](dZENcode_Chat.png)
- [Task](dZENcode_PHP_Laravel_SPA.pdf)



## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
