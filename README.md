# Unit Conversion

A simple php package for metric conversion. 
Kg to Pounds 
Celsius to Fahrenheit 

<!-- [![Latest Version on Packagist](https://img.shields.io/packagist/v/:vendor_slug/:package_slug.svg?style=flat-square)](https://packagist.org/packages/mesba/unitconversion)
[![Tests](https://img.shields.io/github/actions/workflow/status/:vendor_slug/:package_slug/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mesba-islam/unit-conversion/actions/workflows/fix-php-code-style-issues-pint.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/:vendor_slug/:package_slug.svg?style=flat-square)](https://packagist.org/packages/mesba/unitconversion) -->


## Installation

You can install the package via composer:

```bash
composer require mesba/unitconversion
```

## Usage

```php
include 'vendor/autoload.php';
echo Weight::fromKilograms(100)->tolbs();
echo Temperature::fromCelsius(33)->toFr();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/mesba-islam/unit-conversion) for details.



## Credits

- [Mesba](https://github.com/mesba-islam)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
