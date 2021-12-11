# Contact Us Form Package

[![Issues](https://img.shields.io/github/issues/technicalsimple/contact-package.svg?style=flat-square)](https://github.com/technicalsimple/contact-package/issues)
[![Stars](https://img.shields.io/github/stars/technicalsimple/contact-package.svg?style=flat-square)](https://github.com/technicalsimple/contact-package/stargazers)


A Powerful package for handling contact us . It will send email to admin and save contact query in database in Laravel. Supports Laravel 5.3, 5.4, 5.5, 5.6, 5.7, 5.8, 6.0, 7.0, and 8.0+.

## Installation
This package is very easy to set up. There are only couple of steps.

### Composer

From your projects root folder in terminal run:

Laravel 5.5 and up use:

```
    composer require technicalsimple/contact
```

Laravel 5.4 and below use:

```
    composer require technicalsimple/contact 1.0.0
```

# Service Provider

* Laravel 5.5 and up Uses package auto discovery feature, no need to edit the config/app.php file.

* Laravel 5.4 and below Add the package to your application service providers in config/app.php file.

  ```
    'providers' => [

        ...

        /**
        * Third Party Service Providers...
        */
        \technicalsimple\Contact\ContactServiceProvider::class,

    ],    
   ```

# Publish All Assets
   ```
    php artisan vendor:publish --provider="technicalsimple\Contact\ContactServiceProvider" --tag="views"
   ```
 After publish ContactServiceProvider Goto the app/config/contact.php
 and change admin email details

 Also Please setup email configuration details in env file.



   


    
   






