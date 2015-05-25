# WordPress Composer Installer

### Install WordPress through composer. So much win!.

## What is it?

##### Custom WordPress installer
Intended to develop webapps while using modern web technologies like composer and autoloading.

* Install WordPress through Composer to it's own directory.
* Includes a [base-theme](https://github.com/scrubmx/wordpress-install/tree/master/app/content/themes/base-theme) for rapid development. But feel free to use your own.
* Leverage the power of composer autoloading.
* Multiple configuration files for local, staging or production.

## Why?

##### Because WordPress is a dependency itself!

* We need tools to bring WordPress development to the modern age.
* A nice alternative to git submodules.
* Take advantage of modern tools like autoloading, package and dependency management.

## Instructions

* First clone this repository and run composer install.

```bash
git clone https://github.com/scrubmx/wordpress-install.git webapp
cd webapp
composer install
```

* Set the WP_HOME in the root **wp-config.php** file.
`Don't forget to include the 'http://' and no trailing slash.`

```php
define( 'WP_HOME', 'http://example.com' );
```


* Finally set your database credentials in the **app/config/wordpress.php** file.

```php
define('DB_NAME', 'database_name');
define('DB_USER', 'database_username');
define('DB_PASSWORD', 'database_password');
```

<hr>For extra points you can create different configurations for each environment simply set APP_ENV
And create a directory with the same name and place your configuration file there.<hr>
## Structure

The project files are organized like so:

```bash
webapp
    ├── app
    |    ├── config
    |    |    └── wordpress.php    ⇐ Place all your configurations here.
    |    |
    |    ├── content
    |    |    ├── plugins          ⇐ WordPress plugins directory.
    |    |    └── themes           ⇐ WordPress themes directory.
    |    |
    |    └── tests
    |
    ├── .gitignore                 ⇐ Exclude wordpress core and vendor directories.
    ├── .htaccess                  ⇐ Boilerplate htaccess for pretty permalinks.
    ├── composer.json
    ├── index.php
    ├── phpunit.xml
    ├── vendor
    ├── wordpress                  ⇐ WordPress core files.
    └── wp-config.php

```


## Inspiration

* This repository was inspired by the <em>Using Composer with WordPress</em> [article](http://roots.io/using-composer-with-wordpress/) by @swalkinshaw
* Also leverages the [fancyguy/webroot-installer](https://github.com/fancyguy/webroot-installer) to install WordPress in the correct location.


## License

Open sourced software under the [MIT license](http://opensource.org/licenses/MIT)

