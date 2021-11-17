-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2021 às 21:45
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `respostasformulario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade05`
--

CREATE TABLE `atividade05` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `data_nascimento` date NOT NULL,
  `estado` varchar(20) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `pagamento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atividade05`
--

INSERT INTO `atividade05` (`id`, `nome`, `email`, `data_nascimento`, `estado`, `endereco`, `sexo`, `pagamento`) VALUES
(1, 'Joana', 'Joana@gmail.com', '1999-01-01', 'Paraná', 'Rua Senador Felipe Schmidt, 15', 'Feminino', 'Visa'),
(4, 'Fulano', 'Fulano@gmail.com', '1994-06-12', 'Rio de Janeiro', 'Rua Avenida Rolf Wiest 333', 'Masculino', 'Elo'),
(5, 'Ciclano', 'ciclano@gmail.com', '1985-06-26', 'Rio de Janeiro', 'Rua Flamengo, 86', 'Outro', 'Mastercard');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atividade05`
--
ALTER TABLE `atividade05`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividade05`
--
ALTER TABLE `atividade05`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
