<?php



class Numeric implements Rules
{
    public function check($name, $value)
    {
        if (!is_numeric($value)) {
            return "$name must be numeric value";
        }
        return false;
    }
}
