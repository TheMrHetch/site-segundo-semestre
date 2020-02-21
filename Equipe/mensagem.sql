-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Nov-2017 às 20:58
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faleconosco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mensagem` text,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`nome`, `email`, `mensagem`, `id`) VALUES
('Claudio', 'claudio@hotmail.com', 'Gostei muito do site. ', 3),
('JosÃ©', 'jose@hotmail.com', 'Tambem nao consigo acessar o site', 2),
('Lavinia Barros Costa', 'lavinia@gmail.com', 'Adorei os filmes. Ã“tima seleÃ§Ã£o', 4),
('Emily Costa Oliveira', 'emily@gmail.com', 'Obrigado pelo filme. Ingressos super acessÃ­veis.', 5),
('Eric Bormann', 'eric@hotmail.com', 'Ã“tima combinaÃ§Ã£o nos combos. Adorei a rede de cinema.', 6),
('Pedro Henrique', 'pedro@hotmail.com', 'Me diverti muito indo ao cinema com meus amigos. Obrigado pela diversÃ£o xqdl', 7),
('Amanda Soarez', 'amanda_S@gmail.com', 'Adorei os filmes. Continuem com o bom trabalho.', 8),
('Arthur Rocha Rodrigues', 'artur_rocha@gmail.com', 'Adorei o site. Ã“timo design e Ã³timas indicaÃ§Ãµes de filmes.', 9),
('Adalberto silvinho da silva', 'silvinho@dasilva.com', 'Grande filme, Ã³tima diversÃ£o', 10),
('Samuel Araujo Santos', 'samuel@outlook.com', 'Com certeza voltarei para assistir outros filmes, me diverti muito assistindo Thor.', 11),
('Sophia Souza Barbosa', 'sophia@gmail.com', 'Quero meu dinheiro de volta. O filme foi uma porcaria. ', 12),
('Decio Junior', 'desu@hotmail.com', 'Adorei o filme, mas o combo nÃ£o veio corretamente conforme o pedido. Arrumem isso por favor.', 13),
('Gabriel Nunes Consul', 'gabriel@hotmail.com', 'A sala 1 estava com muito barulho durante o filme, por favor, vigiem mais vezes as salas.', 14),
('Gabrielly Castro Martins', 'gabrielly@gmail.com', 'Adorei o cinema e jÃ¡ me cadastrei para o sistema VIP. Quero tentar concorrer aos prÃªmios.', 15),
('Leonardo Correia Martins', 'leonardo@hotmail.com', 'Estou adorando os prÃªmios que os integrantes VIPs ganham. Consegui itens exclusivos do filme que assisti. Obrigado.', 16),
('Murilo Cavalcanti Cardoso', 'murilo@hotmail.com', 'Gostaria de poder me cadastrar no sistema VIP. Como faÃ§o para me cadastrar?', 17),
('Lucas Alves ', 'lucas@hotmail.com', 'Lindo design da sala do cinema. Ã“timo som e Ã³tima qualidade de filme.', 18),
('Antonio', 'antonio@hotmail.com', 'Meu amigo, adorei o filme', 19),
('Francisco', 'francisco@bol.com.br', 'Adorei o filme, vou levar minhas bisnetas para assistir filmes bons novamente.', 20),
('MÃ´nica', 'monica@mauriciodesouza.com', 'Odiei a rede de cinema, nÃ£o consegui acompanhar a legenda e meu lugar estava sujo.', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
