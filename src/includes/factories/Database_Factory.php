<?php
namespace GussWare\GwBoilerplate\Includes\Factories;

class Database_Factory
{
    public function __construct()
    {
    }

    public function factory($class_name)
    {
        $path =  GW_BOILERPLATE_PLUGIN_PATH . 'common/models/' . $class_name . ".php";

        if (!file_exists($path)) {
            throw new Exception('Database_Factory - No se encontro el archivo del modelo.');
        }

        require_once $path;

        $object_factory = new $class_name();

        if (!$object_factory || (!$object_factory instanceof $class_name)) {
            throw new Exception('Database_Factory - La fabrica no pudo crear el objeto de la clase a exportar.');
        }

        return $object_factory;
    }
}
