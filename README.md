php-directives-bundle
======================
A small and simple Bundle in Symfony to add directives to PHP

Directives documentation
======================
PHP => https://www.php.net/manual/en/ini.list.php

Locale => https://www.php.net/manual/en/function.setlocale.php

Requirements
------------
* Symfony 4.4 or sup.

Installation
------------

    composer require chiqui3d/php-directives-bundle:@dev

Configuration
-------------
config/packages/php_directives.yaml

    php_directives:
        php:
            date.timezone: Europe/Madrid
        locale:
            LC_MONETARY: es_ES

License
=======
This package is available under the MIT license.
