<?php

namespace GussWare\GwBoilerplate\Admin\Validations\Boilerplate;

use Sirius\Validation\Validator;

class GwBoilerplateUpdateValidation 
{
    protected $validator;

    public function __construct()
    {
        $this->validator = new Validator();
    }

    public function validate($id, $data) 
    {
        $this->validator->add("name", "required");
        $this->validator->add("slug", "required");
        $this->validator->add("description", "required");

        $validate =  $this->validator->validate($data);

        return $validate;
    }

    public function to_array()
    {
        return $this->validator->getMessages();
    }
}