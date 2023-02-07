<?php

namespace GussWare\GwBoilerplate\Wp;

class GwBoilerplateActivator
{
    public function __construct()
    {
    }

    public static function activate()
    {
        self::create_tables_database();
        // self::composer_vendor_install();
    }

    public static function create_tables_database()
    {
        global $wpdb;

        $sql = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}gw_crud (
            id int(11) NOT NULL AUTO_INCREMENT,
            name varchar(255) NOT NULL,
            slug varchar(255) NOT NULL,
            description text NULL,
            enabled int(1) NOT NULL,
            PRIMARY KEY (id)
        );";

        $wpdb->query($sql);
    }

    public static function composer_vendor_install()
    {
        try {
            shell_exec("composer install");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
