-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Out-2019 às 04:42
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tarefas`
--

CREATE TABLE `tbl_tarefas` (
  `id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `data_criacao` date NOT NULL,
  `data_final` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_tarefas`
--

INSERT INTO `tbl_tarefas` (`id`, `nome`, `descricao`, `data_criacao`, `data_final`, `status`) VALUES
(64, 'Tarefa 1', 'Tarefa1', '2019-09-30', '1997-06-02', 1),
(65, 'Terefa 2', 'Terefa 2', '2019-09-30', '1997-10-10', 1),
(71, 'Terefa Terminar TCC', 'Terminar TCC esse ano', '2019-09-30', '2019-11-20', 2),
(72, 'Apresentar TCC', 'Apresentar esse ano o TCC', '2019-09-30', '2019-12-12', 2),
(73, 'Tarefa Concluida', 'Ir no casamento de Felipe e  JÃ©ssica', '2019-09-30', '2019-10-05', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id` int(3) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nome` text NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id`, `cpf`, `email`, `nome`, `senha`) VALUES
(13, '123.302.234-34', 'sandrinho9797@outlook.com', 'Sandro Luiz', 'e6855b39d0873c0975120b4782e8f80b'),
(14, '123.302.234-34', 'emily12lauren@gmail.com', 'Emily Lauren', '40195892654c0d0a84161d83fc394056'),
(15, '123.302.234-34', 'sandro-deus@live.com', 'Emily Lauren', 'e6855b39d0873c0975120b4782e8f80b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_tarefas`
--
ALTER TABLE `tbl_tarefas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id`,`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_tarefas`
--
ALTER TABLE `tbl_tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
