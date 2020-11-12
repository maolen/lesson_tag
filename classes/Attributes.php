<?php


class Attributes
{
    protected $attributes;

    public function __construct()
    {
        $this->clear();
    }

    function clear()
    {
        return $this->setArray([]);
    }

    function setArray(array $attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    function prepend(string $key, $value)
    {
        $old = $this->get($key);
        $value = $value . $old;
        return $this->set($key, $value);
    }

    function get(string $key)
    {
        return $this->toArray()[$key] ?? null;
    }

    function toArray()
    {
        return array_filter(
            $this->attributes,
            function ($attribute) {
                return !is_null($attribute);
            }
        );
    }

    function set(string $key, $value)
    {
        $old = $this->toArray();
        $key = strtolower($key);
        $key = trim($key);
        $old[$key] = $value;
        return $this->setArray($old);
    }

    function append(string $key, $value)
    {
        $old = $this->get($key);
        $value = $old . $value;
        return $this->set($key, $value);
    }

    function __toString()
    {
        $attributes = '';
        foreach ($this->toArray() as $key => $value) {
            $attributes .= " {$key}=\"{$value}\"";
        }
        return $attributes;
    }
}