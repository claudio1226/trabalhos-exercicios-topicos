<html>
	<head>
		<title>
		</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	
<body>
		
<?php
include 'menu_conexao.php';

?>
	
<script type="text/javascript">
	function somar(){
		var txt1 = document.getElementById("txt1").value;
		var txt2 = document.getElementById("txt2").value;
		resultado = parseInt(txt1) + parseInt(txt2);
		
		document.getElementById("resultado").value = resultado;
	}
</script>	
<form>
	<label name="">Valor1</label>
	<input type="text" id="txt1"><br/>
	
	<label name="">Valor2</label>
	<input type="text" id="txt2"><br/>
	
	<label name="">Resultado</label>
	<input type="text" id="resultado">
	<br/>
	
	<button  onclick="somar()">somar</button>
</form>

</body>
</html>