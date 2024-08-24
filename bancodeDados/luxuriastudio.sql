-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/08/2024 às 17:18
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
-- Banco de dados: `luxuriastudio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbladmin`
--

CREATE TABLE `tbladmin` (
  `idAdmin` int(11) NOT NULL,
  `emailAdmi` varchar(100) NOT NULL,
  `senhaAdmin` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbladmin`
--

INSERT INTO `tbladmin` (`idAdmin`, `emailAdmi`, `senhaAdmin`) VALUES
(1, 'juliana01@email.com', 'lux12345xuri');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcliente`
--

CREATE TABLE `tblcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeDoCliente` varchar(50) NOT NULL,
  `dataDeNasc` date NOT NULL,
  `cpfCliente` varchar(11) NOT NULL,
  `emailCliente` varchar(100) NOT NULL,
  `telefoneWhats` varchar(14) NOT NULL,
  `sexoCliente` varchar(10) NOT NULL,
  `statusCliente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblcliente`
--

INSERT INTO `tblcliente` (`idCliente`, `nomeDoCliente`, `dataDeNasc`, `cpfCliente`, `emailCliente`, `telefoneWhats`, `sexoCliente`, `statusCliente`) VALUES
(1, 'MARIA SANTOS', '1999-02-10', '32145698732', 'marias@email.com', '(11)963214587', 'FEMININO', 'ATIVO'),
(2, 'MARIA SILVA', '1998-02-10', '65445698732', 'mariassilvas@email.com', '(11)963219632', 'FEMININO', 'ATIVO'),
(3, 'JOÃO SILVA', '1999-02-25', '98745612301', 'joao01@email.com', '(11)987456321', 'MASCULINO', 'ATIVO'),
(4, 'VALQUIRIA SILVA', '1998-02-23', '32165478912', 'valquiria@email.com', '(11)952416387', 'FEMININO', 'ATIVO'),
(5, 'JULIA OLIVEIRA', '1999-02-01', '12345678965', 'juliana01@email.com', '11963852741', 'FEMININO', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblprocedimento`
--

CREATE TABLE `tblprocedimento` (
  `idProcedimento` int(11) NOT NULL,
  `procedimento` varchar(100) NOT NULL,
  `dataProcedimento` date NOT NULL,
  `comecoProcedimento` time NOT NULL,
  `fimProcedimento` time NOT NULL,
  `valorProcedimento` double(10,2) DEFAULT NULL,
  `formaPagamento` varchar(20) NOT NULL,
  `statusPagamento` varchar(10) DEFAULT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblprocedimento`
--

INSERT INTO `tblprocedimento` (`idProcedimento`, `procedimento`, `dataProcedimento`, `comecoProcedimento`, `fimProcedimento`, `valorProcedimento`, `formaPagamento`, `statusPagamento`, `idCliente`) VALUES
(1, 'LIMPEZA DE PELE ROSTO', '2024-09-12', '12:30:00', '13:30:00', 250.00, 'Pagamento', 'REALIZADO', 2),
(3, '\".$this->procedimento.\"', '0000-00-00', '00:00:00', '00:00:00', 0.00, '\".$this->formaPagame', '\".$this->s', 0),
(4, 'Manicure banho de gel  ', '2024-09-01', '13:00:00', '14:00:00', 150.00, 'Cartão de Credito', 'PENDENTE', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices de tabela `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices de tabela `tblprocedimento`
--
ALTER TABLE `tblprocedimento`
  ADD PRIMARY KEY (`idProcedimento`),
  ADD KEY `idCliente` (`idCliente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tblcliente`
--
ALTER TABLE `tblcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tblprocedimento`
--
ALTER TABLE `tblprocedimento`
  MODIFY `idProcedimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tblprocedimento`
--
ALTER TABLE `tblprocedimento`
  ADD CONSTRAINT `tblprocedimento_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `tblcliente` (`idCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
