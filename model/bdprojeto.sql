-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Abr-2021 às 16:49
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdprojeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nascimento` date NOT NULL,
  `naturalidade` varchar(20) NOT NULL,
  `provincia` varchar(20) NOT NULL,
  `pai` varchar(50) NOT NULL,
  `mae` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `bi` varchar(14) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  `classe` varchar(20) NOT NULL,
  `repete` varchar(20) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `inscricao` varchar(20) NOT NULL,
  `proveniencia` varchar(50) NOT NULL,
  `municipio` varchar(20) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `casa` varchar(10) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `outrotelf` varchar(14) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`id`, `nome`, `nascimento`, `naturalidade`, `provincia`, `pai`, `mae`, `sexo`, `bi`, `nivel`, `classe`, `repete`, `curso`, `inscricao`, `proveniencia`, `municipio`, `bairro`, `rua`, `casa`, `telefone`, `outrotelf`, `facebook`, `whatsapp`, `email`) VALUES
(1, 'Tomas KP Panzo', '2006-06-06', 'Luanda', 'Luanda', ' Tom K', 'Toma K', 'Masculino', '143625987BA763', 'IIº Cíclo Ensino Geral e Cursos T.Profissional', '', '', '', 'Matrícula', 'INE', 'Lobito', 'Lixeira', '2', '111', '917635429', '924537652', 'tomas', '923768768', 'tomask@gmail.com'),
(15, 'Aldmiro  De Jesus Passagem', '1992-11-12', 'Benguela', 'Benguela', 'Agostinho Passagem', 'Benita Sara', 'Masculino', '0000BA044444', 'IIº Cíclo Ensino Geral e Cursos T.Profissional', 'Décima Terceira', 'Primeira vez', 'Informática de Gestão', 'Confirmação', 'Tomás Ferreira', 'Benguela', 'Calomanga', 'Estados Unidos', '1886', '998670288', '945131691', 'aldmiropassagemoficial', '998670288', 'aldprogramer@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(10) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `password`) VALUES
(1, 'tomas', 123),
(2, 'admin', 123);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `candidato`
--
ALTER TABLE `candidato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
