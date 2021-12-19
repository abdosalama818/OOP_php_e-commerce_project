<?php



class Str implements Rules
{
    public function check($name, $value)
    {
        if (!is_string($value)) {
            return "$name must be string";
        }
        return false;
    }
}
