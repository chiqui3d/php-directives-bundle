<?php

namespace Charles\PHPDirectivesBundle;

use Charles\PHPDirectivesBundle\DependencyInjection\PHPDirectivesBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\Yaml\Yaml;


class PHPDirectivesBundle extends Bundle
{

  use PHPDirectivesTrait;

  public function boot(): void
  {
    parent::boot();

    $alias    = $this->getContainerExtension()->getAlias();
    $resource = $this->container->getParameter('kernel.project_dir') . '/config/packages/' . $alias . '.yaml';
    if (!file_exists($resource)) {
      throw new \RuntimeException('The file "config/packages/' . $alias . '.yaml" does not exist. The PHPDirectivesBundle requires that file to exist.');
    }
    $configs          = Yaml::parse(file_get_contents($resource));
    $directives       = $configs[ $alias ];
    $phpDirectives    = $directives[ 'php' ];
    $localeDirectives = $directives[ 'locale' ];

    static::setPHPDirectives($phpDirectives);
    static::setLocaleDirectives($localeDirectives);

  }


  public function getContainerExtension()

  {
    if (null === $this->extension) {
      $this->extension = new PHPDirectivesBundleExtension();
    }
    return $this->extension;
  }
}
