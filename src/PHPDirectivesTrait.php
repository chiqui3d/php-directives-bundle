<?php

namespace PHPDirectivesBundle;


trait PHPDirectivesTrait
{

  public static function setPHPDirectives($directives): void
  {

    foreach ($directives as $name => $value)
    {
      if ($name === null || $value === null ) {
        continue;
      }
      if ($name === 'max_execution_time') {
        set_time_limit($value);
      }elseif ($name === 'date.timezone') {
        date_default_timezone_set((string) $value);
      } elseif (function_exists('ini_set')) {
        ini_set($name,  $value === false ? '0' : (string) $value);
      }
    }

  }

  public static function setLocaleDirectives($directives): void
  {

    foreach ($directives as $category => $value)
    {
      if ($value === null || $category === null ) {
        continue;
      }
      setlocale(constant($category), (string)$value);
    }

  }

}
