<?php


class Required implements Rules
{
    public function check($name, $value)
    {
        if (empty($value)) {
            return "$name is required";
        }
        return false;
    }
}
