<p align="center">
    <a href="http://www.yiiframework.com/" target="_blank">
        <img src="https://www.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
    <h1 align="center">Yii Framework REST API Application</h1>
    <br>
</p>

This package is [Yii Framework] REST API application best for rapidly creating projects.

The template includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[Yii Framework]: http://www.yiiframework.com/

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii-base-api.svg)](https://packagist.org/packages/yiisoft/yii-base-api)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii-base-api.svg)](https://packagist.org/packages/yiisoft/yii-base-api)
[![Build Status](https://travis-ci.com/yiisoft/yii-base-api.svg?branch=master)](https://travis-ci.com/yiisoft/yii-base-api)

DIRECTORY STRUCTURE
-------------------

```
bin/
config/             contains application configurations
runtime/            contains files generated during runtime
src/
  controllers/        contains Api controller classes
  models/             contains model classes
tests/              contains various tests for the basic application
vendor/             contains dependent 3rd-party packages
.env
.env.dist
composer.json
```

REQUIREMENTS
------------
 

The minimum requirement by this project template that your Web server supports PHP 7.4.


INSTALLATION
------------

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist --stability=dev yiisoft/app myapp
cd myapp
./vendor/bin/yii serve
~~~

Now you should be able to access the application via `http://localhost:8080/`.


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    '__class' => \Yiisoft\Db\Connection::class,
    'dsn' => 'mysql:host=localhost;dbname=yii2basic;charset=utf8',
    'username' => 'root',
    'password' => '1234',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.


TESTING
-------

Tests are located in `tests` directory.
