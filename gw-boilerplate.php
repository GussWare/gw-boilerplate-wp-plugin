<?php 
/**
 * Archivo del plugin 
 * Este archivo es leído por WordPress para generar la información del plugin
 * en el área de administración del complemento. Este archivo también incluye 
 * todas las dependencias utilizadas por el complemento, registra las funciones 
 * de activación y desactivación y define una función que inicia el complemento.
 *
 * @link                https://gussware.dev
 * @since               1.0.0
 * @package             GussWare
 *
 * @wordpress-plugin
 * Plugin Name:         Gw-Boilerplate
 * Plugin URI:          http://gussware.dev
 * Description:         Plugin utilizado como boilerplate para el desarrollo de futuros proyectos en wordpress
 * Version:             1.0.0
 * Author:              Gustavo Avila Medina
 * Author URI:          http://gussware.dev
 * License:             GPL2
 * License URI:         https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:         gw-boilerplate
 * Domain Path:         /languages
 */

define( 'GW_BOILERPLATE_VERSION', '1.0.0' );
define( 'GW_BOILERPLATE_TEXTDOMAIN', 'Gw-Boilerplate' );
define( 'GW_BOILERPLATE_NAME', 'Gw-Boilerplate' );
define( 'GW_BOILERPLATE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'GW_BOILERPLATE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'GW_BOILERPLATE_PLUGIN_ABSOLUTE', __FILE__ );
define( 'GW_BOILERPLATE_MIN_PHP_VERSION', '8.0' );
define( 'GW_BOILERPLATE_WP_VERSION', '5.3' );
define( 'GW_BOILERPLATE_AJAX_MESSAGES', 'messages' );


define('GW_BOILERPLATE_SI', 1);
define('GW_BOILERPLATE_NO', 0);



// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
	die( 'We\'re sorry, but you can not directly access this file.' );
}

/**
 * Revisamos si existe el autoload de composer si existe lo importamos
 */
if(file_exists(dirname(__FILE__) . "/vendor/autoload.php")) {
	require_once(dirname(__FILE__) . "/vendor/autoload.php");
}


use GussWare\GwBoilerplate\Wp\GwBoilerplateActivator;
use GussWare\GwBoilerplate\Wp\GwBoilerplateDeactivator;
use GussWare\GwBoilerplate\Wp\GwBoilerplateMaster;


/**
 * Código que se ejecuta en la activación del plugin
 */
function activate_gw_boilerplate() {
	GwBoilerplateActivator::activate();
}

/**
 * Código que se ejecuta en la desactivación del plugin
 */
function deactivate_gw_boilerplate() {
	GwBoilerplateDeactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gw_boilerplate');
register_deactivation_hook( __FILE__, 'deactivate_gw_boilerplate');

function run_gw_master() {
    $gw_master = new GwBoilerplateMaster();
    $gw_master->run();
}

run_gw_master();