-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Nov-2018 às 11:43
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoidoso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `entidade`
--

CREATE TABLE `entidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `entidade`
--

INSERT INTO `entidade` (`id`, `nome`) VALUES
(1, 'Lar São Francisco de Assis'),
(2, 'Instituto Coronel João Leite'),
(3, 'Sociedade Santo Antônio'),
(4, 'Conferência São Vicente de Paula'),
(5, 'Casa de Repouso Emanuel'),
(6, 'Juca de Andrade Vila Pahin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(9) NOT NULL,
  `dia` varchar(2) NOT NULL,
  `mes` varchar(2) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `id_entidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `name`, `sobrenome`, `email`, `telefone`, `password`, `sexo`, `cpf`, `rg`, `dia`, `mes`, `ano`, `cep`, `rua`, `bairro`, `cidade`, `uf`, `id_entidade`) VALUES
(11, 'Saudades', 'Maranha', 'maranha@gmail.com', '21321321321', '123', 'M', '21312321321', '321321321', '32', '31', '3213', '13800414', 'Rua Maria Bonatti Bordignon', 'Vila Bordignon', 'Mogi Mirim', 'SP', 1),
(12, 'Norberto', 'Motta', 'norberto@gmail.com', '31231231231', '123', 'M', '12312312312', '312312321', '12', '21', '3213', '13800414', 'Rua Maria Bonatti Bordignon', 'Vila Bordignon', 'Mogi Mirim', 'SP', 6),
(13, 'iojdjoifj', 'lksjdflk', 'lksdjflk@EHSAFOI.COM', '(12)31241-2412', '123', 'M', '123.123.123-13', '123134131', '21', '12', '1231', '13807549', 'Rua Maria Guerreiro Zorzetto', 'Jardim Planalto Mirim', 'Mogi Mirim', 'SP', 4),
(14, 'dsadasdasdas', 'sadasdasdas', 'maranh111a@gmail.com', '(32)13123-1231', '123', 'M', '321.312.312-31', '123123123', '12', '12', '1221', '13800414', 'Rua Maria Bonatti Bordignon', 'Vila Bordignon', 'Mogi Mirim', 'SP', 1),
(15, 'dsadasdasdas', 'sadasdasdas', 'maranhtestea@gmail.com', '(32)13123-1231', '123', 'M', '321.312.312-31', '123123123', '12', '12', '1221', '13800414', 'Rua Maria Bonatti Bordignon', 'Vila Bordignon', 'Mogi Mirim', 'SP', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `idosos`
--

CREATE TABLE `idosos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `dia` varchar(2) NOT NULL,
  `mes` varchar(2) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `rg` varchar(9) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `doencap` varchar(1) DEFAULT NULL,
  `descricaop` varchar(255) DEFAULT NULL,
  `doencaf` varchar(1) NOT NULL,
  `descricaof` varchar(255) DEFAULT NULL,
  `alimentacao` varchar(11) NOT NULL,
  `descricaoal` varchar(120) NOT NULL,
  `telefone1` varchar(14) NOT NULL,
  `telefone2` varchar(14) DEFAULT NULL,
  `responsavel1` varchar(255) NOT NULL,
  `responsavel2` varchar(255) DEFAULT NULL,
  `cep` varchar(8) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `id_entidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `idosos`
--

INSERT INTO `idosos` (`id`, `nome`, `dia`, `mes`, `ano`, `sexo`, `rg`, `cpf`, `doencap`, `descricaop`, `doencaf`, `descricaof`, `alimentacao`, `descricaoal`, `telefone1`, `telefone2`, `responsavel1`, `responsavel2`, `cep`, `cidade`, `rua`, `bairro`, `uf`, `foto`, `id_entidade`) VALUES
(6, 'Saudades Rafa', '21', '32', '3213', 'M', '312312321', '32132132132', 'P', 'adasdasdasdas', 'P', 'dasdasdasdas', 'S', 'dsadasdas', '23123213213', '31232132132', 'Mikael', 'sadasdasasd', '13800414', 'Mogi Mirim', 'Rua Maria Bonatti Bordignon', 'Vila Bordignon', 'SP', 'chien-ventilateur_hhg.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `remedios`
--

CREATE TABLE `remedios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `id_entidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `remedios`
--

INSERT INTO `remedios` (`id`, `nome`, `descricao`, `id_entidade`) VALUES
(2, 'teste', 'Faz bem', 2),
(4, 'teste', 'BEM', 1),
(7, 'teste', 'asdasd', 1),
(8, 'teste', 'asdasdads', 1),
(10, 'teste', 'sahyeuashu', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `remedio_idoso`
--

CREATE TABLE `remedio_idoso` (
  `id` int(11) NOT NULL,
  `id_remedio` int(11) NOT NULL,
  `id_idoso` int(11) NOT NULL,
  `dosagem` varchar(20) DEFAULT NULL,
  `horario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `remedio_idoso`
--

INSERT INTO `remedio_idoso` (`id`, `id_remedio`, `id_idoso`, `dosagem`, `horario`) VALUES
(14, 4, 6, NULL, NULL),
(15, 7, 6, NULL, NULL),
(16, 10, 6, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entidade`
--
ALTER TABLE `entidade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_entidade` (`id_entidade`);

--
-- Indexes for table `idosos`
--
ALTER TABLE `idosos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_entidadeC` (`id_entidade`);

--
-- Indexes for table `remedios`
--
ALTER TABLE `remedios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_entidaderemedio` (`id_entidade`);

--
-- Indexes for table `remedio_idoso`
--
ALTER TABLE `remedio_idoso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_remedio` (`id_remedio`),
  ADD KEY `id_idoso` (`id_idoso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entidade`
--
ALTER TABLE `entidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `idosos`
--
ALTER TABLE `idosos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `remedios`
--
ALTER TABLE `remedios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `remedio_idoso`
--
ALTER TABLE `remedio_idoso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `id_entidade` FOREIGN KEY (`id_entidade`) REFERENCES `entidade` (`id`);

--
-- Limitadores para a tabela `idosos`
--
ALTER TABLE `idosos`
  ADD CONSTRAINT `id_entidadeC` FOREIGN KEY (`id_entidade`) REFERENCES `entidade` (`id`);

--
-- Limitadores para a tabela `remedios`
--
ALTER TABLE `remedios`
  ADD CONSTRAINT `id_entidaderemedio` FOREIGN KEY (`id_entidade`) REFERENCES `entidade` (`id`);

--
-- Limitadores para a tabela `remedio_idoso`
--
ALTER TABLE `remedio_idoso`
  ADD CONSTRAINT `id_idoso` FOREIGN KEY (`id_idoso`) REFERENCES `idosos` (`id`),
  ADD CONSTRAINT `id_remedio` FOREIGN KEY (`id_remedio`) REFERENCES `remedios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
