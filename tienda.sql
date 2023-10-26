SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `precio` float NOT NULL,
  `cantidad_local` varchar(3) NOT NULL,
  `cantidad_deposito` int(11) NOT NULL,
  `categorias` varchar(50) NOT NULL,
  `imagen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `color`, `precio`, `cantidad_local`, `cantidad_deposito`, `categorias`, `imagen`) VALUES
(20, 'Cuna', 'Baranda deslizable S/cajon 92x72x126', 'Blanco/rosa', 58500, '1', 0, 'Bebe', '')


CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `registro` timestamp NULL DEFAULT current_timestamp() COMMENT 'CURRENT_TIMESTAMP'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `user` (`id`, `nombre`, `correo`, `password`, `registro`) VALUES
(1, 'Administrador', 'a@gmail.com', '54321', '2023-06-5 14:08:46'),
(2, 'Luciano', 'ab@gmail.com', '12345', '2023-06-13 14:13:22'),
(3, 'horacio', 'usuario@gmail.com', '147852', '2023-06-13 14:13:36'),
(9, 'Jose', 'me@gmail.com', '12345', '2023-06-13 17:41:46');

ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `correo` (`correo`);

ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

