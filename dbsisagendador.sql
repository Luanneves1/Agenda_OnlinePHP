-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/06/2024 às 23:16
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbsisagendador`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_contatos`
--

CREATE TABLE `tb_contatos` (
  `idContato` int(11) NOT NULL,
  `nomeContato` varchar(200) NOT NULL,
  `emailContato` varchar(100) NOT NULL,
  `telefoneContato` varchar(50) NOT NULL,
  `enderecoContato` varchar(255) NOT NULL,
  `sexoContato` char(1) NOT NULL,
  `dataNascimentoContato` date NOT NULL,
  `flagFavoritoContato` tinyint(1) NOT NULL,
  `nomeFotoContato` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_contatos`
--

INSERT INTO `tb_contatos` (`idContato`, `nomeContato`, `emailContato`, `telefoneContato`, `enderecoContato`, `sexoContato`, `dataNascimentoContato`, `flagFavoritoContato`, `nomeFotoContato`) VALUES
(2, 'Leticia Pereira Neves Resende', 'Resende@gmail.com', '(61)9 9999-8456', 'Rua das Palmeiras apt 25', 'F', '2023-12-04', 0, 'Astronauta.png'),
(3, 'Leticia Pereira Neves Resende ', 'Resende@gmail.com', '(61)9 9999-8456', 'Rua das Palmeiras apt 25', 'F', '2023-12-04', 0, ''),
(4, 'Maria', 'teste@gmail.com', '4554564', 'Rua das Palmeiras casa 34', 'F', '2023-12-05', 0, ''),
(7, 'lucas Sousa', 'teste@gmail.com', '(61)984797986', 'QNL 01 CONJUNTO B CASA 02', 'O', '2023-12-10', 0, ''),
(8, 'Mario Silva', 'teste@gmail.com', '4554564', 'Riacho Fundo 1', 'M', '2023-12-03', 0, ''),
(9, 'Mauricio', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das jaqueiras casa 34', 'M', '2023-01-26', 0, ''),
(10, 'Carla Sousa', 'teste@gmail.com', '98 5689-8974', 'qnl 05 casa 45', 'F', '2023-12-24', 0, ''),
(11, 'Carla Sousa', 'teste@gmail.com', '98 5689-8974', 'qnl 05 casa 45', 'F', '2023-12-24', 1, ''),
(12, 'Fernanda Moura', 'Teste@gmail.com', '77777777', 'rua das flores casa 34', 'F', '2023-06-20', 0, ''),
(13, 'Leonardo Sousa', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-08', 0, ''),
(14, 'Fernando Silva', 'Teste@gmail.com', '77777777', 'rua das flores casa 34', 'M', '2023-12-06', 0, ''),
(15, 'Luan Carvalho', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das jaqueiras casa 34', 'M', '2017-01-02', 0, ''),
(16, 'Leticia Rezende ', 'Teste@gmail.com', '(61) 9 8755-8956', 'rua das flores casa 34', 'F', '2015-02-19', 0, ''),
(17, 'Luisa Pereira', 'Teste@gmail.com', '(61) 9 8755-8956', 'rua das flores casa 34', 'F', '2023-12-30', 0, ''),
(18, 'Matheus Oliveira', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-17', 0, ''),
(19, 'joão da silva ', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-27', 0, ''),
(20, 'Luan Carvalho pereira', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-05', 0, ''),
(21, 'Hemerson Silva', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-26', 0, ''),
(22, 'Bernardo Matheus soysa', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-11-01', 0, ''),
(23, 'julio balestrin de sousa', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-11-07', 0, ''),
(24, 'Bianca Maria', 'Teste@gmail.com', '77777777', 'rua das flores casa 34', 'F', '2023-12-14', 0, ''),
(25, 'Mauricio', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-05', 0, ''),
(26, 'Leonardo Lima', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-04', 0, ''),
(27, 'LUAN SOUSA', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-11-28', 0, ''),
(28, 'Carla Maria ', 'Teste@gmail.com', '77777777', 'rua das jaqueiras casa 34', 'F', '2024-01-02', 0, ''),
(29, 'Felipe augusto', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das jaqueiras casa 34', 'M', '2023-12-19', 0, ''),
(30, 'carlos pereira', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-05', 0, ''),
(31, 'Felipe matheus', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-11-29', 0, ''),
(32, 'Lucas sousa', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-11-28', 0, ''),
(33, 'Mauricio Pedro', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-04', 0, ''),
(34, 'Miguel Pereira', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-03', 0, ''),
(35, 'Clara De sousa', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'F', '2023-12-19', 0, ''),
(36, 'Leando felipe ', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das jaqueiras casa 34', 'M', '2023-12-23', 0, ''),
(37, 'Bruno souza', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-05', 0, ''),
(38, 'Welington', 'Teste@gmail.com', '(61) 9 8755-8956', 'rua das jaqueiras casa 34', 'M', '2023-11-28', 0, ''),
(39, 'Maria Socorro', 'Teste@gmail.com', '(61) 9 8755-8956', 'rua das jaqueiras casa 34', 'F', '2023-11-29', 0, ''),
(40, 'Leandra Lima', 'Teste@gmail.com', '(61) 9 8755-8956', 'rua das jaqueiras casa 34', 'F', '2024-01-06', 0, ''),
(41, 'Luan Lima', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-26', 0, ''),
(42, 'Leonidas Palma ', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-05', 0, ''),
(43, 'Mauro de sousa castro', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-05', 0, ''),
(44, 'Maria Socorro PEREIRA', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'F', '2023-11-27', 0, ''),
(45, 'Maria de Jesus ', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'F', '2023-12-04', 0, ''),
(46, 'Elaine Sousa ', 'Teste@gmail.com', '(61) 9 8755-8956', 'rua das jaqueiras casa 34', 'F', '2023-12-28', 0, ''),
(47, 'Clarice', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'F', '2023-12-05', 0, ''),
(48, 'Charllote Pereira Neves', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'F', '2023-12-19', 0, ''),
(49, 'Charlote Gata', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das jaqueiras casa 34', 'F', '2023-12-19', 0, ''),
(50, 'Tesoura de OURO', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-11-27', 0, ''),
(51, 'Antonio Canova', 'Teste@gmail.com', '(61) 9 8156-8956', 'Italy', 'M', '1901-01-07', 0, ''),
(52, 'Jack Pereira', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2023-12-05', 0, ''),
(53, 'Goldilocks and Tree bear ', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'F', '2023-11-28', 0, ''),
(54, 'Cachos Dourados', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'F', '2023-12-18', 0, ''),
(55, 'Luan Sousa Silva ', 'Silva@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2001-06-04', 0, ''),
(57, 'leona', 'Teste@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2024-06-03', 0, ''),
(59, 'Ana carolina', 'luan@gmail.com', '8787', 'rua das flores casa 34  L548', 'M', '2024-06-04', 0, ''),
(61, 'Mauricio Lima Sousa Teixeira', 'TesteLima@gmail.com', '(61) 9 8156-8956', 'rua das jaqueiras casa 34', 'M', '2024-06-11', 0, ''),
(62, 'Marcos de Melo ', 'TesteMELO@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2024-06-04', 0, 'marcosDeMelo.jpg'),
(63, 'Luan Carvalho Lima Araujo', 'TesteLuan@gmail.com', '(61) 9 8156-8956', 'rua das flores casa 34', 'M', '2024-05-28', 0, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_contatos`
--
ALTER TABLE `tb_contatos`
  ADD PRIMARY KEY (`idContato`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_contatos`
--
ALTER TABLE `tb_contatos`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
