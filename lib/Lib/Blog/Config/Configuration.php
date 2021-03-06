<?php

namespace API\Lib\Blog\Config;

class Configuration
{
    private static $params;

    public static function get($name, $defaultValue = null)
    {
        if (isset(self::getParams()[$name])) {
            return self::getParams()[$name];
        }
        return $defaultValue;
    }

    private static function getParams()
    {
        if (self::$params == null) {
            $filePath = realpath(__DIR__."/../../../../src/App/Blog/config/prod.ini");
            if (!file_exists($filePath)) {
                $filePath = realpath(__DIR__."/../../../../src/App/Blog/config/dev.ini");
            }
            if (!file_exists($filePath)) {
                throw new \Exception("Configuration file not found");
            }
            self::$params = parse_ini_file($filePath);
        }
        return self::$params;
    }
}
