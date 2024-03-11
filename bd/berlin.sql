CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `ci` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `paterno` varchar(100) NOT NULL,
  `materno` varchar(100) NOT NULL,
  `fechanac` date NOT NULL,
  `celular` int(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
