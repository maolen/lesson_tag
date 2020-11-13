<?php


namespace ItStep\PHP;


class Doctype
{
    public static function get($type)
    {
        return "<!DOCTYPE " . $type . ">";
    }
}