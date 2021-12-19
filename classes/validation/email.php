<?php


class Email implements Rules
{
    public function check($name, $value)
    {
        if (!filter_var(FILTER_VALIDATE_EMAIL)) {
            return "$name must be email";
        }
        return false;
    }
}
