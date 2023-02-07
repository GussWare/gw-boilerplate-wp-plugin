<?php

namespace GussWare\GwBoilerplate\Admin\Validations\Boilerplate;

use Sirius\Validation\Validator;

class GwBoilerplateByIdValidation 
{
    protected $validator;

    public function __construct()
    {
        $this->validator = new Validator();
    }

    public function validate($data)
    {
        $this->validator->add("name", "required");

        $validate =  $this->validator->validate($data);

        return $validate;
    }

    public function to_array()
    {
        return $this->validator->getMessages();
    }
}