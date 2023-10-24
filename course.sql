-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Out-2023 às 12:30
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `course`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('compadmin', 'qwerty');

-- --------------------------------------------------------

--
-- Estrutura da tabela `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `imglink` varchar(100) NOT NULL,
  `About` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `course`
--

INSERT INTO `course` (`cid`, `Category`, `imglink`, `About`) VALUES
(1, 'Farinha de Trigo', 'FARINHA-DE-TRIGO-TIO-LUCAS-1KG.png', 'Com a agora o preço da Nossa farinha de trigo de 1kg, é a base perfeita para uma variedade de receitas. Com uma textura fina e uma qualidade superior, esta farinha é a escolha ideal para suas aventuras culinárias.'),
(2, 'Oléo de Palma', 'oleo de palma.jfif', 'O Oléo de Palma Nacional é um dos produtos muito requisitado e competitivo no nosso mercado. Saiba agora a variedade de preços em diferentes lojas da nossa região.'),
(3, 'Oléo de Soja', 'oleo.jfif', 'O nosso óleo de soja de 1 litro é um ingrediente indispensável na sua cozinha. Extraído das sementes de soja de alta qualidade, este óleo é conhecido por sua versatilidade e valor nutricional. Com sua capacidade de suportar altas temperaturas, o óleo de soja é perfeito para frituras e refogados, deixando os alimentos dourados e saborosos. '),
(4, 'Massa Alimentar', 'Massa.jfif', 'Compare agora o preço da nossa massa alimentar de 500g, é a escolha definitiva para criar pratos deliciosos e reconfortantes. Feita com ingredientes de alta qualidade, essa massa é o ponto de partida para inúmeras receitas saborosas. Com uma textura perfeita e durabilidade excepcional, esta massa é ideal para pratos de massa simples ou elaborados.'),
(6, 'Leite em Pó', 'leite nido.jfif', 'Nosso leite em pó de 500g é a solução versátil e conveniente para suas necessidades de laticínios. Este pacote compacto contém o equilíbrio perfeito entre sabor e nutrição. O leite em pó é um aliado confiável na cozinha, proporcionando a cremosidade do leite fresco sempre que você precisar. Compare agora.'),
(7, 'Coxa de Frango', 'coxa de frango.jfif', 'Nossas coxas de frango são a escolha perfeita para uma refeição deliciosa e suculenta. Cada peça é cuidadosamente selecionada para garantir a qualidade e sabor excepcionais. As coxas de frango são conhecidas por sua textura macia e sabor inigualável, tornando-as ideais para grelhar, assar ou cozinhar de inúmeras maneiras. Comapre agora '),
(8, 'Arroz', 'ARROZ-TIO-LUCAS-10KG.png', 'Arroz tio Lucas 1KG'),
(9, 'Sal', 'sal.jfif', 'O nosso sal de 1kg é um ingrediente essencial que não pode faltar na sua cozinha. Este pacote de sal de alta qualidade é a escolha perfeita para realçar o sabor dos seus pratos favoritos. Saiba agora os diferentes preços em lojas.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `course details`
--

CREATE TABLE `course details` (
  `subid` int(11) NOT NULL,
  `tutorial` int(11) NOT NULL,
  `website` varchar(400) NOT NULL,
  `price` int(10) NOT NULL,
  `time duration` time NOT NULL,
  `t_quali` varchar(50) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `course details`
--

INSERT INTO `course details` (`subid`, `tutorial`, `website`, `price`, `time duration`, `t_quali`, `cid`) VALUES
(17, 9, 'https://www.messenger.com/t/100006868062323?locale=pt_BR', 1000, '00:00:10', 'Fora de promoção', 8),
(21, 9, 'https://www.shoprite.co.ao/', 1000, '24:01:34', 'Produto em promoção', 8),
(22, 10, 'https://www.instagram.com/hipermercadokero/', 950, '24:12:03', 'Preço Recente', 8),
(23, 7, 'https://www.facebook.com/kerohipermercado/?locale=pt_BR', 1200, '23:15:00', 'Corra, existe pouco em stoke', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tutorial`
--

CREATE TABLE `tutorial` (
  `tid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tutorial`
--

INSERT INTO `tutorial` (`tid`, `name`, `image`) VALUES
(7, 'Preço do Mutundo', '269697511_2741075572705312_6519562418874935639_n.jpg'),
(8, 'Tio Timoteo', 'image_6487327.JPG'),
(9, 'Shoprite', 'shoprite.jfif'),
(10, 'Kero', 'kero.png'),
(11, 'Ango-Marte', 'angomarte.png'),
(12, 'Nosso Super', 'nosso super.jfif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `duration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `email`, `mobile`, `duration`) VALUES
('pafila', '827ccb0eea8a706c4c34a16891f84e7b', 'Luis Pafila', 'pafila@gmail.com', '947408021', '2023-10-19'),
('qwerty', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Ram Das Gupta', 'ram@gmail.com', '9078671234', '2019-11-04');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Índices para tabela `course details`
--
ALTER TABLE `course details`
  ADD PRIMARY KEY (`subid`),
  ADD KEY `Course_id` (`cid`);

--
-- Índices para tabela `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`tid`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `course details`
--
ALTER TABLE `course details`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `course details`
--
ALTER TABLE `course details`
  ADD CONSTRAINT `course details_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
