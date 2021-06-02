<?php
	$conexao = mysqli_connect("localhost", "root", "");
	
	if(!$conexao){
		die("Erro de conexao ".mysqli_connect_error());
	} else {
		echo "BD conectado" . "<br>";
	}
	
	$bd = mysqli_select_db($conexao,"bdestagio");
	
	if(empty($bd)){
		
		echo "Banco de dados não encontrado" . "<br>";
		
		$bd = "CREATE DATABASE bdestagio DEFAULT CHARSET=utf8";
		
		$CriaBD = mysqli_query($conexao, $bd);
		
		if(!$CriaBD){
			echo "Erro ao criar o banco de dados" . "<br>";
		} else {
			echo "Banco de dados criado com sucesso" . "<br>";
		}
		
	} else {
		
		echo "Banco de dados encontrado" . "<br>";
		
		$tabela = "SELECT * FROM aluno";
		$BuscaTabela = mysqli_query($conexao, $tabela);
		
		if(!$BuscaTabela){
			echo "Tabela não encontrada" . "<br>";
			
			$MinhaTabela = "CREATE TABLE Aluno(
			id int(100) NOT NULL AUTO_INCREMENT,
			cpf int(11) NOT NULL,
			nome varchar(40) NOT NULL,
			instituicao varchar(60) NOT NULL,
			curso varchar(40) NOT NULL,
			email varchar(60) NOT NULL,
			senha varchar(20) NOT NULL,
			PRIMARY KEY(id)
			)DEFAULT CHARSET=utf8";
			
			$CriaTabela = mysqli_query($conexao, $MinhaTabela);
			
			if(!$CriaTabela){
				echo "Erro durante a criação da tabela" . "<br>";
			} else {
				echo "Tabela criada com sucesso" . "<br>";
			}	
		}

		echo "Banco de dados encontrado" . "<br>";

		$tabela = "SELECT * FROM concedente";
		$BuscaTabela= mysqli_query($conexao, $tabela);

		if(!$BuscaTabela){
			echo "Tabela não econtrada" . "<br>";

			$MinhaTabela = "CREATE TABLE Concedente(
			id int(100) NOT NULL AUTO_INCREMENT,
			nome varchar(40) NOT NULL,
			cpf int(11) NOT NULL,
			empresa varchar(60) NOT NULL,
			email varchar(60) NOT NULL,
			senha varchar(20) NOT NULL,
			PRIMARY KEY(id)
			)DEFAULT CHARSET=utf8";

			$CriaTabela = mysqli_query($conexao, $MinhaTabela);
						
			if(!$CriaTabela){
				echo "Erro durante a criação da tabela" . "<br>";
			} else {
				echo "Tabela criada com sucesso" . "<br>";
			}	
		}

		$tabela = "SELECT * FROM noticias";
		$BuscaTabela= mysqli_query($conexao, $tabela);

		if(!$BuscaTabela){
			echo "Tabela não econtrada" . "<br>";

			$MinhaTabela = "CREATE TABLE `noticias` (
			  `id` int(5) NOT NULL,
			  `nome` char(30) NOT NULL,
			  `sobrenome` char(30) NOT NULL,
			  `cidade` char(50) NOT NULL,
			  `estado` char(2) NOT NULL,
			  `email` char(80) DEFAULT NULL,
			  `data` date NOT NULL,
			  `hora` time NOT NULL,
			  `titulo` char(100) NOT NULL,
			  `subtitulo` char(200) DEFAULT NULL,
			  `texto` text NOT NULL,
			  `ver` char(3) DEFAULT 'off')
			  )DEFAULT CHARSET=utf8";

			$CriaTabela = mysqli_query($conexao, $MinhaTabela);
						
			if(!$CriaTabela){
				echo "Erro durante a criação da tabela" . "<br>";
			} else {
				echo "Tabela criada com sucesso" . "<br>";
			}	
		}
	}
	
	mysqli_close($conexao);
	
?>
