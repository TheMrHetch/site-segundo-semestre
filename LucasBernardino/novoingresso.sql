-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 14-Nov-2017 às 14:22
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compra`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `novoingresso`
--

DROP TABLE IF EXISTS `novoingresso`;
CREATE TABLE IF NOT EXISTS `novoingresso` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Valor` varchar(20) DEFAULT NULL,
  `OpLinguagem` char(9) DEFAULT NULL,
  `Quantidade` tinyint(7) DEFAULT NULL,
  `Pagamento` char(7) DEFAULT NULL,
  `Name` text,
  `Cpf` varchar(15) DEFAULT NULL,
  `Cartao` text,
  `CodSeg` int(3) DEFAULT NULL,
  `Validade` varchar(7) DEFAULT NULL,
  `Telefone` varchar(15) DEFAULT NULL,
  `Celular` varchar(15) DEFAULT NULL,
  `dataDeNascimento` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `novoingresso`
--

INSERT INTO `novoingresso` (`ID`, `Valor`, `OpLinguagem`, `Quantidade`, `Pagamento`, `Name`, `Cpf`, `Cartao`, `CodSeg`, `Validade`, `Telefone`, `Celular`, `dataDeNascimento`) VALUES
(1, 'MeiaIMAX(25R$)', 'Legendado', 3, 'Credito', 'Lucas Bernardino Gomes', '541.286.521-64', '5253 2000 9117 2556', 786, '12/20', '11 27485878', '11 972695600', '09/09/1982');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
