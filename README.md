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
Test repository, currently in the process of being finalized and released to packagist, while you can install it by following the next steps:

Add to composer.json repositories:

    "repositories": [
        {
          "type": "vcs",
          "url": "https://github.com/chiqui3d/php-directives-bundle.git"
        }
      ],

Add to require packages:

    "chiqui3d/php-directives-bundle": "dev-master",
      
Add class to config/bundles.php

    PHPDirectivesBundle\PHPDirectivesBundle::class => ['all' => true],

Configuration
-------------
```config/packages/php_directives.yaml```
    
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
