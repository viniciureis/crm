-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 21/10/2023 às 09:37
-- Versão do servidor: 5.7.23-23
-- Versão do PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eduartic_crm`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `responsavel` varchar(60) NOT NULL,
  `valor_desconto` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `atendente` varchar(80) NOT NULL,
  `tratativa` varchar(60) NOT NULL,
  `data_cadastro` date NOT NULL,
  `forma_ingresso` varchar(60) NOT NULL,
  `curso` varchar(60) NOT NULL,
  `local_acao` varchar(60) NOT NULL,
  `inscrito` varchar(5) NOT NULL,
  `matriculado` varchar(5) NOT NULL,
  `observacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `leads`
--

INSERT INTO `leads` (`id`, `nome`, `telefone`, `atendente`, `tratativa`, `data_cadastro`, `forma_ingresso`, `curso`, `local_acao`, `inscrito`, `matriculado`, `observacao`) VALUES
(1, 'vinicius', '83996275552', '', 'desistente', '2001-02-20', 'vestibular', 'acumputura', 'whats', 'sim', 'sim', ''),
(2, 'andre', '83996275552', '', 'conversa', '2023-09-12', 'vestibular', 'medicina', 'whats', 'sim', 'sim', ''),
(3, 'carlitos', '83996275552', '', 'desistente', '2023-09-24', 'vestibular', 'medicina', 'whats', 'sim', 'sim', ''),
(4, 'panda', '000000000000000000000000000000', '', 'tratativa', '2023-10-17', 'vestibular', 'adm', 'festverão', 'sim', 'sim', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tratativas`
--

CREATE TABLE `tratativas` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tratativas`
--

INSERT INTO `tratativas` (`id`, `nome`, `descricao`) VALUES
(1, 'Em conversa', 'O usuário está conversando com um potencial aluno'),
(2, 'Matriculado', 'Bla bla bla'),
(3, 'Desistente', 'Bla bla bla'),
(4, 'Não Atendeu', 'bla bla bla'),
(5, 'Número Incorreto', 'bla bla bla'),
(6, 'Caixa Postal', 'bla bla bla');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `perfil` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `perfil`, `email`, `senha`) VALUES
(2, 'Vinícius', 1, 'vinicius@teste.com', '698dc19d489c4e4db73e28a713eab07b'),
(6, 'eduardo', 1, 'eduardo@teste.com', '698dc19d489c4e4db73e28a713eab07b'),
(7, 'vinicius reis', 1, 's.vinicius.costa19@gmail.com', 'd57f0ef6d3611e4330d881d279de4574'),
(8, 'vinicius reis', 2, 's.vinicius.costa19@gmail.com', '698dc19d489c4e4db73e28a713eab07b'),
(9, 'carlos', 2, 'contatosdosreis@gmail.com', '698dc19d489c4e4db73e28a713eab07b'),
(10, 'carlistos', 2, 'alefeplribeiro@hotmail.com', '698dc19d489c4e4db73e28a713eab07b'),
(11, 'fudeu', 2, 'fudeu.@gmail.com', '8f23bbea5463ca32fee7632786c4e413');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tratativas`
--
ALTER TABLE `tratativas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tratativas`
--
ALTER TABLE `tratativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
