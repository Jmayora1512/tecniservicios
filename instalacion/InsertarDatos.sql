--
-- Volcado de datos para la tabla `categoria`
--


INSERT INTO `categoria` 
(`idCategoria`, 
`Nombre_Categoria`) 
VALUES

(1, 'Cercos'),

(2, 'Television'),

(3, 'Computacion');



--
-- Volcado de datos para la tabla `estados`
--


INSERT INTO `estados` (`idEstados`, `Nombre_Estado`) VALUES

(1, 'Amazonas'),

(2, 'Anzoategui'),

(3, 'Apure'),

(4, 'Aragua'),

(5, 'Barinas'),

(6, 'Bolivar'),

(7, 'Carabobo'),

(8, 'Cojedes'),

(9, 'Delta Amacuro'),

(10, 'Distrito Capital'),

(11, 'Falcon'),

(12, 'Guarico'),

(13, 'Lara'),

(14, 'Merida'),

(15, 'Miranda'),

(16, 'Monagas'),

(17, 'Nueva Esparta'),

(18, 'Portuguesa'),

(19, 'Sucre'),

(20, 'Tachira'),

(21, 'Trujillo'),

(22, 'Vargas'),

(23, 'Yaracuy'),

(24, 'Zulia');



--
-- Volcado de datos para la tabla `nivel_usuario`
--


INSERT INTO `nivel_usuario` 
(`idNivel_Usuario`, `Descripcion_Nivel`) VALUES

(1, 'Gerente'),
(2, 'Vendedor');



--
-- Volcado de datos para la tabla `productos`
--


INSERT INTO `productos` 
(`idProductos`, `Imagen`, `Codigo`, `Nombre`, `Descripcion_Productos`, `Precio_Costo`, `Precio_Venta`, `Stock`, `Fecha_Creado`, `Categoria_idCategoria`) VALUES

(1, 'imagenes/Cerco/AIS100.jpg', 'AIS100', 'Aislante de Paso', 'Aislador intermedio con remache', 10.26, 15.39, 100, '2015-01-02', 1),

(2, 'imagenes/Cerco/AIS200.jpg', 'AIS200', 'Aislante Tensor', 'Aislador final o esquinero para tensar', 15.66, 23.49, 100, '2015-01-02', 1),

(3, 'imagenes/Cerco/AIS300.jpg', 'AIS300', 'Aislante Intermedio', 'Aislador  intermedio con perno, arandela y tu', 19.44, 29.16, 100, '2015-01-02', 1),

(4, 'imagenes/Cerco/AIS400.jpg', 'AIS400', 'Aislante Final', 'Aislador  final con perno, arandela y tuerca', 37.13, 55.69, 100, '2015-01-02', 1),

(5, 'imagenes/Cerco/BOBI001.jpg', 'BOBI001', 'Bobina', 'Bobina de alambre con 150 mts Calibre 2 mm', 996.3, 1494.45, 100, '2015-01-02', 1),

(6, 'imagenes/Cerco/BOBI002.jpg', 'BOBI002', 'Bobina', 'Bobina de alambre con 2.000 mts Calibre 2 mm', 12555, 18832.5, 100, '2015-01-02', 1);
(7, 'imagenes/Cerco/EC-LITE001.jpg', 'EC-LITE001', 'Caja Enregizadora', 'Caja Enregizadora 13000 V', '9987.30', '14980.95', '100', '2014-01-05', 1),
(8, 'imagenes/Cerco/MAX8000.jpg', 'MAX8000', 'Caja Enregizadora', 'Caja Enregizadora 13000 V', '13497.30', '20245.95', '100', '2014-01-05', 1),
(9, 'imagenes/Cerco/MULT-3.jpg', 'MULT-3', 'Control Remoto', 'Control Remoto E5 3 Canales 433MHz', '729.00', '1093.50', '100', '2014-01-05', 1),
(10,'imagenes/Cerco/SISN001.jpg', 'SISN001', 'Sirena', 'Sirena Blanca de 20V', '999.00', '1498.50', '100', '2014-01-05', 1),
(11,'imagenes/Cerco/SISN007.jpg', 'SISN007', 'Sirena', 'Sirena Blanca de 30V', '1971.00', '2956.50', '100', '2014-01-05', 1),
(12,'imagenes/Cerco/STD001.jpg', 'STD001', 'Aislante', 'Aislante de Policarbonato', '10.26', '15.39', '100', '2014-01-05', 1),
(13,'imagenes/Television/AVADOME20.jpg', 'AVADOME20', 'Domo Infrarrojo', 'Domo Infrarrojo 1/4Pulg SHARP CCD', '5670.00', '8505.00', '100', '2014-01-05', 2),
(14,'imagenes/Television/AVADOME40.jpg', 'AVADOME40', 'Domo Antivandalico', 'Domo Antivandalico 1/4Pulg SHARP CCD', '7290.00', '10935.00', '100', '2014-01-05', 2),
(15,'imagenes/Television/AVADOME10.jpg', 'AVADOME10', 'Domo', 'Domo 1/4Pulg SHARP CCD', '5130.00', '7695.00', '100', '2014-01-05', 2),
(16,'imagenes/Television/UV-SD019FP.jpg', 'UV-SD019FP', 'Domo', 'Domo 1/3Pulg Sony CCD', '10530.00', '15795.00', '100', '2014-01-05', 2),
(17,'imagenes/Television/AVA-IR20.jpg', 'AVA-IR20', 'Camara Bala', 'Camara Bala  1/4 Pulg SHARP CCD', '6290.00', '9315.00', '100', '2014-01-05', 2),
(18,'imagenes/Television/AVA-IR10.jpg', 'AVA-IR10', 'Camara Bala', 'Camara Bala  1/4 Pulg SHARP CCD', '5937.30', '8905.95', '100', '2014-01-05', 2),
(19,'imagenes/Television/AVA-CAMERA10.jpg', 'AVA-CAMERA10', 'Camara Box', 'Camara Box 1/4Pulg SHARP CCD', '5397.30', '8095.95', '100', '2014-01-05', 2),
(20,'imagenes/Television/BO-DH420Q.jpg', 'BO-DH420Q', 'Camara', 'Camara 1/4Pulg Sharp CCD', '7560.00', '11340.00', '100', '2014-01-05', 2),
(21,'imagenes/Television/BO-DS420.jpg', 'BO-DS420', 'Camara', 'Camara 1/3Pulg Sharp CCD', '6480.00', '9720.00', '100', '2014-01-05', 2),
(22,'imagenes/Television/BO-SD019FP.jpg', 'BO-SD019FP', 'Camara', 'Camara 1/4Pulg Sharp CCD', '7830.00', '11475.00', '100', '2014-01-05', 2),
(23,'imagenes/Television/BO-SD23FS.jpg', 'BO-SD23FS', 'Camara Box', 'Camara Box 1/4Pulg Sharp CCD', '5130.00', '7695.00', '100', '2014-01-05', 2)
(24,'imagenes/Television/AVADOME50.jpg', 'AVADOME50', 'Domo Infrarrojo', 'Domo Infrarrojo 1/3Pulg Sony CCD', '7290.00', '10935.00', '100', '2014-01-05', 2);



--
-- Volcado de datos para la tabla `usuario`

--

INSERT INTO `usuario` (`Cedula_Usuario`, `Nombre_Usuario`, `Apellido_Usuario`, `Login`, `Clave`, `Correo_Usuario`, `Telefono_Usuario`, `Celular_Usuario`, `Fecha_Usuario`, `Direccion_Usuario`, `Nivel_Usuario_idNivel_Usuario`, `Estados_idEstados`) VALUES

(7996633, 'Jorge', 'Mayora', 'Jmayora', 'LaGuaira01', 'jorgemayora@hotmail.com', '02129559883', '04129785018', '2014-12-31', 'Vereda 12, Casa 1205, Catia la Mar', 1, 22);



INSERT INTO `inventario`.`forma_pago` (`idForma_Pago`, `Nombre_Forma_Pago`) VALUES (NULL, 'Efectivo'), (NULL, 'Cheque'),(NULL, 'Tarjeta de Debito'), (NULL, 'Tarjeta de Credito');