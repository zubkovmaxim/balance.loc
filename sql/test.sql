-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.13-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица balance.balance_history
CREATE TABLE IF NOT EXISTS `balance_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` float NOT NULL DEFAULT 0,
  `balance` float NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы balance.balance_history: ~3 rows (приблизительно)
DELETE FROM `balance_history`;
/*!40000 ALTER TABLE `balance_history` DISABLE KEYS */;
INSERT INTO `balance_history` (`id`, `value`, `balance`, `user_id`, `created_at`) VALUES
	(1, 3, 23, 249, '2019-01-22 22:22:22'),
	(2, 34, 124, 249, '2020-01-22 22:22:22'),
	(3, 3, 23, 123, '2019-01-22 22:22:22'),
	(4, 3, 23, 123, '2018-01-22 22:22:22'),
	(5, 3, 23, 249, '2018-01-22 22:22:22');
/*!40000 ALTER TABLE `balance_history` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
