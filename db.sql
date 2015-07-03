create table ofertas
(
    id_oferta int(5) auto_increment primary key,
    id_tienda int(5),
    descripcion varchar(100)
);

create table compras
(
    id_compra int(5) auto_increment primary key,
    email_usuario varchar(50),
    id_oferta int(5)
);

CREATE TABLE IF NOT EXISTS `tiendas` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `longitud` varchar(100) NOT NULL,
  `latitud` varchar(100) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `tipo` int(2) NOT NULL,
  PRIMARY KEY (`id`)
);

create table tipo_tiendas
(
    id_tipo int(2) auto_increment primary key,
    nombre varchar(50)
);