<?php


class RequiredFiles implements Rules
{
    public function check($name, $value)
    {
        if ($value['error'] != 0) {
            return "$name is required";
        }
        return false;
    }
}
