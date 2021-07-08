CREATE TABLE `Clientes` ( 
`id_cliente` INT NOT NULL AUTO_INCREMENT ,
`nome_razao` VARCHAR(55) NOT NULL , 
`fantasia` VARCHAR(55) NULL , 
`cpf_cnpj` VARCHAR(14) NOT NULL , 
`ie` INT NULL , 
`data_nascimento` DATE NOT NULL , 
`sexo` VARCHAR(13) NOT NULL , 
`id_endereco` INT NOT NULL , 
PRIMARY KEY (`id_cliente`), 
UNIQUE `cpf_cnpj` (`cpf_cnpj`(14)));

CREATE TABLE `Enderecos` ( 
`id_endereco` INT NOT NULL AUTO_INCREMENT , 
`logradouro` VARCHAR(100) NOT NULL , 
`numero` VARCHAR(10) NOT NULL ,
`bairro` VARCHAR(55) NOT NULL , 
`id_cidade` INT NOT NULL , 
`cep` VARCHAR(8) NOT NULL , 
PRIMARY KEY (`id_endereco`));

CREATE TABLE `Cidades` ( 
`id_cidade` INT NOT NULL AUTO_INCREMENT , 
`nome` VARCHAR(55) NOT NULL , 
`uf` VARCHAR(2) NOT NULL , 
PRIMARY KEY (`id_cidade`));

ALTER TABLE `Clientes` ADD FOREIGN KEY (`id_endereco`)
  REFERENCES `Enderecos`(`id_endereco`);

ALTER TABLE `Enderecos` ADD FOREIGN KEY (`id_cidade`)
  REFERENCES `Cidades`(`id_cidade`);

ALTER TABLE `clientes` CHANGE `sexo` `sexo` VARCHAR(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;

ALTER TABLE `clientes` CHANGE `data_nascimento` `data_nascimento` DATE NULL;

ALTER TABLE `clientes` CHANGE `ie` `ie` VARCHAR(14) NULL DEFAULT NULL;

INSERT INTO `Cidades` (`id_cidade`, `nome`, `uf`) VALUES 
('1', 'Capão da Canoa', 'RS'), 
('2', 'Xangri-lá', 'RS'),
('3', 'Porto Alegre', 'RS'),
('4', 'Florianópolis', 'SC'),
('5', 'São Paulo', 'SP'),
('6', 'Rio de Janeiro', 'RJ');

INSERT INTO `enderecos` (`id_endereco`, `logradouro`, `numero`, `bairro`, `id_cidade`, `cep`) VALUES
('1', 'rua numero 1', '1', 'bairro 1', '1', '95555000'),
('2', 'rua numero 2', '2', 'bairro 2', '2', '95588000'),
('3', 'rua numero 3', '3', 'bairro 3', '3', '04870470'),
('4', 'rua numero 4', '4', 'bairro 4', '4', '35182016'),
('5', 'rua numero 5', '5', 'bairro 5', '5', '08090284'),
('6', 'rua numero 6', '6', 'bairro 6', '6', '05407002');

INSERT INTO `clientes` (`id_cliente`, `nome_razao`, `fantasia`, `cpf_cnpj`, `ie`, `data_nascimento`, `sexo`, `id_endereco`) VALUES 
('1', 'Nome Pessoa 1', NULL, '55244430033', NULL, '1997-11-20', 'Masculino', '1'),
('2', 'Nome Pessoa 2', NULL, '37956312035', NULL, '1998-11-20', 'Feminino', '2'),
('3', 'Nome Pessoa 3', NULL, '02070436047', NULL, '1999-11-20', 'Masculino', '3'),
('4', 'Nome Empresa 4', 'nome fantasia 4', '91741373000179', '387136932455', NULL, NULL, '4'),
('5', 'Nome Empresa 5', 'nome fantasia 5', '71481297000100', '80979851', NULL, NULL, '5'),
('6', 'Nome Empresa 6', 'nome fantasia 6', '79031247000125', '0191427780', NULL, NULL, '6');
