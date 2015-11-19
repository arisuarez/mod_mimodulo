<?php
/**
 * Helper class for MiModulo
 */
class ModMiModuloHelper
{
    /**
     * Retrieves the data
     * @param   array  $params An object containing the module parameters
     * @access public
     */
    public static function getContent($params)
    {
        $data = (object) array(
            'mensaje' => NULL,
            'municipios' => NULL,
            'usuario' => NULL,
            'menu' => NULL
        );

        // Parámetros de configuración
        $data->mensaje = $params->get('mi_descripcion');

        // Usuario
        $user = JFactory::getUser();
        $isGuest = $user->get('guest');
        $data->usuario = $isGuest ? 'Invitado' : $user->get('name');

        // Menú
        $app = JFactory::getApplication();
        $menu = $app->getMenu();
        $menuItem = $menu->getActive();
        $data->menu = $menuItem->alias;

        // Municipios y población
        $db = JFactory::getDbo();
        $query = $db->getQuery(true)
                    ->select('id, nombre, poblacion')
                    ->from($db->quoteName('#__mimodulo_municipios'));

        // Ejemplo de mostrar contenido según menú
        if( $menuItem->alias == 'blog' )
        {
            $query = $query->where('poblacion >= 100000');
        }

        $db->setQuery($query);

        $data->municipios = $db->loadObjectList();

        return $data;
    }
}
