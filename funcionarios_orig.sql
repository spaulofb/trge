-- phpMyAdmin SQL Dump
-- version 5.2.3-1.el9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14/05/2026 às 17:04
-- Versão do servidor: 10.5.29-MariaDB
-- Versão do PHP: 8.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `wordpress_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `wp_funcionarios`
--

CREATE TABLE `wp_funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT   ,
  `nome` varchar(100) NOT NULL,
  `funcao` varchar(100) DEFAULT NULL,
  `setor` varchar(100) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Despejando dados para a tabela `wp_funcionarios`
--

INSERT INTO `wp_funcionarios` (`id`, `nome`, `funcao`, `setor`, `telefone`, `email`, `foto`, `categoria`) VALUES
(1, 'Ana Claudia C. Souza', 'TÃ©cnica de LaboratÃ³rio', 'Secretaria', '(16) 3315-3102', 'anaclau@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Ana_Claudia-Photoroom-150x150.png', ''),
(2, 'ClÃ¡udia EmÃ­lia Vieira Wiezel', 'Especialista em LaboratÃ³rio', 'GenÃ©tica BioquÃ­mica', '(16) 3315-8573', 'cwiezel@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Claudia_w-Photoroom-150x150.png', ''),
(3, 'Daniela Dedemo Ribeiro', 'TÃ©cnica de LaboratÃ³rio', 'GenÃ©tica Humana e MÃ©dica', '(16) 3315-3256', 'danieladiribeiro@hotmail.com', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Daniela-Photoroom-150x150.png', ''),
(4, 'Elisabete M. S. Barreto Beira', 'TÃ©cnica de LaboratÃ³rio', 'GenÃ©tica BioquÃ­mica', '(16) 3315-3281', 'bete.barreto@gmail.com', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Bete-Photoroom-150x150.png', ''),
(5, 'Greice A. Molfetta', 'Especialista em LaboratÃ³rio', 'GenÃ©tica Molecular e BioinformÃ¡tica', '(16) 3315-9054', 'gamolf@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Greice-Photoroom-150x150.png', ''),
(6, 'Jairo de Souza', 'TÃ©cnico de LaboratÃ³rio', 'Biologia e GenÃ©tica de Abelhas', '(16) 3315-3077', 'jsouza@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Jairo-scaled-Photoroom-150x150.png', ''),
(7, 'Lucimar A. F. Laureano', 'TÃ©cnica de LaboratÃ³rio', 'GenÃ©tica Humana e MÃ©dica', '(16) 3315-2743', 'laflaureano@hotmail.com', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Lucimar-Photoroom-150x150.png', ''),
(8, 'Luiz Antonio F. Bezerra', 'Analista de Sistemas', 'GenÃ©tica, Melhoramento Animal e ComputaÃ§Ã£o', '(16) 3315-3135', 'lafbezer@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Luiz_bezerra-Photoroom-150x150.png', ''),
(9, 'Luiz Augusto da Costa Jr', 'TÃ©cnico de LaboratÃ³rio', 'CitogenÃ©tica e MutagÃªnese', '(16) 3315-3082', 'lacosta@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Luiz-Augusto-Photoroom-150x150.png', ''),
(10, 'Luiz Roberto Aguiar', 'TÃ©cnico de LaboratÃ³rio', 'Biologia e GenÃ©tica de Abelhas', '(16) 3315-3077', 'lraguiar@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Luiz-Roberto-Aguiar-Photoroom-150x150.png', ''),
(11, 'MÃ¡rcia Delfino Hayaxibara', 'SecretÃ¡ria', 'GenÃ©tica Humana e MÃ©dica', '(16) 3315-2598', 'mdelfino@hcrp.fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Marcia_Delfino-Photoroom-150x150.png', ''),
(12, 'MÃ¡rcio RogÃ©rio Penha', 'TÃ©cnico de LaboratÃ³rio', 'GenÃ©tica Humana e MÃ©dica', '(16) 3315-3080', 'mrpenha2000@yahoo.com.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/elementor/thumbs/marcio-Photoroom-ra77grr93tv27dm5klnmay6kj5ybeyrbi0ds9xhb30.png', ''),
(13, 'Marco Pinto Corrado', 'Especialista em LaboratÃ³rio', 'GenÃ©tica Humana e MÃ©dica', '(16) 3315-0553', 'mcorrado@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/marco_corrado-Photoroom-150x150.png', ''),
(14, 'Marcos Diogo Martins', 'Auxiliar de LaboratÃ³rio', 'GenÃ©tica e Biologia Molecular de Fungos', '(16) 3315-3078', 'mmartins@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Marcos_Diogo-Photoroom-150x150.png', ''),
(15, 'Maria do Carmo T. Canas', 'TÃ©cnica de LaboratÃ³rio', 'GenÃ©tica BioquÃ­mica', '(16) 3302-2743', 'carmo@rge.fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/09/MariaCarmo-Photoroom-150x150.png', ''),
(16, 'Mendelson Mazucato', 'Auxiliar de LaboratÃ³rio', 'GenÃ©tica e Biologia Molecular de Fungos', '(16) 3315-3224', 'mendel@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Mendelson-150x150.jpeg', ''),
(17, 'Pablo Rodrigo Sanches', 'Analista de Sistemas', 'InformÃ¡tica', '(16) 3315-3224', 'psanches@usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Pablo1-SF-150x150.jpg', ''),
(18, 'Paulo Ricardo EpifÃ¢nio', 'Auxiliar de LaboratÃ³rio', 'GenÃ©tica e EvoluÃ§Ã£o', '(16) 3315-3103', 'paulo@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Paulo_Epifanio-Photoroom-150x150.png', ''),
(19, 'Pedro R. R. Prado', 'Analista de Sistemas', 'InformÃ¡tica', '(16) 3315-3708', 'pedro@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/elementor/thumbs/Pedro-Photoroom-ra77onmifsnnlm5tj0cy7yjrxj35zk2991ef7hsevw.png', ''),
(20, 'Reginaldo Aparecido Vila', 'TÃ©cnico de LaboratÃ³rio', 'GenÃ©tica, Melhoramento Animal e ComputaÃ§Ã£o', '(16) 3315-4909', 'rvila@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Reginaldo-Photoroom-150x150.png', ''),
(21, 'Roberto da Silva Mazzuco', 'Auxiliar de ServiÃ§os Gerais', 'ServiÃ§os Gerais', '(16) 3315-3077', 'rmazzuco@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Robertinho-Photoroom-150x150.png', ''),
(22, 'RogÃ©rio A. Pereira', 'TÃ©cnico de LaboratÃ³rio', 'Biologia e GenÃ©tica de Abelhas', '(16) 3315-4578', 'rpereira@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Rogerio-Photoroom1-150x150.jpg', ''),
(23, 'Rosana MÃ¡rcia Silva Cruz', 'Auxiliar de ServiÃ§os Gerais', 'ServiÃ§os Gerais', '(16) 3315-3281', 'rcruz@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/09/Rosana-Photoroom-150x150.png', ''),
(24, 'SebastiÃ£o Paulo F. Bezerra', 'Auxiliar de LaboratÃ³rio', 'InformÃ¡tica', '(16) 3315-3076', 'spfbezer@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/paulo_bezerra-Photoroom.png', ''),
(25, 'Silvia SantÂ´anna Consiglieri', 'SecretÃ¡ria', 'Secretaria', '(16) 3315-3293', 'silvia_consiglieri@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/09/Silvia-Photoroom-150x150.png', ''),
(26, 'Susie Adriana Penha Nalon', 'SecretÃ¡ria', 'Secretaria', '(16) 3315-9098', 'susienal@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/09/Susie-Photoroom-150x150.png', ''),
(27, 'Vanderci M. Oliveira', 'Especialista em LaboratÃ³rio', 'GenÃ©tica e Biologia Molecular de Fungos', '(16) 3315-3078', 'cuca@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Cuca-Photoroom-150x150.png', ''),
(28, 'Vera Lucia C. Figueiredo', 'Especialista em LaboratÃ³rio', 'Biologia e GenÃ©tica de Abelhas', '(16) 3315-4397', 'vera@fmrp.usp.br', 'https://rge.fmrp.usp.br/wordpress/wp-content/uploads/2025/08/Vera-Photoroom-150x150.png', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `wp_funcionarios`
--
ALTER TABLE `wp_funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `wp_funcionarios`
--
ALTER TABLE `wp_funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

