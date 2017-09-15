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
  - ``get('rota', function() {});`` to request data
  - ``post('rota', function() {});`` to create
  - ``delete('rota', function() {});`` to delete
  - ``put('rota', function() {});`` to update
  - ``patch('rota', function() {});`` to update
  - ``options('rota', function() {});``
  - ``match(['get', 'post'], 'rota', function() {});`` this one detects automatically the kind of verb considering the arguments passed in the array at its beginning
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
- if you put ``--resource`` at the end of the command, when you run your command to create your controller the **ARTISAN** will generate all the default actions automagically
- if you wanna create a controller or other kind of file inside another directory you can indicate this to **ARTISAN** doing something like this:
``php artisan make:controller My\HelloController``
- doing this the **ARTISAN** will create a directory named ``My`` and inside it will create a controller named ``HelloController.php``  

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

#### Calling a view

- To create views we use the helper called *view*
- inside your action function, you have to declare a return calling the helper and passing the name of your view file as bellow:
```php
public function index($name = 'World') {
  return view('hello');
}
```
- the code above returns the view file as result of the action function.

#### Creating a View

- go to ``laravel/resources/views/``
- know you have to create your view file
- when we are using Laravel we have a engine to improve our views called *Blade*, we can choose if we will use it or not
- using *Blade* we can abstract the php tags and something more
- to use the *Blade* you have to name your view files just like this: ``hello.blade.php``
- at first the name of the file ``hello.``, second the call to the helper ``blade.`` and at last the name extension ``php``
- but if you don't want to use *Blade* you can use a simple php file as a view file, like this: ``hello.php``
- the laravel will prefer to load the blade file if there are files with the same name. Like this:
``hello.blade.php`` and ``hello.php``

#### How to pass data to the view without Blade

- to pass data to the view, after call the view file in your controller, you can use an array and inside it define the keys and values that you want to pass to the view
```php
public function index($name = 'World') {
  return view('hello', ['nameData' => $name]);
}
```

- in the example above we have passed the value of the variable ``$name`` to the key ``nameData``
- now to use this data on your view you just need to print using an ``echo`` for example and call the key ``$nameData``. Like this:
``<?php echo $nameData ?>``

#### How to pass data to the view with Blade

- now to use this data on your view you just need to print the key ``$nameData``. Like this:
``{{$nameData}}>``


**Can you se the difference ?**

#### Catching a data request from post

- To catch some data from post you need use the Request Handler to deal with the data
- At first you must load the class ``Request`` doing this at your controller:
``use Illuminate\Http\Request;``

- Now inside the action function that will handle this data you must pass a ``(Resquest $request)`` parameter, the name ``$request`` here can be whatever you want, it should be like this:
```php
public function show(Request $request) {
  $name = $request->input('name');
  return echo $name;
}
```

- the variable ``$request`` contains all the fields of your form and to get the value of them you must do like the example above
- at first the name of the variable passed as a Request parameter ``$request``, then you declare the type of field ``->input`` and between brackets the property 'name' of the field ``name``.
- put all these things in a variable in this case ``$name`` send it to your view and it's done.

#### Creating a Model

- The Models are the files that deal with the database, we can create them by ourselves or we can use the **ARTISAN** to make it for us
- run ``php artisan make:model Page``  
- some rules must be followed
- the name of your model must have be in singular and start with uppercase
- go to ``laravel/app/``
- there you will find your model


#### Creating Migrations

- the migrations is a helper that we can use to create our database, as almost everything, we can do it by ourselves or ask to **ARTISAN**
- run ``php artisan make:migration Pages``
- we have soma rules here too
- the name of the file must be in plural and the first character must be in uppercase
- go to ``laravel/database/migrations/``
- there you will find your migrations file
- to know more about migrations go to
[Migrations](https://laravel.com/docs/5.5/migrations)

#### Creating Model and Migration at same time

- run ``php artisan make:model Page --migration``
- using this command you can create both of them at same time
- the rule is about the name, it must be in singular

#### Configuring the database

- go to ``laravel/.env``
- you have to find a sequence of lines started with 'DB'
- change what you wanna change

#### Redirecting to a personalized controller directory

- when you want to redirect your request to a controller that isn't in the default controller directory, you have to declare your intention when you declare your route
```php
Route::resource('page', 'Admin\PagesController');
```
- on the example above we created a controller ``PagesController`` in the url ``App\Http\Controllers\Admin\PagesController``. the default url to the controllers is ``App\Http\Controllers``, but in this case we want to organize better ours controllers.
- so to declare where is our controller file we put it into the route declaration ``Admin\PagesController``.

#### Creating Seeds

- seeds are files that create examples to teste, like some users to teste your authentication
- we will use the Faker plugin to create it to us, Faker is a plugin that generates example data
- first we will configure our factories and after it configure our seeds

#### Defining the data Factories

- run ``php artisan make:factory PagesFactory``
- the **ARTISAN** have generated an empty PagesFactory.php
- go to ``laravel/database/factories/PagesFactory.php``  
- put the follow code inside it
```php
use Faker\Generator as Faker;

$factory->define(App\Pages::class, function (Faker $faker) {
  $name = $faker->name;
    return [
        'title' => $name,
        'url' => str_slug($name),
        'body' => $faker->paragraphs
    ];
});
```
- first we load the Faker plugin ``use Faker\Generator as Faker;``
- the variable ``$factory`` is a default parameter to use it
- the method ``define`` receives two parameters, the class model that will be used by Faker and a function
- this function needs to declare a parameter ``Faker $faker`` that will be used to generate the data and it must return an array with the needed data using key->value, where the value will follow the rules of the Faker generator.
- to know more about how to use Faker go to [Faker](https://github.com/fzaninotto/Faker)

#### Generating our Seeders

- now we have to create our seeder file
- run ``php artisan make:seed PagesTableSeeder``
- the **ARTISAN** have generated a new seed file
- go to ``laravel/database/seeds/PagesTableSeeder.php``
- in this file you have a function named ``RUN`` this function will call the factory file that we created early
- run the following code
```php
public function run()
{
    \DB::statement('truncate pages');
    factory(App\Page::class, 100)->create();
}
```
- in this code we have three steps
- first we clear the table if there is something in there or not
- ``\DB::statement('truncate pages');``
- second we call the ``factory`` helper that will call the factory file created
- in this call we have to pass first the model address ``factory('App\Page::class,`` and an optional parameter that will repeat this actions wo many times we want ``100');``
- the last step is call the function ``create()`` that will actually create the data

#### Migrating your tables

- to create your tables in the database you will ask the Migrations to do it
- but if you are using laravel 5.4 or higher, MySQL 5.7.7 or MariaDB 10.2.2 it will generate an error when you run Migrations
- to fix it you must change your database version or follow this guide
- go to ``laravel/app/Providers/AppServiceProvider.php``
- add a call to load the Schema ``use Illuminate\Support\Facades\Schema;``
- now inside the boot function add ``Schema::defaultStringLength(191);``
- this will fix the problem, the code should be like this
```php
<?php
namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    ***the rest of the code
}
```
- now you can run ``php artisan migrate``
- the **ARTISAN** must have generated your tables in the database












x
