-- phpMyAdmin SQL Dump
-- version 5.2.2deb1+deb13u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 18/05/2026 às 18:34
-- Versão do servidor: 11.8.6-MariaDB-0+deb13u1 from Debian
-- Versão do PHP: 8.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rge`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Pessoa_Chefia`
--

DROP TABLE IF EXISTS `Pessoa_Chefia`;
CREATE TABLE `Pessoa_Chefia` (
  `Cod` int(10) UNSIGNED NOT NULL,
  `Cod_Pessoa` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `Cod_Pessoa_Vice` int(10) UNSIGNED DEFAULT NULL,
  `Dta_Inicio` date NOT NULL DEFAULT '0000-00-00',
  `Dta_Fim` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- RELACIONAMENTOS PARA TABELAS `Pessoa_Chefia`:
--

--
-- Despejando dados para a tabela `Pessoa_Chefia`
--

INSERT DELAYED IGNORE INTO `Pessoa_Chefia` (`Cod`, `Cod_Pessoa`, `Cod_Pessoa_Vice`, `Dta_Inicio`, `Dta_Fim`) VALUES
(1, 751, NULL, '1969-01-01', '1970-01-01'),
(2, 177, 751, '1970-01-01', '1974-01-01'),
(3, 177, 745, '1974-01-01', '1975-01-01'),
(4, 160, 751, '1975-01-01', '1978-01-01'),
(5, 159, 160, '1979-01-01', '1979-01-01'),
(6, 177, 160, '1979-01-01', '1981-01-01'),
(7, 155, 160, '1981-01-01', '1984-01-01'),
(8, 160, 28, '1984-01-01', '1987-01-01'),
(9, 155, 28, '1987-01-01', '1991-01-01'),
(10, 28, 63, '1991-01-01', '1995-01-01'),
(11, 155, 28, '1995-01-01', '1997-01-01'),
(12, 63, 29, '1997-01-01', '2001-01-01'),
(13, 29, 19, '2001-01-01', '2003-05-01'),
(14, 28, 63, '2005-05-01', '2006-10-01'),
(15, 29, 63, '2003-05-01', '2005-05-01'),
(16, 29, 63, '2006-10-01', '2007-05-20'),
(17, 29, 11, '2007-05-21', '2008-10-09'),
(18, 11, 21, '2008-10-10', '2012-10-24'),
(19, 21, 25, '2012-10-25', '2016-10-25'),
(20, 11, 21, '2016-10-26', '2020-10-25'),
(21, 16, 29, '2020-10-25', '2024-10-25'),
(22, 21, 16, '2024-10-25', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Pessoa_Chefia`
--
ALTER TABLE `Pessoa_Chefia`
  ADD PRIMARY KEY (`Cod`),
  ADD KEY `Pessoa_Chefia_FKIndex1` (`Cod_Pessoa`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Pessoa_Chefia`
--
ALTER TABLE `Pessoa_Chefia`
  MODIFY `Cod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

