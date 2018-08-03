CREATE TABLE IF NOT EXISTS `pessoas`(
	id int NOT NULL AUTO_INCREMENT,
	`nome` varchar(30) NOT NULL,
	email varchar(30) NOT NULL,
	data_de_cadastro timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
) DEFAULT CHARSET = utf8;