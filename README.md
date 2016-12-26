# twig-age-extension
Simple Twig extension to calculate the age in years based on a DateTime instance or a string

## Installation

Install via composer:
```
composer require genstor/twig-age-extension:@dev
```

Add the following to your services.yml file:
```yaml
services:
    twig.extension.date:
        class: Genstor\Twig\AgeExtension
        tags:
            - { name: twig.extension }
```

## Usage
```
{{ user.birthdate | age }}
```
