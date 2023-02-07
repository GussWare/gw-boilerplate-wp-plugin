<?php

namespace GussWare\GwBoilerplate\Admin\Validations\Boilerplate;

use Sirius\Validation\Helper;

class GwBoilerplateCreateValidation
{
    protected $messages;

    public function __construct()
    {
        $this->messages = array();
    }

    public function validate($data)
    {
        if ((!isset($data["name"]) || empty($data["name"])) || (!Helper::minLength($data["name"], 3) || !Helper::maxLength($data["name"], 50))) {
            $this->messages[] = __("El campo nombre es requerido y debe de tener de 3 a 50 caracteres.", GW_BOILERPLATE_TEXTDOMAIN);

            return false;
        }

        if ((!isset($data["slug"]) || empty($data["slug"])) || (!Helper::minLength($data["slug"], 3) || !Helper::maxLength($data["slug"], 50))) {
            $this->messages[] = __("El campo slug debe de tener minimo 3 y maximo 50 caracteres.", GW_BOILERPLATE_TEXTDOMAIN);

            return false;
        }

        if (isset($data["description"]) && (!Helper::minLength($data["description"], 3) || !Helper::maxLength($data["description"], 250))) {
            $this->messages[] = __("El campo descripción debe de tener minimo 3 y maximo 250 caracteres.", GW_BOILERPLATE_TEXTDOMAIN);

            return false;
        }

        if (!isset($data["enabled"]) || ((int) $data["enabled"] != 0 && (int) $data["enabled"] != 1)) {
            $this->messages[] = __("El campo habilitado es requerido.", GW_BOILERPLATE_TEXTDOMAIN);

            return false;
        }

        return true;
    }

    public function to_array()
    {
        return $this->messages;
    }
}
