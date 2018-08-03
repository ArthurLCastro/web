# Exibir dados MySQL em Página HTML - PHP
Este repositório está destinado a armazenar o procedimento e os códigos usados para exibir os dados de uma tabela MySQL em uma página HTML usando PHP.

## Objetivo:
Tem como objetivo exibir os dados armazenados em uma página Web, sendo este o primeiro passo para posterior alteração dos códigos para uso em Projetos de IoT, onde os dados capturados pelos sensores serão armazenados no banco de dados e mostrados em uma página HTML pelo usuário.

## Pré-requisitos:
* Ter instalado:
	1. O Banco de Dados MySQL com acesso à manipulação de Databases
	2. Apache Server
	3. PHP

## O que será feito?
* Configuração do MySQL
	1. Criação da Base de Dados cadastro
	2. Execução do script .sql para a criação da Tabela "pessoas"
	3. Inserção de dados à Tabela
* Cópia dos códigos para o servidor Apache
* Testes de Funcionamento

## Passo 1: Configuração do MySQL

Para a criação deste tutorial foi utilizado o seguinte login para o MySQL:

**Usuário:** root

**Senha:** root

A primeira etapa é modificar o código [conexao.php](https://github.com/ArthurLCastro/web/blob/master/Exibir%20dados%20MySQL%20em%20pagina%20Web/html/conn/conexao.php), colocando o seu usuário e senha para o MySQL.

* **Criação da Base de Dados:**

Deve-se vizualizar quais os *databases* já estão criados, isto pode ser feito com o comando:

	mysql> SHOW DATABASES;

Algo como isto deve ter aparecido:

	mysql> SHOW DATABASES;
	+--------------------+
	| Database           |
	+--------------------+
	| information_schema |
	| mysql              |
	| performance_schema |
	| phpmyadmin         |
	| sys                |
	+--------------------+
	5 rows in set (0,00 sec)

Iremos agora criar a base de dados **cadastro** usando o comando:

	mysql> CREATE DATABASE cadastro DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;

Se vizualizarmos novamente os *databases* criados, **cadastro** agora é um deles.

Para selecionar a base de dados criada, deve-se fazer:

	mysql> USE cadastro;

Desta maneira, estamos utilizando a base de dados **Monitoramento** e começaremos a criação da tabela.

* **Criação da Tabela:**

Para a criação da tabela pode-se digitar o comando diretamente no terminal ou executar o script [tabela.sql](https://github.com/ArthurLCastro/web/blob/master/Exibir%20dados%20MySQL%20em%20pagina%20Web/html/conn/tabela.sql)

	mysql> SOURCE /local-em-que-o-script-esta-salvo/tabela.sql;

* **Verificação:**

Construímos então o **database** "cadastro" que contém uma **tabela** "pessoas" com quatro colunas: id, nome, email e data_de_cadastro.

Para verificar, podemos executar o comando:

	mysql> DESC pessoas;

* **Inserção de dados à Tabela "pessoas":**

Para adicionar os dados de uma pessoa na tabela, deve-se executar o seguinte comando:

	mysql> INSERT INTO pessoas (id, nome, email, data_de_cadastro) VALUES (DEFAULT, 'Arthur Castro', 'arthur@dominio.com', DEFAULT);

Como teste, caso você não queira digitar o comando acima, deixei o script [dados.sql](https://github.com/ArthurLCastro/web/blob/master/Exibir%20dados%20MySQL%20em%20pagina%20Web/html/conn/dados.sql) que possui 3 linhas de dados para teste.

<img src="https://github.com/ArthurLCastro/web/blob/master/Exibir%20dados%20MySQL%20em%20pagina%20Web/Imagens/MySQL.png" width="70%">

### Passo 2: Cópia dos códigos para o servidor Apache

Tendo o LAMP instalado, devem ser copiados para o servidor Apache (no caso do uso de Linux o diretório é /var/www/html) todos os arquivos que estão em [html](https://github.com/ArthurLCastro/web/tree/master/Exibir%20dados%20MySQL%20em%20pagina%20Web/html):
* [index.php](https://github.com/ArthurLCastro/web/blob/master/Exibir%20dados%20MySQL%20em%20pagina%20Web/html/index.php)
* [teste-conexao.php](https://github.com/ArthurLCastro/web/blob/master/Exibir%20dados%20MySQL%20em%20pagina%20Web/html/teste-conexao.php)
* A pasta [conn](https://github.com/ArthurLCastro/web/tree/master/Exibir%20dados%20MySQL%20em%20pagina%20Web/html/conn) com seu conteúdo

### Passo 3: Testes de Funcionamento

* **Teste de Conexão com o MySQL:**
Antes do teste de vizualização dos dados do banco na página, devemos testar a conexao com o banco acessando através do navegador:

	localhost/teste-conexao.php

**Obs.:** No lugar de *localhost* pode-se digitar o seu IP, como no exemplo abaixo:

	192.168.0.170/teste-conexao.php

Caso tenha sido exibido apenas "Página de Testes" no navegador, a conexão foi bem sucedida e podemos prosseguir. Caso algum erro tenha aparecido em seu navegador, você deve procurar corrigir no código [conexao.php](https://github.com/ArthurLCastro/web/blob/master/Exibir%20dados%20MySQL%20em%20pagina%20Web/html/conn/conexao.php) que provavelmente não está com o seu usuário e senha do MySQL corretos.

<img src="https://github.com/ArthurLCastro/web/blob/master/Exibir%20dados%20MySQL%20em%20pagina%20Web/Imagens/Teste-Conexao.png" width="70%">

* **Exibição dos dados na Página Web:**

Se tudo foi feito corretamente, aparecerão os dados da tabela **pessoas** no navegador ao acessar:

	localhost/index.php
	
<img src="https://github.com/ArthurLCastro/web/blob/master/Exibir%20dados%20MySQL%20em%20pagina%20Web/Imagens/index.png" width="70%">

## Referências:
[Exibir dados ou registros do banco de dados MySQL com PHP - Zero Bugs](https://www.youtube.com/watch?v=TuvO79zyzew)
