PHPDirectivesBundle
======================
A small and simple Bundle in Symfony to add PHP directives for your project

Directives documentation
======================
PHP => https://www.php.net/manual/en/ini.list.php

Locale => https://www.php.net/manual/en/function.setlocale.php

Requirements
------------
* Symfony 4.4 or sup.

Installation
------------

    composer require chiqui3d/php-directives-bundle
      
Check that the bundle appears in config/bundles.php

    PHPDirectivesBundle\PHPDirectivesBundle::class => ['all' => true],

Adding directives
-------------
```config/packages/php_directives.yaml```

These directives will be loaded into any part of your project.
    
```yaml
php_directives:
    php:
        date.timezone: Europe/Madrid
    locale:
        LC_MONETARY: es_ES
```

License
=======
This package is available under the MIT license.
