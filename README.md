advanced-maker-crud-bundle
======================

This bundle is extension to `symfony/maker-bundle`. It allows you to create advanced crud with several commands.

Requirements
------------
* Symfony flex with Symfony ^4.0
* symfony/maker-bundle

Installation
------------

    composer require charles/advanced-maker-crud-bundle:@dev

Configuration
-------------

    "repositories": [
            {
                "type": "package",
                "package": {
                    "name": "charles/advanced-maker-crud-bundle",
                    "version": "master",
                    "source": {
                        "url": "https://github.com/chiqui3d/advanced-maker-crud-bundle.git",
                        "type": "git",
                        "reference": "master"
                    }
                }
            }
        ],

Usage
-----

   php bin\console make:advancedcrud


> Entity must exist before command use

License
=======
This package is available under the MIT license.
