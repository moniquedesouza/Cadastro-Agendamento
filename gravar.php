<meta charset= "utf-8">
<?php

echo "<br><br><center><body style='background-color: orange'>
      <fieldset style='width: 40%; background-color:#f2f2f2;
       border: 1px solid Orange;
       border-radius: 4px; padding-bottom: 10px;
       background-color: #ddd;
       box-shadow: 5px 5px 20px rgba(71, 71, 71, 8);'>";

echo "<font face='Arial'>";

echo "<font color='orange'><b><h3>RECUPERANDO OS DADOS</h3></b>";

echo "<br><fieldset style='border: 1px solid Orange;
       border-radius: 4px; padding-bottom: 10px;'>
       <legend><b>DADOS PESSOAIS</b></legend><br>";


    if (isset($_POST['nome'])){
		echo "<b>NOME: </b><font color='#303030'>" . $_POST['nome'];
		echo "</font><br><br>";
	}

	if (isset($_POST['email'])){
		echo "<b>E-MAIL: </b><font color='#303030'>" . $_POST['email'];
		echo "</font><br><br>";
	}

	if (isset($_POST['nomemae'])){
		echo "<b>NOME DA MÃE: </b><font color='#303030'>" . $_POST['nomemae'];
		echo "</font><br><br>";
	}

	if (isset($_POST['nomepai'])){
		echo "<b>NOME DO PAI: </b><font color='#303030'>" . $_POST['nomepai'];
		echo "</font><br><br>";
	}

	echo "<b>NACIONALIDADE: </b><font color='#303030'>" . $_POST["Nacionalidade"];
	echo "</font><br><br>";

	if (isset($_POST['universidade'])){
		echo "<b>UNIVERSIDADE: </b><font color='#303030'>" . $_POST['universidade'];
		echo "</font><br><br>";
	}

	if (isset($_POST['curso'])){
		echo "<b>CURSO: </b><font color='#303030'>" . $_POST['curso'];
		echo "</font><br><br>";
	}

	echo "</fieldset>";
	echo "<br><fieldset style='border: 1px solid Orange;
       	  border-radius: 4px; padding-bottom: 10px;'>
       	  <legend><b>DOCUMENTAÇÃO</b></legend><br>";

	if (isset($_POST['cpf'])){
		echo "<b>CPF: </b><font color='#303030'>" . $_POST['cpf'];
		echo "</font><br><br>";
	}

	if (isset($_POST['rg'])){
		echo "<b>RG: </b><font color='#303030'>" . $_POST['rg'];
		echo "</font><br><br>";
	}

	if (isset($_POST['orgaoexp'])){
		echo "<b>ORGÃO DE EXPEDIÇÃO: </b><font color='#303030'>" . $_POST['orgaoexp'];
		echo "</font><br><br>";
	}

	if (isset($_POST['dataexp'])){
		echo "<b>DATA DE EXPEDIÇÃO: </b><font color='#303030'>" . $_POST['dataexp'];
		echo "</font><br><br>";
	}

	echo "</fieldset>";
	echo "<br><fieldset style='border: 1px solid Orange;
          border-radius: 4px; padding-bottom: 10px;'>
          <legend><b>INFORMAÇÕES PARA CONTATO</b></legend><br>";

	if (isset($_POST['cep'])){
		echo "<b>CEP: </b><font color='#303030'>" . $_POST['cep'];
		echo "</font><br><br>";
	}

	echo "<b>LOGRADOURO: </b><font color='#303030'>" . $_POST['logradouro'];
	echo "</font><br><br>";

	if (isset($_POST['endereco'])){
		echo "<b>ENDEREÇO: </b><font color='#303030'>" . $_POST['endereco'];
		echo "</font><br><br>";
	}

	if (isset($_POST['numerocasa'])){
		echo "<b>NÚMERO: </b><font color='#303030'>" . $_POST['numerocasa'];
		echo "</font><br><br>";
	}

	if (isset($_POST['bairro'])){
		echo "<b>BAIRRO: </b><font color='#303030'>" . $_POST['bairro'];
		echo "</font><br><br>";
	}

	echo "<b>UF: </b><font color='#303030'>" . $_POST['uf'];
	echo "</font><br><br>";

	echo "<b>MUNICÍPIO: </b><font color='#303030'>" . $_POST['municipio'];
	echo "</font><br><br>";

	if (isset($_POST['telefone'])){
		echo "<b>TELEFONE: </b><font color='#303030'>" . $_POST['telefone'];
		echo "</font><br><br>";
	}

	echo "</fieldset>";
	echo "<br><fieldset style='border: 1px solid Orange;
           border-radius: 4px; padding-bottom: 10px;'>
           <legend><b>DATA E HORÁRIO AGENDADOS</b></legend><br>";

	if (isset($_POST['data'])){
		echo "<b>DATA: </b><font color='#303030'>" . $_POST['data'];
		echo "</font><br><br>";
	}

	if (isset($_POST['horario'])){
		echo "<b>HORÁRIO: </b><font color='#303030'>" . $_POST['horario'];
		echo "</font><br><br>";
	}

	echo "</fieldset>";

?>