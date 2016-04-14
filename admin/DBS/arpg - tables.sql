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
-- Database: `arpg`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bestiario`
--

CREATE TABLE `bestiario` (
  `id` int(11) NOT NULL,
  `nome` longtext NOT NULL,
  `descr` longtext NOT NULL,
  `img` varchar(50) NOT NULL DEFAULT 'default',
  `arma_usada` varchar(200) NOT NULL,
  `atk` varchar(6) NOT NULL,
  `def` varchar(6) NOT NULL,
  `res` varchar(6) NOT NULL,
  `dex` varchar(6) NOT NULL,
  `intl` varchar(6) NOT NULL,
  `spd` varchar(6) NOT NULL,
  `mp` varchar(6) NOT NULL,
  `hp` varchar(6) NOT NULL,
  `hab1` longtext NOT NULL,
  `hab2` longtext NOT NULL,
  `hab3` longtext NOT NULL,
  `hab4` longtext NOT NULL,
  `hab5` longtext NOT NULL,
  `hab6` longtext NOT NULL,
  `hab7` longtext NOT NULL,
  `hab8` longtext NOT NULL,
  `hab9` longtext NOT NULL,
  `hab10` longtext NOT NULL,
  `tec1` longtext NOT NULL,
  `tec2` longtext NOT NULL,
  `tec3` longtext NOT NULL,
  `tec4` longtext NOT NULL,
  `tec5` longtext NOT NULL,
  `tec6` longtext NOT NULL,
  `tec7` longtext NOT NULL,
  `tec8` longtext NOT NULL,
  `tec9` longtext NOT NULL,
  `tec10` longtext NOT NULL,
  `item` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bestiario`
--

INSERT INTO `bestiario` (`id`, `nome`, `descr`, `img`, `arma_usada`, `atk`, `def`, `res`, `dex`, `intl`, `spd`, `mp`, `hp`, `hab1`, `hab2`, `hab3`, `hab4`, `hab5`, `hab6`, `hab7`, `hab8`, `hab9`, `hab10`, `tec1`, `tec2`, `tec3`, `tec4`, `tec5`, `tec6`, `tec7`, `tec8`, `tec9`, `tec10`, `item`) VALUES
(1, 'GOBLIN COMBATENTE', 'Do tamanho de crianças, goblins são criaturas traiçoeiras que adoram roubo e crueldade. São extremamente perigosos quando em número. Podem viver praticamente em qualquer lugar, e têm o costume de roubar de suas vítimas tudo o que puderem carregar. Goblins Combatentes são os goblins guerreiros, normalmente utilizando punhais ou azagaias (que são lançadas à distância).', 'GOBLIN COMBATENTE', '', '37', '38', '35', '25', '35', '30', '', '', 'Posição Privilegiada (Passivo): Estando à 4 quadrados de distância do alvo, o tiro da lança é certeiro.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'KOBOLD GUERRILHEIRO', 'Kobolds são criaturas humanoides com aparências de jacarés. Veneram dragões, e costumam residir próximos ou dentro de onde essa criaturas se instalam. Se espreitam na escuridão, escondendo-se de inimigos mais fortes, e se amontoando para abater os fracos.\r\nSão covardes, e geralmente fogem ao mínimo sinal de derrota ou ferimento, à não ser que motivados por um líder.\r\nKobolds são famosos, também, por armar armadilhas e emboscadas, pegando seus inimigos desprevinidos. Se não conseguem pegá-los nas armadilhas, se esgueiram e atacam, juntos, subitamente o inimigo.\r\n', 'KOBOLD GUERRILHEIRO', '', '39', '40', '35', '25', '32', '29', '', '', 'Ataque em Turba (Passivo): Os Kobolds Guerrilheiros ganham um bônus de ataque e coragem ao atacar um alvo em grupo.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `data_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo_update` varchar(100) NOT NULL COMMENT 'Qual foi o tipo de update',
  `link` varchar(100) NOT NULL DEFAULT 'default',
  `novo` int(11) NOT NULL DEFAULT '1' COMMENT 'novo=1 antigo=0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `updates`
--

INSERT INTO `updates` (`id`, `data_update`, `tipo_update`, `link`, `novo`) VALUES
(1, '2016-01-07 16:19:09', 'A convocação Real', 'quest01', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestiario`
--
ALTER TABLE `bestiario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestiario`
--
ALTER TABLE `bestiario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
