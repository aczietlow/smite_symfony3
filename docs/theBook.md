# [The Book](https://symfony.com/doc/current/book/index.html)

## Installing and Configuring Symfony

Symfony uses an installer cli to set it up now

* Globally installed cli tool

`symfony new my_project_name 3.0.0`

## Create your First Page in Symfony

After setting up a proper vhost for symfony to access routes via url use the following: 

`http://smite-smyfony.dev/app_dev.php/api/lucky/number`

[new] Routes can be defined as annotations in Controller methods.

#### File Structure

`app/` - Contains things like configuration and templates. Basically, anything that is not PHP code goes here.

`src/` - Your PHP code lives here. "Bundles" go in the src directory.

`web/` - docroot for the project. Contains web available files (CSS, images) and front controllers (app.php app_dev.php)

`tests/` - Automated tests

`bin/` - binary files live here.

`var/` - Automatically created files, logs, caches, etc.

`vendor/` - composer 

## Controller

Interprets http requests and return a Response object.

The Symfony base controller provides some useful helper methods, and containers. In most cases it's easiest to just extend it. 

Routes will match URL paths to a controller.

Controllers are methods that are usually added to controller classes.

Controllers must follow the naming convention of using the suffix 'Action'. E.g. public function showAction().

Front controllers (app.php and app_dev.php) server as an entry point to the application. They handle initial routing and bootstrapping.

#### Using console with controllers

Generate controller scaffolding - `bin/console generate:controller`

##### Other services from within the controller

The base controller provides the `get()` method for access other services, like templating, twig, validator, etc.

Symfony automatically injects the request object where it is type hinted in the method.

The request object has access to the session object, which can store attributes for browser sessions (human, bots, and others)

See what services are available with console

`bin/console debug:container`

## Routing

Route is a map from a URL path to a controller.

Route workflow

1) Route is handled by symfony front controller.

2) Symfony Kernal asks the router to inspect the request

3) The router matches the incoming URL to a specific route and returns the info about the route

4) The symfony Kernal executes the controller, returning a Response object.

Routing information is contained in the `app/config/routing.yml` file

