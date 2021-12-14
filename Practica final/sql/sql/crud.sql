

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) primary key NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `categoria`, `cantidad`, `precio`) VALUES
(17240125, 'Bota lizard', 'Bora para dama, estilo rodeo, tallas 23-27', 'Dama', 65, 1799),
(17240145, 'Botín charro', 'Botín charro para caballero, tallas 25-30, Color nude, café, negro.', 'Caballero', 45, 1549),
(17242560, 'Bota flores', 'Bora para dama, estilo rodeo, tallas 23-27', 'Dama', 23, 1799),
(18240370, 'Botín frances', 'Botín francés, tallas 25-30, Color negro, gris, café', 'Caballero', 32, 1349);

