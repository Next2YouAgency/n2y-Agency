-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Abr-2016 às 15:54
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corretor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `idBanner` int(11) NOT NULL,
  `idEmpreendimento` int(11) NOT NULL,
  `tituloBanner` varchar(50) NOT NULL,
  `descBanner` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`idBanner`, `idEmpreendimento`, `tituloBanner`, `descBanner`) VALUES
(10, 15, 'Título do Banner Casa no Guarujá', 'Não perca a oportunidade...'),
(11, 16, 'Título do Banner Empreendimento 2', 'Texto do Banner Empreendimento 2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `busca`
--

CREATE TABLE `busca` (
  `idBusca` int(11) NOT NULL,
  `ipBusca` varchar(50) NOT NULL,
  `tipoBusca` varchar(30) NOT NULL,
  `cidadeBusca` varchar(30) NOT NULL,
  `valorMin` varchar(10) NOT NULL,
  `valorMax` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `busca`
--

INSERT INTO `busca` (`idBusca`, `ipBusca`, `tipoBusca`, `cidadeBusca`, `valorMin`, `valorMax`) VALUES
(56, '::1', 'Residencial', 'São Caetano', '', '5000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emailmkt`
--

CREATE TABLE `emailmkt` (
  `idMkt` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empreendimentos`
--

CREATE TABLE `empreendimentos` (
  `idEmpreendimento` int(11) NOT NULL,
  `nomeEmpreendimento` varchar(50) NOT NULL,
  `descricaoEmpreendimento` varchar(500) NOT NULL,
  `tipoEmpreendimento` varchar(15) NOT NULL,
  `cidadeEmpreendimento` varchar(15) NOT NULL,
  `valorEmpreendimento` int(10) NOT NULL,
  `data` varchar(20) NOT NULL,
  `visitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empreendimentos`
--

INSERT INTO `empreendimentos` (`idEmpreendimento`, `nomeEmpreendimento`, `descricaoEmpreendimento`, `tipoEmpreendimento`, `cidadeEmpreendimento`, `valorEmpreendimento`, `data`, `visitas`) VALUES
(15, 'Casa no Guarujá', '68.50 até 120.00 m² de área privativa\r\n2, 3, 4 Dor68.50 até 120.00 m² de área privativa\r\n2, 3, 4 Dor', 'Comercial', 'Santo André', 540000, '13/08/2014 15:24', 166),
(16, 'Empreendimento 2', 'fdsfafsadfs', 'Comercial', 'São Caetano', 5000, '13/08/2014 21:31', 6),
(17, 'Nome do Empreendimento', 'hgfhgfdhf', 'Comercial', 'São Caetano', 15000, '13/08/2014 21:31', 0),
(18, 'Nome do Empreendimento', 'gfdsgfsdgfsdgfsd', 'Residencial', 'São Caetano', 5000, '13/08/2014 21:49', 6),
(19, 'Nome do Empreendimento', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. ', 'Comercial', 'São Caetano', 100000, '20/08/2014 17:26', 283),
(20, 'Nome do Empreendimento', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento.', 'Comercial', 'São Caetano', 110000, '20/08/2014 17:26', 31);

-- --------------------------------------------------------

--
-- Estrutura da tabela `infocorretor`
--

CREATE TABLE `infocorretor` (
  `idCorretor` int(11) NOT NULL,
  `nomeCorretor` varchar(50) NOT NULL,
  `nomeFantasia` varchar(50) NOT NULL,
  `quemSomos` varchar(1000) NOT NULL,
  `missaoValores` varchar(1000) NOT NULL,
  `telCorretor` varchar(20) NOT NULL,
  `celCorretor` varchar(20) NOT NULL,
  `emailCorretor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `infocorretor`
--

INSERT INTO `infocorretor` (`idCorretor`, `nomeCorretor`, `nomeFantasia`, `quemSomos`, `missaoValores`, `telCorretor`, `celCorretor`, `emailCorretor`) VALUES
(0, 'Albert', 'Corretor Albert', 'quem somos corretor albert', 'Missão Valores Corretor Albert', '1122222222', '11996929650', 'contato@corretoralbert.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `personalizar`
--

CREATE TABLE `personalizar` (
  `idPersonalizar` int(11) NOT NULL,
  `estiloCss` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `personalizar`
--

INSERT INTO `personalizar` (`idPersonalizar`, `estiloCss`) VALUES
(1, 'style1lc');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarioadmin`
--

CREATE TABLE `usuarioadmin` (
  `idAdmin` int(11) NOT NULL,
  `nomeAdmin` varchar(50) NOT NULL,
  `loginAdmin` varchar(10) NOT NULL,
  `senhaAdmin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarioadmin`
--

INSERT INTO `usuarioadmin` (`idAdmin`, `nomeAdmin`, `loginAdmin`, `senhaAdmin`) VALUES
(1, 'Administrador do Sistema', 'admin', 'admin'),
(2, 'Eliezer', 'eliezerlee', 'ccbccb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`idBanner`);

--
-- Indexes for table `busca`
--
ALTER TABLE `busca`
  ADD PRIMARY KEY (`idBusca`);

--
-- Indexes for table `emailmkt`
--
ALTER TABLE `emailmkt`
  ADD PRIMARY KEY (`idMkt`);

--
-- Indexes for table `empreendimentos`
--
ALTER TABLE `empreendimentos`
  ADD PRIMARY KEY (`idEmpreendimento`);

--
-- Indexes for table `usuarioadmin`
--
ALTER TABLE `usuarioadmin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `idBanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `busca`
--
ALTER TABLE `busca`
  MODIFY `idBusca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `emailmkt`
--
ALTER TABLE `emailmkt`
  MODIFY `idMkt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `empreendimentos`
--
ALTER TABLE `empreendimentos`
  MODIFY `idEmpreendimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `usuarioadmin`
--
ALTER TABLE `usuarioadmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
