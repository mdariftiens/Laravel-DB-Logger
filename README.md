# Laravel DB Logger

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mdariftiens/dblog.svg?style=flat-square)](https://packagist.org/packages/mdariftiens/dblog)
[![Total Downloads](https://img.shields.io/packagist/dt/mdariftiens/dblog.svg?style=flat-square)](https://packagist.org/packages/mdariftiens/dblog)

This will provide you the facility to log in Database.  

## Installation

You can install the package via composer:

```bash
composer require mdariftiens/dblog
```

## Usage
Go to ``` config/logging.php ``` and add following 
```php
        'custom' => [
            'driver' => 'custom',
            'via' => \Mdariftiens\DBlog\Services\LogMonolog::class
        ],

```

```php
        'stack' => [
            'driver' => 'stack',
            'channels' => ['custom'],
            'ignore_exceptions' => true,
        ],
```


To visit logs

```angular2html
/show-log
```

### Security

If you discover any security related issues, please email md.arif.tiens@gmail.com instead of using the issue tracker.

## Credits

-   [Arif](https://github.com/mdariftiens)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
