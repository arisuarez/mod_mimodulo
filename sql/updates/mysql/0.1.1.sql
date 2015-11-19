--
-- Ejemplo script actualización
--
UPDATE `#__mimodulo_municipios` SET poblacion = 111111 WHERE id = 1;
UPDATE `#__mimodulo_municipios` SET poblacion = 222222 WHERE id = 2;

-- Ejemplo consulta crear índice
-- ALTER TABLE `#__mimodulo_municipios` ADD INDEX (poblacion);
