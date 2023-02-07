<?php

namespace GussWare\GwBoilerplate\Front;

class GwBoilerplateFront
{
    /**
     * El identificador único de éste plugin
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name  El nombre o identificador único de éste plugin
     */
    private $plugin_name;

    /**
     * Versión actual del plugin
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version  La versión actual del plugin
     */
    private $version;

    /**
     * Objeto wpdb
     *
     * @since    1.0.0
     * @access   private
     * @var      object    $db @global $wpdb
     */
    private $db;

    /**
     * @param string $plugin_name nombre o identificador único de éste plugin.
     * @param string $version La versión actual del plugin.
     */
    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Registra los archivos de hojas de estilos del área de administración
     *
     * @since    1.0.0
     * @access   public
     */
    public function enqueue_styles()
    {
        /**
         * Una instancia de esta clase debe pasar a la función run()
         * definido en GwBoilerplateCargador como todos los ganchos se definen
         * en esa clase particular.
         *
         * El GwBoilerplateCargador creará la relación
         * entre los ganchos definidos y las funciones definidas en este
         * clase.
         */
        wp_enqueue_style($this->plugin_name, GW_BOILERPLATE_PLUGIN_URL . 'src/front/css/gw-boilerplate-front.css', array(), $this->version, 'all');
    }

    /**
     * Registra los archivos Javascript del área de administración
     *
     * @since    1.0.0
     * @access   public
     */
    public function enqueue_scripts()
    {
        /**
         * Una instancia de esta clase debe pasar a la función run()
         * definido en GwBoilerplateCargador como todos los ganchos se definen
         * en esa clase particular.
         *
         * El GwBoilerplateCargador creará la relación
         * entre los ganchos definidos y las funciones definidas en este
         * clase.
         */
        wp_enqueue_script($this->plugin_name, GW_BOILERPLATE_PLUGIN_URL . 'src/front/js/gw-boilerplate-front.js', array('jquery'), $this->version, true);
    }
}
