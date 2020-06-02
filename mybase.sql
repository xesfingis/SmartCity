

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση: `mybase`
--
CREATE DATABASE IF NOT EXISTS `mybase` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mybase`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `anafores`
--

CREATE TABLE IF NOT EXISTS `anafores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_user` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `solution` varchar(2000) NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `lng` float(15,10) NOT NULL,
  `lat` float(15,10) NOT NULL,
  `katigoria` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `katigories`
--

CREATE TABLE IF NOT EXISTS `katigories` (
  `katigoria` varchar(100) NOT NULL,
  PRIMARY KEY (`katigoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anaforas` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `onoma` varchar(200) NOT NULL,
  `tilefono` varchar(20) NOT NULL,
  `user` int(1) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`email`, `password`, `onoma`, `tilefono`, `user`) VALUES
('admin@test.gr', '1234', 'Admin 333', '678232423', 1),
('test@test.gr', '1234', 'test1', '2134432', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
