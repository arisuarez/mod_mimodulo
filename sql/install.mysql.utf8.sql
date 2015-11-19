/**
 * Ejemplo tabla
 */
CREATE TABLE IF NOT EXISTS `#__mimodulo_municipios` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `poblacion` int(10) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

INSERT INTO `#__mimodulo_municipios` (id, nombre, poblacion) VALUES
( 1, 'Adeje', '49387'),
( 2, 'Arona', '80987'),
( 3, 'San Cristóbal de La Laguna', '151718'),
( 4, 'Santa Cruz de Tenerife', '206593');
