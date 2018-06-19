<?php
namespace Phwoolcon;

use Phalcon\Di;

class Aliases
{

    public static function register(Di $di)
    {
        if ($aliases = Config::get('app.class_aliases')) {
            foreach ($aliases as $alias => $class) {
                $class && !class_exists($alias, false) and class_alias($class, $alias);
            }
        }
    }
}
