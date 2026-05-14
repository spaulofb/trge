--
--  Banco de Dados - trge
--
-- Criar o banco de dados
CREATE DATABASE IF NOT EXISTS trge CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE trge;

-- Criar a tabela chefia
CREATE TABLE IF NOT EXISTS chefia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    anoini INT(4) NOT NULL,
    anofin INT(4) NOT NULL,
    chefe VARCHAR(255) NOT NULL,
    vice VARCHAR(255) DEFAULT NULL,
    descr VARCHAR(255) NOT NULL,
    fotochefe VARCHAR(500) DEFAULT NULL,
    fotovice VARCHAR(500) DEFAULT NULL
) ENGINE=InnoDB;


INSERT INTO chefia (anoini, anofin, chefe, vice, descr) VALUES
(2024, 2028, 'Wilson Araújo da Silva Junior', 'Ester Silveira Ramos', 'Chefe do Departamento de Genética'),
(2020, 2024, 'Ester Silveira Ramos', 'Nilce Maria Martinez Rossi', 'Chefe do Departamento de Genética'),
(2016, 2020, 'Aguinaldo Luiz Simões', 'Wilson Araújo da Silva Junior', 'Chefe do Departamento de Genética'),
(2012, 2016, 'Wilson Araújo da Silva Junior', 'Lucia Regina Martelli', 'Chefe do Departamento de Genética'),
(2008, 2012, 'Aguinaldo Luiz Simões', 'Wilson Araújo da Silva Junior', 'Chefe do Departamento de Genética'),
(2007, 2008, 'Nilce Maria Martinez Rossi', 'Aguinaldo Luiz Simões', 'Chefe do Departamento de Genética'),
(2006, 2007, 'Nilce Maria Martinez Rossi', 'Eucleia Primo Betioli Contel', 'Chefe do Departamento de Genética'),
(2005, 2006, 'Moacyr Antonio Mestriner', 'Eucleia Primo Betioli Contel', 'Chefe do Departamento de Genética'),
(2003, 2005, 'Nilce Maria Martinez Rossi', 'Eucleia Primo Betioli Contel', 'Chefe do Departamento de Genética'),
(2001, 2003, 'Nilce Maria Martinez Rossi', 'João Monteiro de Pina Neto', 'Chefe do Departamento de Genética'),
(1997, 2001, 'Eucleia Primo Betioli Contel', 'Nilce Maria Martinez Rossi', 'Chefe do Departamento de Genética'),
(1995, 1997, 'Francisco Alberto de Moura Duarte', 'Moacyr Antonio Mestriner', 'Chefe do Departamento de Genética'),
(1991, 1995, 'Moacyr Antonio Mestriner', 'Eucleia Primo Betioli Contel', 'Chefe do Departamento de Genética'),
(1987, 1991, 'Francisco Alberto de Moura Duarte', 'Moacyr Antonio Mestriner', 'Chefe do Departamento de Genética'),
(1984, 1987, 'Iris Ferrari', 'Moacyr Antonio Mestriner', 'Chefe do Departamento de Genética'),
(1981, 1984, 'Francisco Alberto de Moura Duarte', 'Iris Ferrari', 'Chefe do Departamento de Genética'),
(1979, 1981, 'Warwick Estevam Kerr', 'Iris Ferrari', 'Chefe do Departamento de Genética'),
(1979, 1979, 'Humberto de Queiroz Menezes', 'Iris Ferrari', 'Chefe do Departamento de Genética'),
(1975, 1978, 'Iris Ferrari', 'Geraldo Garcia Duarte', 'Chefe do Departamento de Genética'),
(1974, 1975, 'Warwick Estevam Kerr', 'Maria Aparecida de Paiva Franco', 'Chefe do Departamento de Genética'),
(1970, 1974, 'Warwick Estevam Kerr', 'Geraldo Garcia Duarte', 'Chefe do Departamento de Genética');


