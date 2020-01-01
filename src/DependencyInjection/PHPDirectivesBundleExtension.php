<?php

namespace Charles\PHPDirectivesBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

/**
 * @author Charles
 */
class PHPDirectivesBundleExtension extends Extension
{

  public function load(array $configs, ContainerBuilder $container): void
  {
  }

  public function getAlias(): string
  {
    return 'php_directives';
  }
}
