<?php
/**
 * MiModulo! Module Entry Point
 *
 * mod_mimodulo Ejemplo de módulo para formación Joomla.
 * - Cargar helper.
 * - Llamar a método para obtener datos a mostrar en vista.
 * - Cargar la plantilla.
 */

// No direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$data = modMiModuloHelper::getContent($params);

require JModuleHelper::getLayoutPath('mod_mimodulo');
