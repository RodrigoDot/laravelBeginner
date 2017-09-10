# Starting with Laravel

## Git init
#### Initiating a new Git directory
- run ``git init``
- run ``git commit -m "first commit"``
#### Adding a Git remote directory
- run ``git remote add origin GitRemoteUrl``
#### Creating a Readme.md
- after create the Readme.md
#### Adding the files to the local directory
- run ``git add --all``
- after use the Git ADD command you must do a new COMMIT
- run ``git commit -m "DescriptionOfTheCommit"``
#### Sending files to remote directory
- run ``git push -u origin GitRemoteUrl``

## Import the Laravel squeleton
#### Composer init
- run ``composer init``
- the composer will ask you some informations
- after finish this
#### Checking requirements for Laravel
- run ``php -m``
- you must have the following dependencies in the list
- PHP >= 5.6.4
- OpenSSl
- MbString
- Tokenizer
- XML
- if you don't have this activated, do it on your php.ini file
#### Initiating the Laravel project
- run ``composer create-project laravel/laravel``
- after created go to laravel directory
- run ``php artisan serve``
- now you have a server for develop your application
- you can define the port that you want to your server
- ``php artisan serve --port 0000``
- using this you have to pass a number with four digits

## Hello World
#### Routes
- go to ``laravel/routes``
- add the following code
```php
Route::get('/hello', function()
{
  return 'Hello World';
});

```
- on your browser you just need put `/hello` after the server adress

``Route::get('/hello', function(){  return 'Hello World'; });``

- 'Route::' is a method of laravel the defines Routes
- 'get' is the http verb that defines a request of some data
- besides 'get' we can use:
  - get('rota', function() {}); to request data
  - post('rota', function() {}); to create
  - delete('rota', function() {}); to delete
  - put('rota', function() {}); to update
  - patch('rota', function() {}); to update
  - options('rota', function() {});
  - match(['get', 'post'], 'rota', function() {}); this one detects automatically the kind of verb considering the arguments passed in the array at its beginning
- '/hello' is the controller called
- it was declared a anonymous function that usually returns a controller, but here it was just a text return











x
