-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 11/09/2016 às 07:14
-- Versão do servidor: 10.0.25-MariaDB-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.8-3+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `symfony`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `chamados`
--

CREATE TABLE `chamados` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `pedidos_id` int(11) DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `observacao` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `chamados`
--

INSERT INTO `chamados` (`id`, `cliente_id`, `pedidos_id`, `titulo`, `observacao`) VALUES
(1, 1, 4, 'teste', 'teste'),
(2, 2, 6, 'teste2', 'teste2'),
(3, 3, 6, 'teste4', 'teste4'),
(4, 4, 6, 'teste5', 'teste5'),
(5, 5, 5, 'teste6', 'teste6'),
(6, 6, 6, 'teste7', 'teste7'),
(7, 7, 5, 'teste8', 'teste8'),
(8, 8, 5, 'teste9', 'teste9'),
(9, 9, 5, 'teste10', 'teste10'),
(10, 10, 6, 'teste11', 'teste11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`) VALUES
(1, 'felipinho', 'felipeavel@gmail.com'),
(2, 'pedro', 'fellypeavelino@hotmail.com'),
(3, 'teste4', 'incubus@hotmail.com'),
(4, 'teste5', 'teste5@hotmail.com'),
(5, 'teste6', 'teste6@gmail.com'),
(6, 'teste7', 'teste7@gmail.com'),
(7, 'maria', 'felipeavel@hotmail.com'),
(8, 'avelino', 'teste9@gmail.com'),
(9, 'teste10', 'teste10@gmail.com'),
(10, 'teste11', 'teste11@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `numero`, `descricao`) VALUES
(4, 1, 'pedido 1'),
(5, 2, 'pedido 2'),
(6, 3, 'pedido 3');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C638B1C4DE734E51` (`cliente_id`),
  ADD KEY `IDX_C638B1C4213530F2` (`pedidos_id`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F41C9B25E7927C74` (`email`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_6716CCAAF55AE19E` (`numero`),
  ADD UNIQUE KEY `UNIQ_6716CCAA22B85EB` (`descricao`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `chamados`
--
ALTER TABLE `chamados`
  ADD CONSTRAINT `FK_C638B1C4213530F2` FOREIGN KEY (`pedidos_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `FK_C638B1C4DE734E51` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
