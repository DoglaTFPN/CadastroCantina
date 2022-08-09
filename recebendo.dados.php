<?php  


$con = mysqli_connect("localhost","root","","Cantina");
	if (mysqli_connect_errno()) {
		echo "Erro: ".mysqli_connect_error();

	}else{

		$sql ="INSERT INTO Produtos Values ('$_POST[codigo]','$_POST[item]','$_POST[qtde]')";

	if (mysqli_query($con,$sql)) {
		
		echo "Item cadastrado com sucesso!!!";

	}else{

		echo "Erro ao inserir: ".mysqli_error($con);
	}

	mysqli_close($con);

	}


?>