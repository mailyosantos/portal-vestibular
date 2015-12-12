-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Dez-2015 às 22:00
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vestibular`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE IF NOT EXISTS `candidato` (
  `idcandidato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `num` int(11) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `cep` varchar(13) NOT NULL,
  `fixo` varchar(15) NOT NULL,
  `cel` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `curso1` varchar(12) NOT NULL,
  `curso2` varchar(12) NOT NULL,
  `datahora` datetime NOT NULL,
  PRIMARY KEY (`idcandidato`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`idcandidato`, `nome`, `cpf`, `rua`, `num`, `bairro`, `cidade`, `cep`, `fixo`, `cel`, `email`, `curso1`, `curso2`, `datahora`) VALUES
(2, 'Fulano de Tal', '111.111.111-11', 'Qualquer Rua', 12, 'Sem Bairro', 'Aquela Cidade', '11.111-111', '(33) 3333-3333', '(55) 55555-5555', 'fulanodetal@provedor.com', 'ADM', 'PED', '2015-12-12 18:55:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `idcurso` int(11) NOT NULL AUTO_INCREMENT,
  `cod` varchar(12) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `duracao` int(11) NOT NULL,
  `periodo` varchar(11) NOT NULL,
  `mensalidade` varchar(15) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `foto1` varchar(200) NOT NULL,
  `foto2` varchar(200) NOT NULL,
  `foto3` varchar(200) NOT NULL,
  PRIMARY KEY (`idcurso`),
  UNIQUE KEY `cod` (`cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`idcurso`, `cod`, `nome`, `duracao`, `periodo`, `mensalidade`, `descricao`, `foto1`, `foto2`, `foto3`) VALUES
(9, 'ADM', 'AdministraÃ§Ã£o', 4, 'noturno', 'R$695,00', 'O Bacharel em AdministraÃ§Ã£o Ã© um profissional preparado para atuar em organizaÃ§Ãµes, pÃºblicas e privadas, de grande, mÃ©dio e pequeno porte e organizaÃ§Ãµes nÃ£o governamentais (ONGs). O curso possui uma equipe de profissionais altamente qualificados que priorizam a formaÃ§Ã£o de alunos com habilidades para atuar no ramo da consultoria, favorece o domÃ­nio de competÃªncias para a tomada de decisÃµes estratÃ©gicas e gerenciais, que visam a melhoria da produtividade empresarial. O perfil empreendedor Ã© destaque no mundo atual e o administrador no decorrer de sua formaÃ§Ã£o, adquire uma vasta experiÃªncia para atuar de acordo com as expectativas do mercado.', 'fotos/foto1.jpg', 'fotos/foto2.jpg', 'fotos/foto3.jpg'),
(10, 'EFIS', 'EducaÃ§Ã£o FÃ­sica', 4, 'noturno', 'R$754,00', ' A profissÃ£o de educador FÃ­sico nos Ãºltimos anos vem ampliando suas possibilidades de diversificaÃ§Ã£o e inserÃ§Ã£o no mercado de trabalho. Seguindo uma tendÃªncia mundial de procura de uma vida saudÃ¡vel, prÃ¡ticas esportivas e prevenÃ§Ã£o/tratamento de doenÃ§as atravÃ©s de exercÃ­cios fÃ­sicos, o mercado profissional tÃªm se mostrado altamente atrativo.', 'fotos/foto1.jpg', 'fotos/foto2.jpg', 'fotos/foto3.jpg'),
(11, 'ECOMP', 'Engenharia de ComputaÃ§Ã£o', 5, 'noturno', 'R$945,00', 'O Curso de Engenharia de ComputaÃ§Ã£o prepara seus egressos para o mercado de trabalho assim como fundamenta sua formaÃ§Ã£o para o prosseguimento dos estudos em nÃ­vel de mestrado e doutorado, focando os sistemas de telecomunicaÃ§Ãµes, eletrÃ´nica e software, visando a formaÃ§Ã£o de um profissional capacitado a atender as demandas de desenvolvimento de sistemas computacionais, segundo uma abordagem de projeto conjunto de hardware e software.', 'fotos/foto1.jpg', 'fotos/foto2.jpg', 'fotos/foto3.jpg'),
(12, 'EPROD', 'Engenharia de ProduÃ§Ã£o', 5, 'noturno', 'R$945,00', 'A Engenharia de ProduÃ§Ã£o trata do estudo, desenvolvimento, projeto e administraÃ§Ã£o de sistemas integrados de pessoas, informaÃ§Ãµes, materiais, equipamentos e ambiente, que tÃªm como finalidades produzir e distribuir um serviÃ§o ou um produto de modos econÃ´micos, consistentes com os valores sociais vigentes e a preservaÃ§Ã£o do meio ambiente. O Engenheiro de ProduÃ§Ã£o possui sÃ³lida formaÃ§Ã£o cientÃ­fica e profissional, que adquiri no decorrer do curso. Possui habilidades e competÃªncias na formulaÃ§Ã£o e resoluÃ§Ã£o de problemas ligados Ã s atividades de projeto, operaÃ§Ã£o e gerenciamento do trabalho e sistemas de produÃ§Ã£o de bens e/ou serviÃ§os, considerando seus aspectos humanos, econÃ´micos, sociais e ambientais, com visÃ£o Ã©tica e humana, em atendimento Ã s demandas da sociedade.', 'fotos/foto1.jpg', 'fotos/foto2.jpg', 'fotos/foto3.jpg'),
(13, 'EMINAS', 'Engenharia de Minas', 5, 'noturno', 'R$945,00', 'Ã‰ um ramo da engenharia que cuida da extraÃ§Ã£o dos minÃ©rios da natureza e da separaÃ§Ã£o de matÃ©rias-primas minerais Ãºteis, tem como base as ciÃªncias exatas. Baseia-se no estudo das fontes minerais que sÃ£o necessÃ¡rias ao bem viver do homem de forma geral. Na evoluÃ§Ã£o do curso, o aluno entra em contato com processos que lhe transmite informaÃ§Ãµes sobre extraÃ§Ã£o, lavra, identificaÃ§Ã£o mineralÃ³gica, caracterizaÃ§Ã£o de composiÃ§Ã£o mineral, processamento e por fim o uso dos mesmos na metalurgia. ', 'fotos/foto1.jpg', 'fotos/foto2.jpg', 'fotos/foto3.jpg'),
(14, 'EAUTO', 'Engenharia de Controle e AutomaÃ§Ã£o', 5, 'noturno', 'R$945,00', 'A Engenharia de Controle e AutomaÃ§Ã£o Ã© um ramo da engenharia voltado Ã  automaÃ§Ã£o e controle de processos. Ã‰ amplamente empregada em indÃºstrias de qualquer natureza, outros ramos de atividade e atÃ© em residÃªncias. Utiliza de elementos tecnolÃ³gicos como computadores, sensores, atuadores, robÃ´s, mÃ¡quinas elÃ©tricas, softwares, etc., como recursos para o desenvolvimento de processos automatizados e para a supervisÃ£o destes. Ã‰ uma ciÃªncia multidisciplinar, que engloba conhecimento de engenharia elÃ©trica, eletrÃ´nica, de computaÃ§Ã£o e mecÃ¢nica. Por ser necessÃ¡ria em qualquer situaÃ§Ã£o onde exista um processo que possa ser automatizado, a Engenharia de Controle e AutomaÃ§Ã£o Ã© considerada uma das profissÃµes do futuro.', 'fotos/foto1.jpg', 'fotos/foto2.jpg', 'fotos/foto3.jpg'),
(15, 'ECIVIL', 'Engenharia Civil', 5, 'noturno', 'R$945,00', 'O Curso de Engenharia Civil fundamenta-se em uma formaÃ§Ã£o voltada para o desenvolvimento da capacidade crÃ­tica e criativa, sem deixar de lado a formaÃ§Ã£o do aluno no sentido de criar um profissional com uma base sÃ³lida de conhecimentos cientÃ­ficos e tÃ©cnicos. A graduaÃ§Ã£o deve proporcionar condiÃ§Ãµes para que cada aluno construa com rigor essa base inicial para a vida profissional, juntamente com o desenvolvimento da capacidade de anÃ¡lise. Com isso serÃ¡ possÃ­vel ao profissional adaptar-se Ã s necessidades do mercado de trabalho, bem como estarÃ¡ apto para o treinamento continuado que se inicia com a vida prÃ¡tica, Ãºnica forma viÃ¡vel para acompanhar a contÃ­nua evoluÃ§Ã£o da tecnologia.', 'fotos/foto1.jpg', 'fotos/foto2.jpg', 'fotos/foto3.jpg'),
(16, 'MVET', 'Medicina VeterinÃ¡ria', 5, 'vespertino', 'R$1.865,00', 'O objetivo geral do curso de Medicina VeterinÃ¡ria Ã© a formaÃ§Ã£o de profissionais generalistas, dentro de uma visÃ£o holÃ­stica, com as habilidades e competÃªncias necessÃ¡rias para atividades de prevenÃ§Ã£o, diagnÃ³stico e tratamento das doenÃ§as animais, na produÃ§Ã£o animal, tecnologia dos produtos de origem animal e saÃºde pÃºblica. O curso proporciona sÃ³lida formaÃ§Ã£o de profissionais comprometidos eticamente com a produÃ§Ã£o e divulgaÃ§Ã£o do conhecimento, comprometendo-se com as necessidades comunitÃ¡rias, bem como a anÃ¡lise e construÃ§Ã£o da natureza e do papel social do MÃ©dico VeterinÃ¡rio.', 'fotos/foto1.jpg', 'fotos/foto2.jpg', 'fotos/foto3.jpg'),
(17, 'PED', 'Pedagogia', 3, 'noturno', 'R$560,00', 'O pedagogo Ã© o profissional especialista em educaÃ§Ã£o, que atua em vÃ¡rias instÃ¢ncias da prÃ¡tica educativa, devendo produzir e difundir conhecimentos no campo educacional. O Pedagogo no decorrer de sua formaÃ§Ã£o desenvolve habilidades para atuar nas atividades referentes ao processo educativo em instituiÃ§Ãµes escolares e nÃ£o escolares, empresas, Ã³rgÃ£os pÃºblicos e ONGâ€™s. Cada vez mais se ampliam os espaÃ§os de atuaÃ§Ã£o do profissional da pedagogia, que nas empresas, sÃ£o envolvidos em tarefas de seleÃ§Ã£o e treinamento e no desenvolvimento de competÃªncias adquiridas pelos processos de reestruturaÃ§Ã£o do trabalho.', 'fotos/foto1.jpg', 'fotos/foto2.jpg', 'fotos/foto3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`idlogin`),
  UNIQUE KEY `usuario_2` (`usuario`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idlogin`, `usuario`, `senha`) VALUES
(3, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
