<?php

namespace GussWare\GwBoilerplate\Wp;

use GussWare\GwBoilerplate\Wp\GwBoilerplateCargador;
use GussWare\GwBoilerplate\Wp\GwBoilerplatei18n;

use GussWare\GwBoilerplate\Admin\GwBoilerplateAdmin;
use GussWare\GwBoilerplate\Admin\Controllers\GwCrudController;
use GussWare\GwBoilerplate\Admin\Controllers\GwSedderController;
use GussWare\GwBoilerplate\Front\GwBoilerplateFront;

class GwBoilerplateMaster
{
    protected $gw_admin;

    protected $gw_front;

    protected $gw_boilerplate_crud;

    protected $gw_boilerplate_sedders;

    /**
     * El cargador que es responsable de mantener y registrar
     * todos los ganchos (hooks) que alimentan el plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      GwBoilerplateCargador    $cargador  Mantiene y registra todos los ganchos ( Hooks ) del plugin
     */
    protected $cargador;

    /**
     * El identificador único de éste plugin
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $plugin_name  El nombre o identificador único de éste plugin
     */
    protected $plugin_name;

    /**
     * Versión actual del plugin
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $version  La versión actual del plugin
     */
    protected $version;

    /**
     * Constructor
     * 
     * Defina la funcionalidad principal del plugin.
     *
     * Establece el nombre y la versión del plugin que se puede utilizar en todo el plugin.
     * Cargar las dependencias, carga de instancias, definir la configuración regional (idioma)
     * Establecer los ganchos para el área de administración y
     * el lado público del sitio.
     *
     * @since    1.0.0
     */
    public function __construct()
    {
        $this->plugin_name  = GW_BOILERPLATE_NAME;
        $this->version      = GW_BOILERPLATE_VERSION;

        $this->cargar_instancias();
        $this->set_idiomas();
        $this->definir_admin_hooks();
        $this->definir_front_hooks();
    }


    /**
     * Defina la configuración regional de este plugin para la internacionalización.
     *
     * Utiliza la clase GwBoilerplate_i18n para establecer el dominio y registrar el gancho
     * con WordPress.
     *
     * @since    1.0.0
     * @access   private
     */
    private function set_idiomas()
    {
        $gw_boilerplate_i18n = new GwBoilerplatei18n();
        $this->cargador->add_action('plugins_loaded', $gw_boilerplate_i18n, 'load_plugin_textdomain');
    }

    /**
     * Cargar todas las instancias necesarias para el uso de los 
     * archivos de las clases agregadas
     *
     * @since    1.0.0
     * @access   private
     */
    private function cargar_instancias()
    {
        $this->cargador = new GwBoilerplateCargador();
        $this->gw_admin = new GwBoilerplateAdmin($this->get_plugin_name(), $this->get_version());
        $this->gw_front = new GwBoilerplateFront($this->get_plugin_name(), $this->get_version());

        $this->gw_boilerplate_crud = new GwCrudController();
        $this->gw_boilerplate_sedders = new GwSedderController();
    }

    /**
     * Registrar todos los ganchos relacionados con la funcionalidad del área de administración
     * del plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function definir_admin_hooks()
    {
        $this->cargador->add_action('admin_enqueue_scripts', $this->gw_admin, 'enqueue_styles');
        $this->cargador->add_action('admin_enqueue_scripts', $this->gw_admin, 'enqueue_scripts');
        
        $this->cargador->add_action('admin_menu', $this->gw_admin, 'add_menu');

        // controlador para lo sedders
        $this->cargador->add_action('gw_boilerplete_sedders', $this->gw_boilerplate_sedders, 'sedder');


        // controler crud
        $this->cargador->add_action('wp_ajax_gw_boilerplate_pagination', $this->gw_boilerplate_crud, 'ajax_gw_boilerplate_pagination');
        $this->cargador->add_action('wp_ajax_gw_boilerplate_create', $this->gw_boilerplate_crud, 'ajax_gw_boilerplate_create');
    }

    /**
     * Registrar todos los ganchos relacionados con la funcionalidad del área de administración
     * Del plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function definir_front_hooks()
    {
        $this->cargador->add_action('wp_enqueue_scripts', $this->gw_front, 'enqueue_styles');
        $this->cargador->add_action('wp_enqueue_scripts', $this->gw_front, 'enqueue_scripts');
    }

    /**
     * Ejecuta el cargador para ejecutar todos los ganchos con WordPress.
     *
     * @since    1.0.0
     * @access   public
     */
    public function run()
    {
        $this->cargador->run();
    }

    /**
     * El nombre del plugin utilizado para identificarlo de forma exclusiva en el contexto de
     * WordPress y para definir la funcionalidad de internacionalización.
     *
     * @since     1.0.0
     * @access    public
     * @return    string    El nombre del plugin.
     */
    public function get_plugin_name()
    {
        return $this->plugin_name;
    }

    /**
     * La referencia a la clase que itera los ganchos con el plugin.
     *
     * @since     1.0.0
     * @access    public
     * @return    GwBoilerplateCargador    Itera los ganchos del plugin.
     */
    public function get_cargador()
    {
        return $this->cargador;
    }

    /**
     * Retorna el número de la versión del plugin
     *
     * @since     1.0.0
     * @access    public
     * @return    string    El número de la versión del plugin.
     */
    public function get_version()
    {
        return $this->version;
    }
}
