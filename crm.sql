-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 04-Maio-2023 às 21:44
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

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
-- Estrutura da tabela `ocorrencias`
--

CREATE TABLE `ocorrencias` (
  `id` int(11) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `atendente` varchar(60) NOT NULL,
  `tratativa` varchar(75) NOT NULL,
  `data_cadastro` date NOT NULL,
  `forma_ingresso` varchar(75) NOT NULL,
  `curso` varchar(75) NOT NULL,
  `local_acao` varchar(75) NOT NULL,
  `inscrito` tinyint(1) NOT NULL,
  `matriculado` tinyint(1) NOT NULL,
  `observacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `tipo` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `tipo`, `email`, `senha`) VALUES
(1, 'Eduardo', 1, 'eduardo@teste.com', '698dc19d489c4e4db73e28a713eab07b'),
(2, 'Vinícius', 1, 'vinicius@teste.com', '698dc19d489c4e4db73e28a713eab07b'),
(3'Erica pacheco',1'reitoria.jpa@uninassau.edu.br','cc366154cbc326756303301e18ced815'),
(4'Socrates',1'coordenacaoacademica.jp@uninassau.edu.br','8a639738d35ef5eb27bc03b1d32e49f0')
(5, 'Mellissa Rodrigues', 1, 'mellissa.rodrigues@mauriciodenassau.edu.br', '8a639738d35ef5eb27bc03b1d32e49f0'),
(6, 'Eduardo', 1, 'eduardo@teste.com', '698dc19d489c4e4db73e28a713eab07b'),
(7, 'Lucas Gomes', 1, 'lucas.goliveira@uninassau.edu.br', '10a9c136d796bab18d3e144092a4f20a'),
(8, 'Iana Rafaela', 1, 'edfisica.epi@mauriciodenassau.edu.br', '56c16ff6175a607e584b302d2e99284a'),
(9, 'Jonatha', 1, 'direito.epi@mauriciodenassau.edu.br', '31282e386056bd462433d128694c4098'),
(10, 'Karla', 1, 'enfermagem.epi@mauriciodenassau.edu.br', '33c3ca8e5c39307b55267c15b7bfc3a6'),
(11, 'Rayanne', 1, 'farmacia.epi@mauriciodenassau.edu.br', '0eec9bf0a391ea2f32f34909cba137da'),
(12, 'Leucia Ferreira', 1, 'leucia.ferreira@uninassau.edu.br', '788bf2f6c1bf0d2d2cab451cfa7ecf0e'),
(13, 'Felipe tome', 1, 'engcivil.epi@mauriciodenassau.edu.br', 'a05f43ec0207a949ceaa054023713ed6'),
(14, 'Maria Luiza  ', 1, 'nutricao.epi@mauriciodenassau.edu.br', '4fef009969464205c6326bd65d204a77'),
(15, 'Marina Moreno', 1, 'odontologia.epi@mauriciodenassau.edu.br', 'd02830793b69faad219ee5c7a04d2da7'),
(16, 'Ellen leite', 1, 'ellenleite011@gmail.com', '7c20293e9942866f28094a92335b0d82'),
(17, 'Ana Araujo', 1, 'ana.araujo@uninassau.edu.br', 'c94228f8699ed642d6987fddfd66b46b'),
(18, 'Leandro', 1, 'medicinaveterinaria.epi@uninassau.edu.br', '99aa2deb681633df45e87e42fa615bcc'),
(19, 'Andressa kelly', 1, 'Andressa.candido@uninassau.edu.br', '84c73e15721b3304cb51058c38192f06');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ocorrencias`
--
ALTER TABLE `ocorrencias`
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
-- AUTO_INCREMENT de tabela `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
