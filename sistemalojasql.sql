-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2019 às 09:53
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemalojasql`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `qtd` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id_estoque`, `nome`, `qtd`, `preco`, `descricao`) VALUES
(4, 'ADAPTADOR BLUETOOTH GRIFFIN GF-100A USB-P-PC ', 100, '10.00', NULL),
(5, 'ADAPTADOR CONVERSOR  HD CONVERTER SATA/IDE', 100, '28.00', NULL),
(6, 'CABO HDMI / HDMI  1MTS', 100, '11.00', NULL),
(7, 'COOLER P/NB SATELLITE A-CP124 USB  VERDE                                                       ', 100, '22.00', NULL),
(8, ' ESTABILIZADOR FGT- 1000KVA BIVOLT P/05 MAQUINA', 100, '225.00', NULL),
(9, 'FONTE ATX  850W CORSAIR CX850M 80 PLUS BRONZE MODULAR CP-9020099-NA', 100, '639.00', NULL),
(10, 'GABINETE  KIT  MTEK 252 4BAIAS PRETO ESPANHOL', 100, '157.00', NULL),
(11, ' HD EXT.  3TB SEAGATE BACKUP PLUS 3.5\" USB 3.0', 100, '402.00', NULL),
(12, 'HD NB SATA3 2.5\"  500GB SEAGATE 5400RPM 7MM', 100, '166.00', NULL),
(13, 'teste', 4, '20.25', 'CABO HDMI VGA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id_fornecedor` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cnpj` int(14) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id_fornecedor`, `nome`, `cnpj`, `endereco`, `telefone`) VALUES
(8, 'Alemanha Imports!', 2147483647, 'Alemanha 3154', 85858585),
(9, 'China Imports!', 2147483647, 'Rua Antonio Luis de Almeida Vale, BLOCO C AP 204', 85858596),
(10, 'Fornecedor diamante', 2147483647, 'Marcos freire 702', 32916591);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(20) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `valor` float NOT NULL,
  `marca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `valor`, `marca`) VALUES
(4, 'HD externo', 400, 'Lenovo'),
(5, 'HD interno', 350, 'HP'),
(6, 'medidor de tensão CA/CC', 150, 'Usis'),
(7, 'medidor de tensão CA/CC', 200, 'HP'),
(10, 'FONTE ATX  850W CORSAIR CX850M 80 PLUS BRONZE MODULAR CP-9020099-NA', 700, 'HP'),
(11, 'Pen Drive 32 GB', 35.99, 'SanDisk');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'raina@gmail.com', '123'),
(2, 'Cat@gmail.com', '123'),
(3, 'carolina', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
