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

			letra = prompt("Qual a letra?")
			switch (letra){
				case "a":
				case "e":
				case "i":
				case "o":
				case "u": alert("Vogal"); break
			default: alert("Outro caso!");
			}
			
		</script>

</body>
</html>