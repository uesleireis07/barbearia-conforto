-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/12/2023 às 01:26
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `barbearia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `horario` varchar(100) NOT NULL,
  `dia` varchar(100) NOT NULL,
  `corte` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `agendamento`
--

INSERT INTO `agendamento` (`id`, `nome`, `horario`, `dia`, `corte`) VALUES
(1, 'Davi', '8:00', 'quarta feira', 'moicano'),
(2, 'renato', '9:00', 'quarta', 'degrade'),
(3, 'Ueslei Melo', '10:00', 'Quinta feira', 'Moicano'),
(4, 'Filipe ', '11:00', 'Quarta feira', 'Degradê');

-- --------------------------------------------------------

--
-- Estrutura para tabela `barbeiros`
--

CREATE TABLE `barbeiros` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `barbeiros`
--

INSERT INTO `barbeiros` (`id`, `nome`) VALUES
(1, 'Vittor Alves'),
(2, 'Marcus Vinicius'),
(3, 'Wesley'),
(4, 'Marcus Vinicius'),
(5, 'Wesley'),
(6, 'Nilson'),
(7, 'Thiago'),
(8, 'Luizin'),
(9, 'Gabriel Tavares'),
(10, 'Alex Cabral');

-- --------------------------------------------------------

--
-- Estrutura para tabela `bebidas`
--

CREATE TABLE `bebidas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `bebidas`
--

INSERT INTO `bebidas` (`id`, `nome`) VALUES
(2, 'Old Fashioned'),
(3, 'Gim Tônica'),
(4, 'Whisky Sour'),
(5, 'Caipirinha'),
(6, 'Mojito'),
(7, 'Martini'),
(8, 'Moscow Mule'),
(9, 'Cuba Libre'),
(10, 'Negroni'),
(11, 'Vinhotônica');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cortes`
--

CREATE TABLE `cortes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `cortes`
--

INSERT INTO `cortes` (`id`, `nome`) VALUES
(2, 'Moicano'),
(3, 'Degradê'),
(4, 'Social'),
(5, 'Low fade'),
(6, 'Platinado'),
(7, 'Pigmentação'),
(8, 'Luzes'),
(9, 'Barba'),
(10, 'Sobrancelha'),
(11, 'Lavagem');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `barbeiros`
--
ALTER TABLE `barbeiros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cortes`
--
ALTER TABLE `cortes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `barbeiros`
--
ALTER TABLE `barbeiros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `cortes`
--
ALTER TABLE `cortes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
