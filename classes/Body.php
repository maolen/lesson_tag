<?php


class Body
{
    protected $items;

    public function __construct()
    {
        $this->clear();
    }

    function clear()
    {
        $this->items = [];
        return $this;
    }

    function prepend($value)
    {
        $old = $this->toArray();
        array_unshift($old, $value);
        return $this->set($old);
    }

    function toArray()
    {
        return $this->items;
    }

    function set(array $items)
    {
        $this->items = $items;
        return $this;
    }

    function append($value)
    {
        $old = $this->toArray();
        $old[] = $value;
        return $this->set($old);
    }

    function __toString()
    {
        return implode($this->toArray());
    }
}