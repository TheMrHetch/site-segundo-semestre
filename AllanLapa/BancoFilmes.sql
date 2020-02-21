-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Nov-2017 às 21:18
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE IF NOT EXISTS`filme` (
  `id` int(11) NOT NULL,
  `titulo` varchar(130) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `produtora` varchar(60) NOT NULL,
  `data_lancamento` date NOT NULL,
  `nacionalidade` varchar(50) NOT NULL,
  `sinopse` varchar(300) NOT NULL,
  `cartaz` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`id`, `titulo`, `genero`, `produtora`, `data_lancamento`, `nacionalidade`, `sinopse`, `cartaz`) VALUES
(1, 'Gosto de Discute', 'ComÃ©dia dramÃ¡tica', 'AndrÃ© Pellenz', '0000-00-00', 'Brasil', 'Augusto (CÃ¡ssio Gabus Mendes) Ã© o chef de um restaurante requintado, estabelecido hÃ¡ anos, que estÃ¡ em baixa devido ao sucesso de um ex-pupilo, Patrick (Gabriel Godoy), que trabalha em um food truck bem na praÃ§a em frente ao estabelecimento. Devido Ã  situaÃ§Ã£o, o banco que tambÃ©m Ã© sÃ³cio d', ''),
(2, 'THOR: RAGNAROK Se', 'aÃ§Ã£o', 'Taika Waititi', '2017-08-26', 'Eua', 'Thor (Chris Hemsworth) estÃ¡ preso do outro lado do universo. Ele precisa correr contra o tempo para voltar a Asgard e parar Ragnarok, a destruiÃ§Ã£o de seu mundo, que estÃ¡ nas mÃ£os da poderosa e implacÃ¡vel vilÃ£ Hela (Cate Blanchett).', 'img2.jpg'),
(3, 'BIG PAI, BIG FILHO', 'AnimaÃ§Ã£o', 'Ben Stassen, JÃ©rÃ©mie Degruson', '2017-11-02', 'Belgica', 'Adam Ã© um adolescente que sai em uma missÃ£o Ã©pica e ousada para tentar descobrir um mistÃ©rio por trÃ¡s de seu pai, que estÃ¡ sumido hÃ¡ muito tempo. AtÃ© que entÃ£o ele descobre que seu pai nÃ£o Ã© ninguÃ©m mais, ninguÃ©m menos do que o lendÃ¡rio PÃ© Grande. Ele tem se escondido na floresta hÃ¡ ', 'img3.jpg'),
(4, 'TEMPESTADE: PLANETA EM FÃšRIA', 'FicÃ§Ã£o cientifica', ' Gerard Butler, Jim Sturgess, Abbie Cornish', '0007-09-19', 'EUA', 'A ocorrÃªncia cada vez mais frequente de eventos climÃ¡ticos capazes de ameaÃ§ar a existÃªncia da humanidade faz com que seja criada uma extensa rede de satÃ©lites, ao redor de todo o planeta, de forma a controlar o prÃ³prio clima. Apelidado de \"Dutch Boy\", este sistema construÃ­do a partir da coope', 'img4.jpg'),
(5, 'DEPOIS DAQUELA MONTANHA', 'drama', ' Hany Abu-Assad', '2017-09-20', 'EUA', 'Alex (Kate Winslet), uma jornalista que estÃ¡ indo preparar seu casamento, e Ben (Idris Elba), um doutor voltando de uma conferÃªncia mÃ©dica, iriam pegar o mesmo aviÃ£o, mas o voo Ã© cancelado e os dois estranhos decidem fretar um jatinho. Durante a viagem o piloto sofre um ataque cardÃ­aco e o avi', 'img5.jpg'),
(6, 'A NOIVA', 'Terror', 'Svyatoslav Podgayevskiy', '2017-12-02', 'Russia', 'Nastya (Victoria Agalakova) Ã© uma jovem mulher que viaja com seu futuro marido para a casa da famÃ­lia dele. Logo apÃ³s chegar, ela percebe que a visita pode ter sido um erro terrÃ­vel. Rodeada por pessoas estranhas, ela passa a ter visÃµes horrÃ­veis Ã  medida que a famÃ­lia do seu futuro esposo a', 'img6.jpg'),
(7, 'PICA-PAU: O FILME', 'animaÃ§Ã£o', 'Alex Zamm', '2917-10-05', 'Eua', 'O travesso Pica-Pau estÃ¡ metido em mais uma de suas insanas brigas por territÃ³rio. Os inimigos da vez sÃ£o o vigarista Lance Walters (Timothy Omundson) e sua namorada Vanessa (Thaila Ayala). Precisando de dinheiro, eles estÃ£o determinados a construir uma extravagante mansÃ£o na floresta e lucrar ', 'img7.jpg'),
(8, 'COMO SE TORNAR O PIOR ALUNO DA ESCOLA', 'Comedia', 'Fabricio Bittar', '2017-10-12', 'Brasil', 'Bernardo (Bruno Munhoz) e Pedro (Daniel Pimentel) sÃ£o estudantes e enfrentam as clÃ¡ssicas tarefas de cumprir as obrigaÃ§Ãµes escolares, tirar boas notas, ter bom comportamento e cumprir as regras da escola, cada vez mais elaboradas graÃ§as ao diretor Ademar (Carlos VillagrÃ¡n). Frustrados, Pedro a', 'img8.jpg'),
(9, 'HISTORIETAS ASSOMBRADAS - O FILME', 'AnimaÃ§Ã£o', 'Victor Hugo', '2017-11-02', 'Brasil', 'A partir de 9 anos\r\nAos 12 anos, Pepe mora com sua avÃ³, uma bruxa-empresÃ¡ria, e descobre que Ã© adotado. Ao saber que seus pais estÃ£o vivos, ele parte em uma aventura para encontrÃ¡-los. O menino atrai a atenÃ§Ã£o de Edmundo, um vilÃ£o biomecÃ¢nico que precisa da energia de crianÃ§as para se torn', 'img9.jpg'),
(10 'A TRAMA', 'Drama', 'Laurent Cantet', '2017-11-16', 'FranÃ§a', 'Ã‰ verÃ£o em La Ciotat, na FranÃ§a. Antoine (Matthieu Lucci) aceita participar de uma integradora oficina de escrita, onde alguns jovens deverÃ£o desenvolver um romance policial sob a tutoria de Olivia Dejazet (Marina FoÃ¯s), famosa romancista. Agressivo e provocador, ele apresenta um polÃªmico text', 'img10.jpg'),
(11, 'VICTORIA E ABDUL - O CONFIDENTE DA RAINHA', 'Biografia', 'Stephen Frears', '2017-11-16', 'EUA', '1887, cidade de Agra, na Ãndia. Dois jovens locais sÃ£o escolhidos para viajar atÃ© Londres de forma a presentear a rainha Victoria (Judi Dench) com uma valiosa moeda local. Ao chegar, tanto Abdul (Ali Fazal) quanto Mohammed (Adeel Akhtar) estranham bastante os costumes da realeza britÃ¢nica, sempr', 'img11.jpg'),
(12, 'UMA RAZÃƒO PARA VIVER', 'Drama, Romance', 'Andy Serkis', '2017-11-16', 'EUA', 'No ano de 1958, Robin Cavendish (Andrew Garfield), carismÃ¡tico e aventureiro comerciante britÃ¢nico, sÃª ve de repente paralisado por poliomielite contraÃ­da em viagem de trabalho ao QuÃªnia. GrÃ¡vida do primeiro filho, sua esposa Diana Cavendish (Claire Foy) escuta dos mÃ©dicos que ele jamais sair', 'img12.jpg'),
(13, 'PAI EM DOSE DUPLA 2', 'ComÃ©dia', 'Sean Anders', '2017-11-23', 'EUA', 'ApÃ³s resolverem suas diferenÃ§as, Brad (Will Ferrell) e Dusty (Mark Wahlberg) precisam agora lidar com uma nova situaÃ§Ã£o complicada: a sÃºbita apariÃ§Ã£o de seus pais (John Lithgow e Mel Gibson), que possuem comportamentos bem diferentes.', 'img13.jpg'),
(14, 'AS AVENTURAS DO CAPITÃƒO CUECA - O FILME', 'AnimaÃ§Ã£o, ComÃ©dia', 'David Soren', '2017-10-12', 'EUA', 'Jorge e Haroldo sÃ£o amigos inseparÃ¡veis, tanto no colÃ©gio quanto na casa na Ã¡rvore que mantÃ©m juntos, onde se dedicam a escrever histÃ³rias em quadrinhos do CapitÃ£o Cueca, super-herÃ³i por eles inventado. Ambos adoram se divertir na base de pegadinhas, especialmente em relaÃ§Ã£o aos professore', 'img14.jpg'),
(15, 'POKÃ‰MON - O FILME: EU ESCOLHO VOCÃŠ!', 'AnimaÃ§Ã£o, FamÃ­lia', 'Kunihiko Yuyama', '2017-11-05', 'JapÃ£o', 'Ash Ketchum (Sarah Natochenny) acaba de completar 10 anos de idade. Isso significa que ele estÃ¡ pronto para se tornar um treinador de PokÃ©mon. Agora, ele espera receber seu primeiro PokÃ©mon, o Pikachu (Ikue Ã”tani), que tambÃ©m serÃ¡ seu melhor amigo. Juntos, eles embarcam em uma jornada repleta ', 'img15.jpg'),
(16, 'A MORTE TE DÃ PARABÃ‰NS', ' Terror, Suspense', 'Christopher Landon', '2017-10-12', 'EUA', 'Tree (Jessica Rothe) Ã© uma jovem estudante que trata mal os meninos, desdenha das amigas e nÃ£o parece estar muito disposta a atender as ligaÃ§Ãµes do pai no dia do aniversÃ¡rio dela. No fim do mesmo dia, no entanto, ela Ã© brutalmente assassinada por um mascarado. Acontece que ela \"sobrevive\", ou ', 'img16.jpg'),
(17, 'POLÃCIA FEDERAL - A LEI Ã‰ PARA TODOS', 'Drama', ' Marcelo Antunez', '2017-09-07', 'Brasil', '2013. Durante a realizaÃ§Ã£o da OperaÃ§Ã£o Bidone, a PolÃ­cia Federal apreende no interior um caminhÃ£o carregado de palmito, que trazia escondido 697 kg de cocaÃ­na. A investigaÃ§Ã£o recai na equipe montada por Ivan Romano (Antonio Calloni), sedida em Curitiba e composta tambÃ©m por Beatriz (FlÃ¡vi', 'img17.jpg'),
(18, 'BINGO - O REI DAS MANHÃƒS', ' Drama, Biografia', 'Daniel Rezende', '2017-08-24', 'Brasil', 'Cinebiografia de Arlindo Barreto, um dos intÃ©rpretes do palhaÃ§o Bozo no programa matinal homÃ´nimo exibido pelo SBT durante a dÃ©cada de 1980. Barreto alcanÃ§ou a fama graÃ§as ao personagem, apesar de jamais ser reconhecido pelas pessoas por sempre estar fantasiado. Esta frustraÃ§Ã£o o levou a se ', 'img18.jpg'),
(19, 'DETETIVES DO PRÃ‰DIO AZUL (D.P.A.) - O FILME', ' FamÃ­lia', 'AndrÃ© Pellenz', '2017-07-29', 'Brasil', 'Os Detetives do PrÃ©dio Azul sÃ£o confrontados com o maior caso de suas vidas: salvar o prÃ³prio edifÃ­cio da destruiÃ§Ã£o. Pippo (Pedro Henrique Motta), Sol (LetÃ­cia Braga) e Bento (Anderson Lima) se infiltram na festa de Dona LeocÃ¡dia (Tamara Taxman), a terrÃ­vel sÃ­ndica que Ã©, literalmente, u', 'img19.jpg'),
(20, 'O ESTADO DAS COISAS', ' ComÃ©dia , Drama', 'Mike White', '2017-10-02', 'EUA', 'Brad (Ben Stiller) possui uma carreira lucrativa e uma vida familiar feliz, mas isso nÃ£o Ã© o bastante. Ele estÃ¡ obcecado em ser o mais bem-sucedido entre os seus ex-colegas de escola, mas, durante um reencontro com um velho amigo, ele Ã© forÃ§ado a ignorar seu sentimento de inferioridade e rever ', 'img20.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
