SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `produtos` (
  `id_prod` int(9) NOT NULL,
  `nome_prod` varchar(30) NOT NULL,
  `setor_prod` int(9) NOT NULL,
  `custo_prod` float(10) NOT NULL,
  `venda_prod` float(10) NOT NULL,
  `estoque_prod` int(5) NOT NULL,
  `situacao_prod` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `setores` (
  `id_set` int(9) NOT NULL,
  `nome_set` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



ALTER TABLE `produtos`
  ADD PRIMARY KEY (`setor_prod`);


INSERT INTO `setores` (`id_set`, `nome_set`) VALUES (1, 'Legumes');

INSERT INTO `produtos` (`id_prod`, `nome_prod`, `custo_prod`, `venda_prod`, `estoque_prod`, `situacao_prod`, `setor_prod`) VALUES
(1, 'Batata', 2.0, 2.5, 2, 1, 1);