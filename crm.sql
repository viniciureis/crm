-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Set-2023 às 01:42
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
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
-- Estrutura da tabela `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `tratativa` varchar(60) NOT NULL,
  `data_cadastro` date NOT NULL,
  `forma_ingresso` varchar(60) NOT NULL,
  `curso` varchar(60) NOT NULL,
  `local_acao` varchar(60) NOT NULL,
  `inscrito` varchar(5) NOT NULL,
  `matriculado` varchar(5) NOT NULL,
  `observacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tratativas`
--

CREATE TABLE `tratativas` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tratativas`
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
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `perfil` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `perfil`, `email`, `senha`) VALUES
(1, 'Eduardo', 1, 'eduardo@teste.com', '698dc19d489c4e4db73e28a713eab07b'),
(2, 'Vinícius', 1, 'vinicius@teste.com', '698dc19d489c4e4db73e28a713eab07b'),
(4, 'Dodge', 1, 'dodge@teste.com', '698dc19d489c4e4db73e28a713eab07b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tratativas`
--
ALTER TABLE `tratativas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tratativas`
--
ALTER TABLE `tratativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
