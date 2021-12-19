<?php


class Max implements Rules
{
    public function check($name, $value)
    {
        if (strlen($value)>255) {
            return "$name must less than 255 char";
        }
        return false;
    }
}
