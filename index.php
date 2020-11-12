<?php

require_once 'classes/Tag.php';


$container = new Tag('div');
$container->setAttr('class', 'container');

$link = new Tag('a');
$link->setAttr('href', '//google.com')
    ->appendBody('Google');
$container->appendBody($link);

$container->setAttr('target', '_blank');
echo $container;

echo (new Tag('a'))
    ->appendBody('Google')
    ->href('//google.com')
    ->target('_blank');

$link = new Tag('a');
$link->href = '//google.com';

$link = new Tag('input');
$link->type = 'password';

echo $link;
//
//class One {
//    static $name = 'John';
//
//    function name(){
//        return self::$name;
//    }
//
//}
//echo (new One)->name();