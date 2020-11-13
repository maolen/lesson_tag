<?php

//require_once 'classes\BaseTag.php';

//$link = new Tag('a');
//$link->setAttr('href', '//google.com')
//    ->appendBody('Google');
//$container->appendBody($link);
//
//$container->setAttr('target', '_blank');
//echo $container;

//echo (new Tag('a'))
//    ->appendBody('Google')
//    ->href('//google.com')
//    ->target('_blank');

//$link = new Tag('a');
//$link->href = '//google.com';

//$link = new Tag('input');
//$link->type = 'password';
//
//echo $link;

//class One {
//    static $name = 'John';
//
//    function name(){
//        return self::$name;
//    }
//
//}
//echo (new One)->name();
// Namespace
//use Tag\Name;


require_once "autoload.php";
$container = Tag::div()
    ->class('container');

require_once "autoload.php";

class One
{
    public $name = 'Bob';
}

class Two extends One
{

}

echo (new Two)->name;
