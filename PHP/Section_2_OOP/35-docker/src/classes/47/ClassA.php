<?php

namespace folderName;

class ClassA
{

    /*protected string $name = 'A';

    public function getName(): string
    {
        var_dump(get_class($this));
        return $this->name;
    }*/

    /**
     * static
     * - we can't use $this-> within static context
     */

   /* protected static string $name = 'A';

    public static function getName(): string
    {
       return self::$name;
    }*/

    /**
     * Late static binding
     */

    protected static string $name = 'A';

    public static function getName(): string
    {
        return static::$name;
    }

}