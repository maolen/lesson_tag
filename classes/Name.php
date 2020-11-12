<?php


class Name
{
    const selfClosing = [
        'area',
        'base',
        'br',
        'col',
        'embed',
        'hr',
        'img',
        'input',
        'link',
        'meta',
        'param',
        'source',
        'track',
        'wbr',
        'command',
        'keygen',
        'menuitem'
    ];
    protected $name;

    public function __construct(string $name)
    {
        $this->set($name);
    }

    function set(string $name)
    {
        $name = trim($name);
        $this->name = strtolower($name);
        return $this;
    }

    function isSelfClosing()
    {
        return in_array($this->get(), self::selfClosing);
    }

    function get()
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->get();
    }
}