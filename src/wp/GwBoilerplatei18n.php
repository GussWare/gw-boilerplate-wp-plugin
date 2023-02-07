<?php

namespace GussWare\GwBoilerplate\Wp;

class GwBoilerplatei18n
{
    public function __construct()
    {
    }

    /**
     * Carga el dominio de texto (textdomain) del plugin para la traducción.
     *
     * @since    1.0.0
     * @access public static
     */
    public function load_plugin_textdomain()
    {
        load_plugin_textdomain(
            GW_BOILERPLATE_TEXTDOMAIN,
            false,
            GW_BOILERPLATE_PLUGIN_PATH . 'languages'
        );
    }
}
