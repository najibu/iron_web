#Laravel Rest Api (Iron Web)
=====================

Goal: 

 - The goal is to create an API that will allow to create an article, answer to an article, rate an article (between 0 and 5 ==> 0, 1, 2, 3, 4, 5)
 - This API should also include to retrieve an article and all its answers
 - Write some unit tests.

Bonus 1:

 - Write a front page that will allow us to write an article (keep it simple)

Bonus 2:

 - Write a command that will send an email to the writer of an article if he has notifications from more than 24 hours.


The app
=====================

http://127.0.0.1:8000/

## Installation

### Backend

```sh
$ composer install
$ php artisan migrate
```
### Frontend

```sh
$ npm install
$ gulp
```

### Unit Test
```sh
$ phpunit
```

### Start server

```sh
$ php artisan serve
```