<?php


class Validaters
{
    public $errors = [];
    public function validate($name, $value, array $rules)
    {
        
        foreach ($rules as $rule) {
            $obj = new $rule;
            $error = $obj->check($name, $value);
            if ($error !== false) {
                $this->errors[] = $error;
                break;
            }
        }
    }
    public function getErrorss(){
        return $this->errors;
    }


    public function hasErrors(){
        return !empty($this->errors);
    }
}

