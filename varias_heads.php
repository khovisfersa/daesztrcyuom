<html> 
	<head>
		aqui é a cabeça da pagina. Muahahahaha
	</head>
	<body>
		<? php
			foreach(range(0,5) as $num)
			{
				echo '<h'.$num.'>'. "letra ".$num.'</h'.$num.'>';
			}
		?>
	</body>



</html>