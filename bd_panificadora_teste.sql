-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2020 às 02:23
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `panificadora_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `Usuario` varchar(15) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `celular` varchar(25) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `numero` int(4) NOT NULL,
  `bairro` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Usuario`, `Nome`, `email`, `cpf`, `celular`, `cep`, `endereco`, `numero`, `bairro`) VALUES
('Gabriel', 'Gabriel Caitano', 'gabrielcaitano157@gmail.com', '127.015.886-42', '(34) 9987-80951', '38.401-408', 'Rua Zenith', 69, 'Jardim Brasília');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `Usuario` varchar(15) NOT NULL,
  `senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`Usuario`, `senha`) VALUES
('Gabriel', '647431b5ca55b04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod_prod` int(2) NOT NULL,
  `nome_prod` varchar(20) NOT NULL,
  `valor_prod` float NOT NULL,
  `quant_estoque` int(11) DEFAULT NULL,
  `descricao` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod_prod`, `nome_prod`, `valor_prod`, `quant_estoque`, `descricao`) VALUES
(1, 'Pão francês', 0.65, 900, 'Ingredientes:     <br>\r\nFarinha           <br>\r\nFermento          <br>\r\nSal               <br>\r\nH2O');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Usuario`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Usuario`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod_prod`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`Usuario`) REFERENCES `cliente` (`Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
