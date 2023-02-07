<?php

namespace GussWare\GwBoilerplate\Admin\Controllers;

use GussWare\GwBoilerplate\Includes\Factories\Database_Factory;
use GussWare\GwBoilerplate\Includes\Sedders\Database_Implements_Sedder;

class GwSedderController
{
    protected $sedders;

    protected $Database_Factory;

    protected $Database_Implements_Sedder;

    public function __construct()
    {
        $this->sedders = array(
            "Roles_Sedder"
        );

        $this->Database_Factory = new Database_Factory();
        $this->Database_Implements_Sedder = new Database_Implements_Sedder();
    }

    public function sedder()
    {
        foreach ($this->sedders as $sedder) {
            $context = $this->Database_Factory->factory($sedder);
            $this->Database_Implements_Sedder->implement($context);
        }
    }
}
