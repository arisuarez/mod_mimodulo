<?php
// No direct access
defined('_JEXEC') or die;

?>
<p><b>Usuario</b>: <?php echo $data->usuario; ?></p>
<p><b>Menú</b>: <?php echo $data->menu; ?></p>
<p><?php echo $data->mensaje; ?></p>
<table>
    <tr>
        <th>&nbsp;</th>
        <th><?php echo JText::_('MOD_MIMODULO_FIELD_NOMBRE', true); ?></th>
        <th><?php echo JText::_('MOD_MIMODULO_FIELD_POBLACION', true); ?></th>
    </tr>
    <?php foreach ($data->municipios as $key => $item): ?>
    <tr>
        <td style="text-align:right; vertical-align:top"><?php echo $item->id ?>.</td>
        <td><?php echo $item->nombre ?></td>
        <td style="text-align:right; vertical-align:bottom"><?php echo number_format($item->poblacion, 0, ",", "."); ?></td>
    </tr>
    <?php endforeach; ?>
</table>
