-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 05/12/2023 às 16:06
-- Versão do servidor: 5.7.39
-- Versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `curriculo`
--
CREATE DATABASE IF NOT EXISTS `curriculo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `curriculo`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `idcurso` int(11) NOT NULL,
  `nome_curso` varchar(50) NOT NULL,
  `instituicao` varchar(50) NOT NULL,
  `ano_curso` year(4) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `cursos`
--

INSERT INTO `cursos` (`idcurso`, `nome_curso`, `instituicao`, `ano_curso`, `idusuario`) VALUES
(3, 'Desenvolvimento de sistemas', 'Etec', 2019, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `formacoes`
--

CREATE TABLE `formacoes` (
  `idformacao` int(11) NOT NULL,
  `nivel` varchar(25) DEFAULT NULL,
  `nome_curso` varchar(50) DEFAULT NULL,
  `instituicao` varchar(50) DEFAULT NULL,
  `situacao` varchar(10) DEFAULT NULL,
  `ano_inicio` year(4) DEFAULT NULL,
  `ano_termino` year(4) DEFAULT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `formacoes`
--

INSERT INTO `formacoes` (`idformacao`, `nivel`, `nome_curso`, `instituicao`, `situacao`, `ano_inicio`, `ano_termino`, `idusuario`) VALUES
(4, 'Pós-Graduação', 'Analise e desenvolvimento de sistemas', 'Fatec', 'Cursando', 2022, 2024, 2),
(5, 'Ensino Médio', 'ADS', 'Fatec', 'Cursando', 2021, 2024, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `nacionalidade` varchar(23) DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL,
  `idade` int(2) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT 'foto-perfil.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nome`, `nacionalidade`, `estado_civil`, `idade`, `endereco`, `celular`, `email`, `senha`, `foto`) VALUES
(1, 'viviane', 'Brasileiro(a)', 'Casado', 20, 'luiz medeiros', '23434455', 'viviane@gmail.com', 'dc19bc13d32885ec5a95f8a1ecbad114', '655d388387218.jpeg'),
(2, 'viviane', 'Brasileiro(a)', 'Solteiro', 20, 'medeiros ', '4556665', 'viviane@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '655d4d06a85b0.jpeg'),
(3, 'viviane', 'Brasileiro(a)', 'Solteiro', 20, 'sddd', '123232323', 'viviane@gmai.com', 'e10adc3949ba59abbe56e057f20f883e', '655e0c3de4f55.jpeg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idcurso`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Índices de tabela `formacoes`
--
ALTER TABLE `formacoes`
  ADD PRIMARY KEY (`idformacao`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `formacoes`
--
ALTER TABLE `formacoes`
  MODIFY `idformacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `formacoes`
--
ALTER TABLE `formacoes`
  ADD CONSTRAINT `formacoes_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
