<?php

/**
 * La funcionalidad específica de administración del plugin.
 *
 * @link       https://gussware.dev
 * @since      1.0.0
 *
 * @package    GwBoilerplate
 * @subpackage GwBoilerplate/admin
 */

/**
 * Define el nombre del plugin, la versión y dos métodos para
 * Encolar la hoja de estilos específica de administración y JavaScript.
 * 
 * @since      1.0.0
 * @package    GwBoilerplate
 * @subpackage GwBoilerplate/admin
 * @author     Gustavo Avila Medina <gussware@gmail.com>
 * 
 * @property string $plugin_name
 * @property string $version
 */

namespace GussWare\GwBoilerplate\Admin;

use GussWare\GwBoilerplate\Wp\GwBoilerplateBuildMenuPage;

class GwBoilerplateAdmin
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
     * Objeto registrador de menús
     *
     * @since    1.0.0
     * @access   private
     * @var      object    $build_menupage  Instancia del objeto GwBoilerplateBuildMenuPage
     */
    private $build_menupage;

    /**
     * @param string $plugin_name nombre o identificador único de éste plugin.
     * @param string $version La versión actual del plugin.
     */
    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
        $this->build_menupage = new GwBoilerplateBuildMenuPage();
    }

    /**
     * Registra los archivos de hojas de estilos del área de administración
     *
     * @since    1.0.0
     * @access   public
     *
     * @param    string   $hook    Devuelve el texto del slug del menú con el texto toplevel_page
     */
    public function enqueue_styles($hook)
    {
        wp_enqueue_style($this->plugin_name, GW_BOILERPLATE_PLUGIN_URL . 'node_modules/bootstrap/dist/css/bootstrap.css', array(), $this->version);

        wp_enqueue_style('gw_boilerplate_admin', GW_BOILERPLATE_PLUGIN_URL . 'src/admin/assets/css/gw_boilerplate_admin.css', array(), $this->version);
    }

    /**
     * Registra los archivos Javascript del área de administración
     *
     * @since    1.0.0
     * @access   public
     *
     * @param    string   $hook    Devuelve el texto del slug del menú con el texto toplevel_page
     */
    public function enqueue_scripts($hook)
    {
        wp_enqueue_script('jquery-ui-spinner');

        wp_enqueue_script("bootstrap", GW_BOILERPLATE_PLUGIN_URL . 'node_modules/bootstrap/dist/js/bootstrap.js', array('jquery'), $this->version, true);

        wp_enqueue_script("handlebars", GW_BOILERPLATE_PLUGIN_URL . 'node_modules/handlebars/dist/handlebars.js', array(), '4.7.7', true);

        wp_enqueue_script("jquery.BasicPagination", GW_BOILERPLATE_PLUGIN_URL . 'node_modules/plugin-basic-pagination/src/jquery.BasicPagination.js', array('jquery'), '0.1.2-alpha', true);

        wp_enqueue_script("jquery.validate", GW_BOILERPLATE_PLUGIN_URL . 'node_modules/jquery-validation/dist/jquery.validate.js', array('jquery'), '1.19.5', true);

        wp_enqueue_script("jquery-form", GW_BOILERPLATE_PLUGIN_URL . 'node_modules/jquery-form/src/jquery.form.js', array('jquery'), '4.3.0', true);

        wp_enqueue_script('gw_boilerplate_admin', GW_BOILERPLATE_PLUGIN_URL . 'src/admin/assets/js/gw_boilerplate_admin.js', array('jquery', 'jquery-form', 'jquery.validate'), $this->version, true);

        wp_localize_script('gw_boilerplate_admin', 'Gw_Script', array(
            'admin_ajax_url' => admin_url('admin-ajax.php'),
            'gw_nonce_security' => wp_create_nonce('gw_nonce_security')
        ));
    }

    /**
     * Registra los menús del plugin en el
     * área de administración
     *
     * @since    1.0.0
     * @access   public
     */
    public function add_menu()
    {
        $this->build_menupage->add_menu_page(
            __('Gw Boilerplate', GW_BOILERPLATE_TEXTDOMAIN),
            __('Gw Boilerplate', GW_BOILERPLATE_TEXTDOMAIN),
            'manage_options',
            'gw_boilerplate_data',
            [$this, 'display_menu_page'],
            'dashicons-gw-boilerplate-icon',
            22
        );

        $this->build_menupage->run();
    }

    /**
     * Controla las visualizaciones del menú
     * en el área de administración
     *
     * @since    1.0.0
     * @access   public
     */
    public function display_menu_page()
    {
        $id     = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $action = isset($_GET['action']) ? $_GET['action'] : 'list';

        $template = "";

        switch ($action) {
            case 'list':
            default:
                $template = GW_BOILERPLATE_PLUGIN_PATH . 'src/admin/views/gw-list-view.php';
                break;
        }

        if (!empty($template) && file_exists($template)) {
            include $template;
        }
    }
}
