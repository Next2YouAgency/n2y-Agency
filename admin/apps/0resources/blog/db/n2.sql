-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Set-2015 às 00:30
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `n2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `id` int(11) NOT NULL,
  `titulo_post` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img_principal` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `conteudo_post` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `img1` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img2` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img3` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img4` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img5` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img6` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img7` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img8` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img9` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img10` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `video_tutorial` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `autor` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `whats` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `youtube` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `linkedin` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `titulo_post`, `img_principal`, `conteudo_post`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `video_tutorial`, `autor`, `facebook`, `twitter`, `whats`, `youtube`, `linkedin`) VALUES
(1, 'Administração de Empresas', '1442776001', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', '11 97686-9613', 'https://www.youtube.com/user/hugoallnet', ''),
(2, 'Teste ADM 2', '1442785682', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', '11 97686-9613', 'https://www.youtube.com/user/hugoallnet', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `back_end`
--

CREATE TABLE IF NOT EXISTS `back_end` (
  `id` int(11) NOT NULL,
  `titulo_post` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img_principal` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `conteudo_post` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `img1` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img2` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img3` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img4` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img5` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img6` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img7` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img8` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img9` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img10` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `video_tutorial` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT '#',
  `autor` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'neo Nerd',
  `facebook` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `whats` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `youtube` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `linkedin` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `back_end`
--

INSERT INTO `back_end` (`id`, `titulo_post`, `img_principal`, `conteudo_post`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `video_tutorial`, `autor`, `facebook`, `twitter`, `whats`, `youtube`, `linkedin`) VALUES
(1, 'jQuery - Write Less Do More', '1442437558', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\nO vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '#', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', '11 97686-9613', 'https://www.youtube.com/user/hugoallnet', ''),
(2, 'Teste de Back-end2', '1442783145', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '#', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', '11 97686-9613', 'https://www.youtube.com/user/hugoallnet', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contabilidade`
--

CREATE TABLE IF NOT EXISTS `contabilidade` (
  `id` int(11) NOT NULL,
  `titulo_post` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img_principal` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `conteudo_post` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `img1` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img2` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img3` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img4` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img5` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img6` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img7` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img8` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img9` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img10` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `video_tutorial` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `autor` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `whats` int(20) NOT NULL,
  `youtube` int(50) NOT NULL,
  `linkedin` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `contabilidade`
--

INSERT INTO `contabilidade` (`id`, `titulo_post`, `img_principal`, `conteudo_post`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `video_tutorial`, `autor`, `facebook`, `twitter`, `whats`, `youtube`, `linkedin`) VALUES
(1, 'Contabilidade - Teste', '1442776406', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', 11, 0, 0),
(2, 'Contabilidade Teste2', '1442785748', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', 11, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dep_pessoal`
--

CREATE TABLE IF NOT EXISTS `dep_pessoal` (
  `id` int(11) NOT NULL,
  `titulo_post` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img_principal` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `conteudo_post` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `img1` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img2` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img3` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img4` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img5` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img6` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img7` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img8` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img9` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img10` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `video_tutorial` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `autor` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `whats` int(20) NOT NULL,
  `youtube` int(50) NOT NULL,
  `linkedin` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `dep_pessoal`
--

INSERT INTO `dep_pessoal` (`id`, `titulo_post`, `img_principal`, `conteudo_post`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `video_tutorial`, `autor`, `facebook`, `twitter`, `whats`, `youtube`, `linkedin`) VALUES
(1, 'Dep Pessoal - Teste', '1442776693', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', 11, 0, 0),
(2, 'DP - Teste 2', '1442776768', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', 11, 0, 0),
(3, 'Departamento Pessoal2', '1442785879', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', 11, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `design`
--

CREATE TABLE IF NOT EXISTS `design` (
  `id` int(11) NOT NULL,
  `titulo_post` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img_principal` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `conteudo_post` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `img1` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img2` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img3` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img4` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img5` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img6` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img7` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img8` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img9` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img10` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `video_tutorial` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT '#',
  `autor` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'neo Nerd',
  `facebook` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `whats` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `youtube` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `linkedin` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `design`
--

INSERT INTO `design` (`id`, `titulo_post`, `img_principal`, `conteudo_post`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `video_tutorial`, `autor`, `facebook`, `twitter`, `whats`, `youtube`, `linkedin`) VALUES
(1, 'Testando o upload do Design', '1442437366', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\nO vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '#', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', '11 97686-9613', 'https://www.youtube.com/user/hugoallnet', ''),
(2, 'Teste de Design 2', '1442782800', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '#', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', '11 97686-9613', 'https://www.youtube.com/user/hugoallnet', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `front_end`
--

CREATE TABLE IF NOT EXISTS `front_end` (
  `id` int(11) NOT NULL,
  `titulo_post` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img_principal` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `conteudo_post` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `img1` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img2` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img3` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img4` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img5` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img6` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img7` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img8` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img9` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img10` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `video_tutorial` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT '#',
  `autor` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'neo Nerd',
  `facebook` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `whats` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `youtube` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `linkedin` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `front_end`
--

INSERT INTO `front_end` (`id`, `titulo_post`, `img_principal`, `conteudo_post`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `video_tutorial`, `autor`, `facebook`, `twitter`, `whats`, `youtube`, `linkedin`) VALUES
(1, 'Novas Tags do HTML5', '1442437529', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\nO vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '#', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', '11 97686-9613', 'https://www.youtube.com/user/hugoallnet', ''),
(2, 'Media Query', '1442460797', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\nO vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '#', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', '11 97686-9613', 'https://www.youtube.com/user/hugoallnet', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `oop`
--

CREATE TABLE IF NOT EXISTS `oop` (
  `id` int(11) NOT NULL,
  `titulo_post` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img_principal` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `conteudo_post` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `img1` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img2` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img3` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img4` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img5` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img6` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img7` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img8` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img9` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img10` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `video_tutorial` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT '#',
  `autor` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'neo Nerd',
  `facebook` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `whats` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `youtube` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `linkedin` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `oop`
--

INSERT INTO `oop` (`id`, `titulo_post`, `img_principal`, `conteudo_post`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `video_tutorial`, `autor`, `facebook`, `twitter`, `whats`, `youtube`, `linkedin`) VALUES
(1, 'MVC - Model View Controller', '1442437583', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\nO vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '#', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', '11 97686-9613', 'https://www.youtube.com/user/hugoallnet', ''),
(2, 'Teste Orientação2', '1442783216', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '#', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', '11 97686-9613', 'https://www.youtube.com/user/hugoallnet', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretariado`
--

CREATE TABLE IF NOT EXISTS `secretariado` (
  `id` int(11) NOT NULL,
  `titulo_post` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img_principal` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `conteudo_post` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `img1` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img2` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img3` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img4` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img5` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img6` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img7` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img8` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img9` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img10` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `video_tutorial` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `autor` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `whats` int(20) NOT NULL,
  `youtube` int(50) NOT NULL,
  `linkedin` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `secretariado`
--

INSERT INTO `secretariado` (`id`, `titulo_post`, `img_principal`, `conteudo_post`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `video_tutorial`, `autor`, `facebook`, `twitter`, `whats`, `youtube`, `linkedin`) VALUES
(1, 'Secretariado - Teste', '1442776439', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', 11, 0, 0),
(2, 'Secretariado teste2', '1442785812', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', 11, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `seo`
--

CREATE TABLE IF NOT EXISTS `seo` (
  `id` int(11) NOT NULL,
  `titulo_post` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img_principal` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `conteudo_post` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `img1` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img2` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img3` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img4` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img5` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img6` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img7` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img8` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img9` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `img10` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'default',
  `video_tutorial` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT '#',
  `autor` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'neo Nerd',
  `facebook` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `whats` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `youtube` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `linkedin` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `seo`
--

INSERT INTO `seo` (`id`, `titulo_post`, `img_principal`, `conteudo_post`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `video_tutorial`, `autor`, `facebook`, `twitter`, `whats`, `youtube`, `linkedin`) VALUES
(1, 'Search Engine Marketing', '1442437605', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\nO vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '#', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', '11 97686-9613', 'https://www.youtube.com/user/hugoallnet', ''),
(2, 'Teste SEO 2', '1442783180', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.\r\nPara dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.\r\nTemas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.\r\nEconomize tempo no Word com novos botões que são mostrados no local em que você precisa deles. Para alterar a maneira como uma imagem se ajusta ao seu documento, clique nela e um botão de opções de layout será exibido ao lado. Ao trabalhar em uma tabela, clique no local onde deseja adicionar uma linha ou uma coluna e clique no sinal de adição.\r\nA leitura também é mais fácil no novo modo de exibição de Leitura. Você pode recolher partes do documento e colocar o foco no texto desejado. Se for preciso interromper a leitura antes de chegar ao fim dela, o Word lembrará em que ponto você parou - até mesmo em outro dispositivo.\r\n', '', '', '', '', '', '', '', '', '', '', '#', 'Hugo Christian Pereira Gomes', 'https://www.facebook.com/hugo.christian2', 'https://www.twitter.com/HugoAllnet', '11 97686-9613', 'https://www.youtube.com/user/hugoallnet', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `senha` varchar(300) COLLATE utf8_general_mysql500_ci NOT NULL,
  `nivel` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT 'usuario',
  `twitter` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `youtube` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `whats` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel`, `twitter`, `facebook`, `youtube`, `whats`) VALUES
(1, 'Hugo Christian Pereira Gomes', 'hugo.allnet@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'default', 'https://www.twitter.com/HugoAllnet', 'https://www.facebook.com/hugo.christian2', 'https://www.youtube.com/user/hugoallnet', '11 97686-9613');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `back_end`
--
ALTER TABLE `back_end`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contabilidade`
--
ALTER TABLE `contabilidade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dep_pessoal`
--
ALTER TABLE `dep_pessoal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_end`
--
ALTER TABLE `front_end`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oop`
--
ALTER TABLE `oop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secretariado`
--
ALTER TABLE `secretariado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
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
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `back_end`
--
ALTER TABLE `back_end`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contabilidade`
--
ALTER TABLE `contabilidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dep_pessoal`
--
ALTER TABLE `dep_pessoal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `front_end`
--
ALTER TABLE `front_end`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `oop`
--
ALTER TABLE `oop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `secretariado`
--
ALTER TABLE `secretariado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
