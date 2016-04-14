-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Abr-2016 às 15:53
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `susanamoretto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriadeservicos`
--

CREATE TABLE `categoriadeservicos` (
  `idCategoriaServicos` int(11) NOT NULL,
  `CategoriaServicos` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoriadeservicos`
--

INSERT INTO `categoriadeservicos` (`idCategoriaServicos`, `CategoriaServicos`) VALUES
(1, 'Corte e estilo'),
(2, 'Hair Treatment'),
(3, 'Maquiagem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamadaservicos`
--

CREATE TABLE `chamadaservicos` (
  `idChamada` int(11) NOT NULL,
  `tituloChamada` varchar(20) NOT NULL,
  `descricaoChamada` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `chamadaservicos`
--

INSERT INTO `chamadaservicos` (`idChamada`, `tituloChamada`, `descricaoChamada`) VALUES
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling3', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling3', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling3', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling3', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling3', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling3', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar'),
(0, 'Mudei', 'Penteado a consultar<br />Dia de Noiva a consulta'),
(1, 'Fashion', 'Corte com estilista sênior: consultar<br />Corte com estilista junior: consultar'),
(2, 'Styling', 'Valores a consultar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentario` int(11) NOT NULL,
  `nomeComentario` varchar(50) NOT NULL,
  `emailComentario` varchar(50) NOT NULL,
  `comComentario` varchar(5000) NOT NULL,
  `data` varchar(20) NOT NULL,
  `moderado` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`idComentario`, `nomeComentario`, `emailComentario`, `comComentario`, `data`, `moderado`) VALUES
(1, 'cliente01', 'cliente01@seconect.com.br', 'fsdfdsfsda', '01/09/2014 19:44', 'Sim'),
(2, 'Cliente02', 'cliente02@seconect.com.br', 'frsdafdsfads', '01/09/2014 19:44', 'Sim'),
(3, 'Cliente03', 'cliente03@seconect.com.br', 'frsdafdsfads', '01/09/2014 19:44', 'Sim'),
(4, 'Cliente04', 'cliente04@seconect.com.br', 'esfgtghhhjuki', '01/09/2014 20:01', 'Sim'),
(5, 'Hugo', 'hugo@seconect.com.br', 'rfsd asdf asdf wqefa wdf', '01/09/2014 20:16', 'Sim'),
(6, 'Hugo', 'hugo1@seconect.com.br', 'sdf asf asdf awef asdc we', '01/09/2014 21:30', 'Sim'),
(7, 'vanessa', 'vanessa@hotmail.com', 'eabadabadu', '16/09/2014 18:03', 'Não'),
(8, 'Baby Monster', 'baby@monster.com.br', 'asdf aserf asdf awef asdf we', '20/09/2014 12:41', 'Sim'),
(9, 'Carlos', 'carlos-h-gomes@hotmail.com', 'email', '20/09/2014 16:37', 'Sim');

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
-- Estrutura da tabela `galeriacategoria`
--

CREATE TABLE `galeriacategoria` (
  `idCategoriaGaleria` int(11) NOT NULL,
  `categoriaGaleria` varchar(50) NOT NULL,
  `qtdFotos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `galeriacategoria`
--

INSERT INTO `galeriacategoria` (`idCategoriaGaleria`, `categoriaGaleria`, `qtdFotos`) VALUES
(1, 'categoria', 0),
(2, 'categoria01', 0),
(3, 'categoria02', 0),
(4, 'categoria03', 0),
(5, 'categoria04', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(50) NOT NULL,
  `descricaoProduto` varchar(500) NOT NULL,
  `valorProduto` int(10) NOT NULL,
  `data` varchar(20) NOT NULL,
  `visitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `nomeProduto`, `descricaoProduto`, `valorProduto`, `data`, `visitas`) VALUES
(22, 'Produto 2', 'Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.', 50, '25/08/2014 21:08', 19),
(23, 'Produto 3', 'Para dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si.', 60, '25/08/2014 21:08', 20),
(24, 'Produto 4', 'Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes.', 75, '25/08/2014 21:13', 179);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quemsomos`
--

CREATE TABLE `quemsomos` (
  `idQSomos` int(11) NOT NULL,
  `tituloQSomos` varchar(20) NOT NULL,
  `descricaoQSomos` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quemsomos`
--

INSERT INTO `quemsomos` (`idQSomos`, `tituloQSomos`, `descricaoQSomos`) VALUES
(0, 'Quem Somos:', 'Somos uma equipe que preza a qualidade de serviço e excelente atendimento aos nossos clientes, com profissionais especializados e atentos as tendências de moda e visagismo com requinte conteporâneo.'),
(1, 'Visão da empresa', 'Trazer qualidade no atendimento visando as novas tendências, ampliando o conhecimento nas áreas em destaque, sempre buscando referências nacionais e internacionais. Valorizando sempre a opinião e preferência de nossos clientes.'),
(0, 'Quem Somos:', 'Somos uma equipe que preza a qualidade de serviço e excelente atendimento aos nossos clientes, com profissionais especializados e atentos as tendências de moda e visagismo com requinte conteporâneo.'),
(1, 'Visão da empresa', 'Trazer qualidade no atendimento visando as novas tendências, ampliando o conhecimento nas áreas em destaque, sempre buscando referências nacionais e internacionais. Valorizando sempre a opinião e preferência de nossos clientes.'),
(0, 'Quem Somos:', 'Somos uma equipe que preza a qualidade de serviço e excelente atendimento aos nossos clientes, com profissionais especializados e atentos as tendências de moda e visagismo com requinte conteporâneo.'),
(1, 'Visão da empresa', 'Trazer qualidade no atendimento visando as novas tendências, ampliando o conhecimento nas áreas em destaque, sempre buscando referências nacionais e internacionais. Valorizando sempre a opinião e preferência de nossos clientes.'),
(0, 'Quem Somos:', 'Somos uma equipe que preza a qualidade de serviço e excelente atendimento aos nossos clientes, com profissionais especializados e atentos as tendências de moda e visagismo com requinte conteporâneo.'),
(1, 'Visão da empresa', 'Trazer qualidade no atendimento visando as novas tendências, ampliando o conhecimento nas áreas em destaque, sempre buscando referências nacionais e internacionais. Valorizando sempre a opinião e preferência de nossos clientes.'),
(0, 'Quem Somos:', 'Somos uma equipe que preza a qualidade de serviço e excelente atendimento aos nossos clientes, com profissionais especializados e atentos as tendências de moda e visagismo com requinte conteporâneo.'),
(1, 'Visão da empresa', 'Trazer qualidade no atendimento visando as novas tendências, ampliando o conhecimento nas áreas em destaque, sempre buscando referências nacionais e internacionais. Valorizando sempre a opinião e preferência de nossos clientes.'),
(0, 'Quem Somos:', 'Somos uma equipe que preza a qualidade de serviço e excelente atendimento aos nossos clientes, com profissionais especializados e atentos as tendências de moda e visagismo com requinte conteporâneo.'),
(1, 'Visão da empresa', 'Trazer qualidade no atendimento visando as novas tendências, ampliando o conhecimento nas áreas em destaque, sempre buscando referências nacionais e internacionais. Valorizando sempre a opinião e preferência de nossos clientes.'),
(0, 'Quem Somos:', 'Somos uma equipe que preza a qualidade de serviço e excelente atendimento aos nossos clientes, com profissionais especializados e atentos as tendências de moda e visagismo com requinte conteporâneo.'),
(1, 'Visão da empresa', 'Trazer qualidade no atendimento visando as novas tendências, ampliando o conhecimento nas áreas em destaque, sempre buscando referências nacionais e internacionais. Valorizando sempre a opinião e preferência de nossos clientes.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `idServicos` int(11) NOT NULL,
  `catServicos` varchar(50) NOT NULL,
  `servicos` varchar(50) NOT NULL,
  `valorServicos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`idServicos`, `catServicos`, `servicos`, `valorServicos`) VALUES
(2, 'Corte e estilo', 'Corte Com estilista Sênior', ''),
(3, 'Hair Treatment', 'Hair', ''),
(4, 'Maquiagem', 'Profissional', 'A consultar'),
(5, 'Maquiagem', 'Profissional', 'A consultar'),
(6, 'Maquiagem', 'Profissional', 'A consultar'),
(7, 'Maquiagem', 'Profissional', 'A consultar'),
(8, 'Maquiagem', 'Profissional', 'A consultar'),
(9, 'Maquiagem', 'mzklnsklcnsdcmnskjb sk na fn', '10000');

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
(3, 'Usuário Master', 'master', 'master');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoriadeservicos`
--
ALTER TABLE `categoriadeservicos`
  ADD PRIMARY KEY (`idCategoriaServicos`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentario`);

--
-- Indexes for table `emailmkt`
--
ALTER TABLE `emailmkt`
  ADD PRIMARY KEY (`idMkt`);

--
-- Indexes for table `galeriacategoria`
--
ALTER TABLE `galeriacategoria`
  ADD PRIMARY KEY (`idCategoriaGaleria`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`idServicos`);

--
-- Indexes for table `usuarioadmin`
--
ALTER TABLE `usuarioadmin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoriadeservicos`
--
ALTER TABLE `categoriadeservicos`
  MODIFY `idCategoriaServicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `emailmkt`
--
ALTER TABLE `emailmkt`
  MODIFY `idMkt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galeriacategoria`
--
ALTER TABLE `galeriacategoria`
  MODIFY `idCategoriaGaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `idServicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuarioadmin`
--
ALTER TABLE `usuarioadmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
