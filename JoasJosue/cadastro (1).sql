-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Nov-2017 às 17:18
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadcli`
--

CREATE TABLE `cadcli` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `idade` tinyint(2) DEFAULT NULL,
  `cpf` bigint(11) DEFAULT NULL,
  `rg` int(9) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `vip` tinyint(1) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `pag` varchar(2) DEFAULT NULL,
  `promo` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadcli`
--

INSERT INTO `cadcli` (`id`, `nome`, `idade`, `cpf`, `rg`, `sexo`, `email`, `vip`, `estado`, `usuario`, `senha`, `pag`, `promo`) VALUES
(9, 'Arthur Rocha Rodrigues', 31, 32132134563, 385327863, 'M', 'artur_rocha@gmail.com', 4, 'PE', 'Artur', '456', 'CD', 0),
(10, 'Samuel Araujo Santos', 25, 34563464531, 312354638, 'M', 'samuel@outlook.com', 2, 'RR', 'Samuel', '789', 'BL', 1),
(3, 'Joas Josué Choque Choque', 44, 1122121121, 121321654, 'M', 'joaschoque@hotmail.com', 2, 'SP', 'ADAS', 'aaa', 'BL', 1),
(4, 'jennifer', 25, 12234564644, 787555894, 'F', 'jennifer_1@gmail.com', 1, 'BA', 'Jennifer1', 'bbb', 'CC', 1),
(6, 'Claudio', 45, 25165315315, 654684687, 'M', 'claudio@hotmail.com', 2, 'ES', 'Claudio01', '123', 'PF', 1),
(7, 'Amanda Soarez', 25, 66845955479, 416545646, 'F', 'amanda_S@gmail.com', 3, 'MS', 'Amanda1', 'abc', 'CD', 1),
(11, 'Lavinia Barros Costa', 34, 54521543152, 534262345, 'F', 'lavinia@gmail.com', 0, 'TO', 'lavinia', '123', 'CD', 1),
(12, 'Gabrielly Castro Martins', 15, 53515665165, 654489198, 'F', 'gabrielly@gmail.com', 1, 'PR', 'gabrielly', '123', 'CD', 0),
(13, 'Tiago Cunha Barros', 51, 18564184184, 168418941, 'M', 'tiago@gmail.com', 3, 'PI', 'tiago', '111', 'CD', 1),
(14, 'Rafaela Fernandes Carvalho', 26, 21651691981, 165119848, 'F', 'rafaela@gmail.com', 2, 'MS', 'rafaela', '222', 'PF', 0),
(15, 'Eric Bormann', 15, 20165165196, 651681894, 'M', 'eric@hotmail.com', 3, 'SP', 'eric', '333', 'PF', 1),
(16, 'Decio Junior', 19, 16516518941, 185141848, 'M', 'desu@hotmail.com', 4, 'SP', 'Desu', '555', 'CD', 1),
(17, 'Gabriel Nunes Consul', 20, 21651684854, 168485168, 'M', 'gabriel@hotmail.com', 3, 'SC', 'Gabriel', '666', 'CC', 1),
(18, 'Pedro Henrique', 18, 25621651989, 891961929, 'M', 'pedro@hotmail.com', 0, 'MA', 'pedro', '888', 'CD', 0),
(19, 'Leonardo Correia Martins', 63, 45634563456, 42042450, 'M', 'leonardo@hotmail.com', 3, 'GO', 'Leo', '999', 'PF', 1),
(20, 'Emily Costa Oliveira', 20, 15616519191, 984198419, 'F', 'emily@gmail.com', 4, 'MG', 'Emiily', '1233', 'PF', 1),
(21, 'Murilo Cavalcanti Cardoso', 25, 72785278278, 638963468, '', 'murilo@hotmail.com', 1, 'GO', 'murilo', '123456', 'CC', 0),
(23, 'José Rodrigues Ferreira', 15, 15616516516, 651651651, 'M', 'jose@hotmail.com', 3, 'PB', 'jose', '4445', 'PF', 1),
(24, 'Sophia Souza Barbosa', 62, 15165164141, 541415641, 'F', 'sophia@gmail.com', 2, 'MT', 'Sophia', '556', 'CD', 0),
(25, 'Julian Silva Pinto', 18, 12316516811, 165181816, 'F', 'julian@gmail.com', 3, 'SP', 'Julian', '5556', 'CC', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadcli`
--
ALTER TABLE `cadcli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadcli`
--
ALTER TABLE `cadcli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
