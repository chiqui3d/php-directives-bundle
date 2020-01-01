<?php

namespace PHPDirectivesBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
  public function getConfigTreeBuilder(): TreeBuilder
  {
    $treeBuilder = new TreeBuilder('php_directives');

    $treeBuilder->getRootNode()->arrayPrototype()->scalarPrototype();

    return $treeBuilder;
  }
}
