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
- go to ``laravel/routes/web.php``
- add the following code
```php
  Route::get('/hello', function()
  {
    return 'Hello World';
  });
```
- on your browser you just need put `/hello` after the server address

``Route::get('/hello', function(){  return 'Hello World'; });``

- 'Route::' is a method of laravel to defines Routes
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
- it was declared a anonymous function that usually returns a controller, but here it is just a text return

#### Passing parameters through the url
- still in the web.php file
- add the following code
```php
  Route::get('/hello/{name}', function($name) {
    return 'Hello ' . $name;
  });
```
- This example above add a new feature into our url
- inside the GET declaration: ``Route::get('/hello/{name}'`` we declared a ``{name}`` and a respective ``$name`` was declared as a function argument inside ``function($name)``. Doing it we passed a new argument that can be used. In this case it was used to print its value on the screen using ``return 'Hello' . $name``.    

#### Passing parameters through the url with a default value
- still in the web.php file
- add the following code
```php
  Route::get('/hello/{name?}', function($name = 'World') {
    return 'Hello ' . $name;
  });
```
- Here we added a '?' at the get declaration ``{name?}`` and inside the function declaration we defined a default value to ``$name = 'World'``

#### Calling a controller   
- The code bellow shows how to call a controller
``Route::get('/hello/', 'HelloController@index');``
- inside the get declaration, after the route declaration ``Route::get('/hello/')`` we add another parameter ``'HelloController@index'``.
- here we have some rules to follow
1. the name passed as argument must be a combination of the name of your controller + controller. in this case: 'Hello' + 'Controller' = 'HelloController'.
2. the name passed as argument must start using uppercase at each first character of each word. In this case: 'H' of Hello and 'C' of Controller.
- on the second parameter there is something like this ``@index``. When you declare a controller you must pass the action that this controller will execute. In this case: ``HelloController@index`` will execute an action called 'index'.

#### Creating a Controller
- Here we can make the controller ourselves or use the laravel ARTISAN
- run ``php artisan make`` inside the laravel directory
- using the command MAKE you can have many kind of code created "automagically"
- run ``php artisan make:controller HelloController``
- now you have an empty controller called HelloController.php on ``laravel/app/http/controllers``

#### Creating a Action
- every action is a function inside a controller
- go to ``laravel/app/http/controllers/HelloController.php`` and add the follow code
```php
public function index() {
  return 'HELLO WORLD';
}
```
- delete or comment the other examples that you have done until now
- access this page using ``/hello`` after the server address

#### Passing arguments to an action
- go to ``laravel/routes/web.php`` and change your route to the example bellow
``Route::get('/hello/{name?}', 'HelloController@index');``
- go to ``laravel/app/http/controllers/HelloController.php`` and change the code for
```php
public function index($name = 'World') {
  return 'Hello ' . $name;
}
```





x
