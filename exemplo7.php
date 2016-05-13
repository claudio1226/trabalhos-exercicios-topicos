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

			farol = prompt("Qual a cor?")
			switch (farol){
				case "vermelho": alert("Pare"); break
				case "amarelo": alert("Atencao"); break
				case "verde": alert("Prossiga"); break
			default: alert("cor ilegal");
			}
			
		</script>

</body>
</html>