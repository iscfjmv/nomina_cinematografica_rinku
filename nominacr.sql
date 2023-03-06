-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para nominacr
DROP DATABASE IF EXISTS `nominacr`;
CREATE DATABASE IF NOT EXISTS `nominacr` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `nominacr`;

-- Volcando estructura para tabla nominacr.empleados
DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidopaterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidomaterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla nominacr.empleados: ~3 rows (aproximadamente)
INSERT INTO `empleados` (`id`, `nombre`, `apellidopaterno`, `apellidomaterno`, `direccion`, `correo`, `telefono`, `created_at`, `updated_at`) VALUES
	(1, 'Pedro', 'Morales', 'Morales', 'conocido', 'montedelolvido@gmail.com', '9635657154', '2023-03-05 11:16:43', '2023-03-05 11:16:43'),
	(2, 'martha', 'guerra', 'del monte', 'cañadas sucias', 'montedelolvido@gmail.com', '00000000', '2023-03-05 11:24:38', '2023-03-05 11:24:38'),
	(3, 'henry', 'mota', 'del campo', 'montes azules', 'aguayoperro@guangotu.com', '1234567890', '2023-03-05 11:25:25', '2023-03-05 11:25:25');

-- Volcando estructura para tabla nominacr.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla nominacr.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla nominacr.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla nominacr.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_03_05_024442_empleados', 1),
	(6, '2023_03_05_024455_roles', 1),
	(7, '2023_03_05_024508_sueldos', 1),
	(8, '2023_03_05_024519_pagos', 1);

-- Volcando estructura para tabla nominacr.pagos
DROP TABLE IF EXISTS `pagos`;
CREATE TABLE IF NOT EXISTS `pagos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idempleado` bigint unsigned NOT NULL,
  `idsueldo` bigint unsigned NOT NULL,
  `numeroentregas` int NOT NULL,
  `pagototal` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pagos_empleados` (`idempleado`),
  KEY `FK_pagos_sueldos` (`idsueldo`),
  CONSTRAINT `FK_pagos_empleados` FOREIGN KEY (`idempleado`) REFERENCES `empleados` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_pagos_sueldos` FOREIGN KEY (`idsueldo`) REFERENCES `sueldos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla nominacr.pagos: ~0 rows (aproximadamente)
INSERT INTO `pagos` (`id`, `idempleado`, `idsueldo`, `numeroentregas`, `pagototal`, `created_at`, `updated_at`) VALUES
	(1, 1, 2, 0, 458.00, '2023-03-06 09:47:01', '2023-03-06 09:47:01');

-- Volcando estructura para tabla nominacr.password_reset_tokens
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla nominacr.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla nominacr.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla nominacr.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla nominacr.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombrerol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla nominacr.roles: ~0 rows (aproximadamente)
INSERT INTO `roles` (`id`, `nombrerol`, `created_at`, `updated_at`) VALUES
	(1, 'Choferes', '2023-03-05 11:19:59', '2023-03-05 11:19:59'),
	(2, 'Cargadores', '2023-03-05 11:20:08', '2023-03-05 11:20:08'),
	(3, 'Auxiliares', '2023-03-05 11:20:17', '2023-03-05 11:20:17');

-- Volcando estructura para tabla nominacr.sueldos
DROP TABLE IF EXISTS `sueldos`;
CREATE TABLE IF NOT EXISTS `sueldos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idrol` bigint unsigned NOT NULL,
  `sueldobase` decimal(8,2) NOT NULL,
  `bono` decimal(8,2) NOT NULL,
  `precioentrega` decimal(8,2) NOT NULL,
  `horaslaborables` int NOT NULL,
  `diaslaborables` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_sueldos_roles` (`idrol`),
  CONSTRAINT `FK_sueldos_roles` FOREIGN KEY (`idrol`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla nominacr.sueldos: ~3 rows (aproximadamente)
INSERT INTO `sueldos` (`id`, `idrol`, `sueldobase`, `bono`, `precioentrega`, `horaslaborables`, `diaslaborables`, `created_at`, `updated_at`) VALUES
	(1, 1, 30.00, 10.00, 5.00, 8, 6, '2023-03-06 01:21:12', '2023-03-06 01:21:12'),
	(2, 2, 30.00, 5.00, 5.00, 8, 6, '2023-03-06 05:54:58', '2023-03-06 05:54:58'),
	(3, 3, 30.00, 0.00, 5.00, 8, 6, '2023-03-06 05:55:30', '2023-03-06 05:55:30');

-- Volcando estructura para tabla nominacr.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla nominacr.users: ~0 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Ana Lopez', 'alopez@starmedia.com', NULL, '$2y$10$I71wmiaMl.oEjYmXWa4FP.jUEj9Gsnn2YSJZSMJt0RxE7f622jC0q', NULL, '2023-03-05 10:14:02', '2023-03-05 10:14:02');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
