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


