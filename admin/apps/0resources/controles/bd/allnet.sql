-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jan-2016 às 15:23
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allnet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apostilas`
--

CREATE TABLE `apostilas` (
  `id` int(2) NOT NULL,
  `windows` int(2) NOT NULL,
  `word` int(2) NOT NULL,
  `powerpoint` int(2) NOT NULL,
  `excel` int(2) NOT NULL,
  `criacao` int(2) NOT NULL,
  `coreldraw` int(2) NOT NULL,
  `photoshop` int(2) NOT NULL,
  `fireworks` int(2) NOT NULL,
  `dreamweaver` int(2) NOT NULL,
  `xhtml` int(2) NOT NULL,
  `logica` int(2) NOT NULL,
  `javascript` int(2) NOT NULL,
  `php` int(2) NOT NULL,
  `asp` int(2) NOT NULL,
  `flash` int(2) NOT NULL,
  `rede` int(2) NOT NULL,
  `hardware` int(2) NOT NULL,
  `administracao` int(2) NOT NULL,
  `secretariado` int(2) NOT NULL,
  `departamento` int(2) NOT NULL,
  `contabilidade` int(2) NOT NULL,
  `modelagem` int(2) NOT NULL,
  `excelav` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `apostilas`
--

INSERT INTO `apostilas` (`id`, `windows`, `word`, `powerpoint`, `excel`, `criacao`, `coreldraw`, `photoshop`, `fireworks`, `dreamweaver`, `xhtml`, `logica`, `javascript`, `php`, `asp`, `flash`, `rede`, `hardware`, `administracao`, `secretariado`, `departamento`, `contabilidade`, `modelagem`, `excelav`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `mensagem` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `chat`
--

INSERT INTO `chat` (`id`, `nome`, `mensagem`, `datahora`) VALUES
(1, 'Ariosvaldo', 'sdfasdf', '2015-11-16 19:47:56'),
(51, 'Hugo', 'Oi', '2015-12-28 13:33:59'),
(52, 'Hugo', 'Salve!', '2016-01-04 14:49:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historicopreventivo`
--

CREATE TABLE `historicopreventivo` (
  `id` int(11) NOT NULL,
  `ctr` int(11) NOT NULL,
  `tipo` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `data_agendada` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `funcionario` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `confirmacao` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'nao'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `historicopreventivo`
--

INSERT INTO `historicopreventivo` (`id`, `ctr`, `tipo`, `quantidade`, `valor`, `data_agendada`, `funcionario`, `confirmacao`) VALUES
(1, 656, 'dinheiro, cheque ou cartao', 3, '100', '12/06/2015', 'Usuario Master', 'nao'),
(2, 123, 'Dinheiro', 5, '250', '02/01/2015', 'Usuario Supervisor', 'nao'),
(3, 12345, 'cheque', 8, '800', '03/01/2016', 'Usuario Administrativo', 'nao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historicoreposicao`
--

CREATE TABLE `historicoreposicao` (
  `idHistorico` int(11) NOT NULL,
  `funcionario` varchar(30) NOT NULL,
  `dataM` varchar(10) NOT NULL,
  `ctr` int(10) NOT NULL,
  `aluno` varchar(50) NOT NULL,
  `dia` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `professor` varchar(50) NOT NULL,
  `modulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `aula` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `historicoreposicao`
--

INSERT INTO `historicoreposicao` (`idHistorico`, `funcionario`, `dataM`, `ctr`, `aluno`, `dia`, `hora`, `professor`, `modulo`, `aula`) VALUES
(1, 'hgomes', '15/06/2015', 123, 'Fulano de Tal', '16/06/2015', '14', 'Hugo Christian Pereira Gomes', 'B1', 15),
(3, '', '28/12/2015', 123, 'Ariosvaldo', '27/12/2015', '15', 'Hugo Christian Pereira Gomes', 'AdministraÃ§Ã£o', 10),
(4, '', '28/12/2015', 1111, 'Ariosvaldo', '27/12/2015', '8', 'Teste', 'AdministraÃ§Ã£o', 10),
(5, '', '28/12/2015', 222, 'Ariosvaldo', '27/12/2015', '', '', 'AdministraÃ§Ã£o', 10),
(6, 'Hugo Christian Pereira Gomes', '28/12/2015', 333, 'Ariosvaldo', '27/12/2015', '9', 'Teste', 'Secretariado', 10),
(7, 'Hugo Christian Pereira Gomes', '28/12/2015', 1010, 'Ariosvaldo da Silva JÃºnior Neves dos Santos', '2015-12-29', '16', 'Hugo Christian Pereira Gomes', 'Contabilidade', 23),
(8, 'Hugo Christian Pereira Gomes', '28/12/2015', 2020, 'Clementina Gomes dos Santos', '2015-12-30', '17', 'Hugo Christian Pereira Gomes', 'Excel Novo', 12),
(9, 'Hugo Christian Pereira Gomes', '28/12/2015', 1111, 'Clementina', '2015-12-31', '18', 'Hugo Christian Pereira Gomes', 'Kids 2 A', 23),
(10, 'Hugo Christian Pereira Gomes', '28/12/2015', 4343, 'Vamos testar de Novo', '2015-12-30', '10', 'Teste', 'Inter 1', 23),
(11, 'Hugo Christian Pereira Gomes', '28/12/2015', 1111, 'Vamos testar de Novo 5', '2015-12-29', '11', 'Teste', 'Basic 1', 22),
(12, 'Usuario Master', '02/01/2016', 12345, 'Teste Finalizado para Cadastro de ReposiÃ§Ã£o', '2016-01-04', '19', 'Hugo Christian Pereira Gomes', 'Dreamweaver(WEB)', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historicotreinamento`
--

CREATE TABLE `historicotreinamento` (
  `id` int(11) NOT NULL,
  `lab` varchar(50) NOT NULL,
  `maq` varchar(50) NOT NULL,
  `horarios` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `ctr` int(11) NOT NULL,
  `aluno` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `historicotreinamento`
--

INSERT INTO `historicotreinamento` (`id`, `lab`, `maq`, `horarios`, `tipo`, `ctr`, `aluno`) VALUES
(1, 'Bill Gates (LAB1)', 'Aluno01', '08:00 as 09:00', 'Treino', 123, 'Cleide da Silva'),
(2, 'Bill Gates (LAB1)', 'Aluno01', '13:00 as 14:00', 'Livre', 1234, 'Ariosvaldo da Silva JÃºnior'),
(3, 'Bill Gates (LAB1)', 'Aluno06', '13:00 as 14:00', 'ReforÃ§o', 3333, 'Clementina'),
(4, 'Steve Jobs (LAB2)', 'Aluno01', '08:00 as 09:00', 'Livre', 2323, 'Sophia VictÃ³ria Felix Gomes'),
(5, 'Arts', 'Aluno05', '09:00 as 10:00', 'Treino', 12312, 'Teste para Agendar Treinamento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_visitas_street`
--

CREATE TABLE `historico_visitas_street` (
  `id` int(11) NOT NULL,
  `nome_visita` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `data_visita` date NOT NULL,
  `horario_chegada` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `funcionario_street` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `atendente` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `status` varchar(4) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'n/a' COMMENT 'av/fh/na',
  `conversao` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'n/a' COMMENT 'numero da ctr ou n/c'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `historico_visitas_street`
--

INSERT INTO `historico_visitas_street` (`id`, `nome_visita`, `data_visita`, `horario_chegada`, `funcionario_street`, `atendente`, `status`, `conversao`) VALUES
(1, 'Cleide da Silva Santos', '2016-01-04', '13:50', 'Cleverson dos Santos', 'Diogenes da Silva de Oliveira', 'n/a', 'n/a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `horario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`id`, `horario`) VALUES
(1, '08:00 as 09:00'),
(2, '09:00 as 10:00'),
(3, '10:00 as 11:00'),
(4, '11:00 as 12:00'),
(5, '13:00 as 14:00'),
(6, '14:00 as 15:00'),
(7, '15:00 as 16:00'),
(8, '16:00 as 17:00'),
(9, '17:00 as 18:00'),
(10, '19:00 as 20:00'),
(11, '20:00 as 21:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `labs`
--

INSERT INTO `labs` (`id`, `nome`) VALUES
(1, 'Bill Gates (LAB1)'),
(2, 'Steve Jobs (LAB2)'),
(3, 'New York (Multimidia)'),
(4, 'Orlando (Teens)'),
(5, 'Washington (Idiomas1)'),
(6, 'Vale do Silício (Hardware)'),
(7, 'Hollywood (Cinema)'),
(8, 'Arts'),
(9, 'Kids');

-- --------------------------------------------------------

--
-- Estrutura da tabela `maq`
--

CREATE TABLE `maq` (
  `id` int(11) NOT NULL,
  `maq` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `maq`
--

INSERT INTO `maq` (`id`, `maq`) VALUES
(1, 'Aluno01'),
(2, 'Aluno02'),
(3, 'Aluno03'),
(4, 'Aluno04'),
(5, 'Aluno05'),
(6, 'Aluno06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulos`
--

CREATE TABLE `modulos` (
  `modulo` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `modulos`
--

INSERT INTO `modulos` (`modulo`) VALUES
('Basic 1'),
('Basic 2'),
('Elementary 1'),
('Elementary 2'),
('Pre Inter 1'),
('Pre Inter 2'),
('Inter 1'),
('Inter 2'),
('High Inter 1'),
('High Inter 2'),
('High Inter 3'),
('Advanced 1'),
('Advanced 2'),
('Advanced 3'),
('Master Class 1'),
('Master Class 2'),
('Master Class 3'),
('Welcome 1'),
('Welcome 2'),
('Welcome 3'),
('Little Starter'),
('Little A'),
('Little B'),
('Little Begin'),
('Kids 1 A'),
('Kids 1 B'),
('Kids 2 A'),
('Kids 2 B'),
('Kids 3 A'),
('Kids 3 B'),
('Kids 4 A'),
('Kids 4 B'),
('Teens 1 A'),
('Teens 1 B'),
('Teens 2 A'),
('Teens 2 B'),
('Teens 3 A'),
('Teens 3 B'),
('Teens 4 A'),
('Teens 4 B'),
('Secretariado'),
('Dep. Pessoal'),
('Administração'),
('Contabilidade'),
('Inclusão Digital'),
('Multimidia e Comunicação'),
('Windows Novo'),
('Power Point Novo'),
('Word Novo'),
('Excel Novo'),
('Windows (Antigo)'),
('Novas Tecnologias'),
('Power Point (Antigo)'),
('Word (Antigo)'),
('Excel (Antigo)'),
('Arquitetura de Hardware'),
('Sistemas Operacionais'),
('Gestão de Negócios'),
('Suporte Técnico'),
('Redes(Novo)'),
('Administração Serv Linux'),
('Administração Serv Windows'),
('Computação Gráfica'),
('GMAX/Bitturn'),
('Blender'),
('Corel/Photoshop'),
('Projeto 3D'),
('Game Design'),
('Game Maker'),
('Valve Hammer'),
('3d Game Studio'),
('Projeto Final'),
('Maquete Eletrônica'),
('Montagem(Antigo)'),
('Manutenção(Antigo)'),
('Redes(Antigo)'),
('Marketing(Antigo)'),
('Criação e Design'),
('CorelDraw(WEB)'),
('Photoshop(WEB)'),
('Photoshop(WEB)'),
('Fireworks(WEB)'),
('Dreamweaver(WEB)'),
('HTML/CSS(WEB)'),
('Lógica de Programação(WEB)'),
('Javascript(WEB)'),
('PHP/MySQL(WEB)'),
('ASP/MySQL(WEB)'),
('Flash(WEB)'),
('S.E.O.(WEB)'),
('Projeto Final(WEB)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE `permissoes` (
  `id` int(11) NOT NULL,
  `depto` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `nivel` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `permissoes`
--

INSERT INTO `permissoes` (`id`, `depto`, `nivel`) VALUES
(1, 'diretoria', 'master'),
(2, 'pedagogico', 'coord'),
(3, 'comercial', 'gerente'),
(4, 'administracao', 'supervisor'),
(5, '', 'administracao'),
(6, '', 'professor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `idProfessores` int(11) NOT NULL,
  `nomeProfessor` varchar(30) NOT NULL,
  `primeiroHorario` varchar(10) NOT NULL,
  `ultimoHorario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`idProfessores`, `nomeProfessor`, `primeiroHorario`, `ultimoHorario`) VALUES
(1, 'Hugo Christian Pereira Gomes', '14', '20'),
(2, 'Teste', '8', '16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reposicao`
--

CREATE TABLE `reposicao` (
  `idReposicao` int(11) NOT NULL,
  `ctrAluno` int(11) NOT NULL,
  `nomeAluno` varchar(50) NOT NULL,
  `diaReposicao` varchar(10) NOT NULL,
  `profReposicao` varchar(50) NOT NULL,
  `horarioReposicao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `tipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id`, `tipo`) VALUES
(1, 'Treino'),
(2, 'Livre'),
(3, 'Refor&ccedil;o'),
(4, 'Plant&atilde;o');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(1000) NOT NULL,
  `senha` varchar(1000) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nivel` varchar(20) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `situacao` varchar(100) NOT NULL,
  `ultimo_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `nome`, `nivel`, `departamento`, `situacao`, `ultimo_login`) VALUES
(1, 'master', 'eb0a191797624dd3a48fa681d3061212', 'Usuario Master', 'master', 'pedagogico', 'ativo', '2016-01-02 23:00:00'),
(2, 'professor', '3f9cd3c7b11eb1bae99dddb3d05da3c5', 'Usuario Professor', 'professor', 'pedagogico', 'ativo', '2016-01-03 18:37:18'),
(3, 'administrativo', 'b9e0927b549f7599b01a97ee524cdc7c', 'Usuario Administrativo', 'administrativo', 'administracao', 'ativo', '2016-01-03 18:38:35'),
(4, 'gerente', '740d9c49b11f3ada7b9112614a54be41', 'Usuario Gerente', 'gerente', 'comercial', 'ativo', '2016-01-02 23:05:01'),
(5, 'supervisor', '09348c20a019be0318387c08df7a783d', 'Usuario Supervisor', 'supervisor', 'administracao', 'ativo', '2016-01-02 23:05:01'),
(6, 'coordenador', 'bd68542523b5b6bb3023ffd6b0ffb650', 'Usuario Coordenador', 'coordenador', 'pedagogico', 'ativo', '2016-01-02 23:05:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apostilas`
--
ALTER TABLE `apostilas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historicopreventivo`
--
ALTER TABLE `historicopreventivo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historicoreposicao`
--
ALTER TABLE `historicoreposicao`
  ADD PRIMARY KEY (`idHistorico`);

--
-- Indexes for table `historicotreinamento`
--
ALTER TABLE `historicotreinamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historico_visitas_street`
--
ALTER TABLE `historico_visitas_street`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maq`
--
ALTER TABLE `maq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`idProfessores`);

--
-- Indexes for table `reposicao`
--
ALTER TABLE `reposicao`
  ADD PRIMARY KEY (`idReposicao`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `historicopreventivo`
--
ALTER TABLE `historicopreventivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `historicoreposicao`
--
ALTER TABLE `historicoreposicao`
  MODIFY `idHistorico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `historicotreinamento`
--
ALTER TABLE `historicotreinamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `historico_visitas_street`
--
ALTER TABLE `historico_visitas_street`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `maq`
--
ALTER TABLE `maq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `idProfessores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reposicao`
--
ALTER TABLE `reposicao`
  MODIFY `idReposicao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
