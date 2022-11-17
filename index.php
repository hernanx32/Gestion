<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?PHP ECHO "Hola Mundo...."; 
	
	try {
		$mbd = new PDO('mysql:host=localhost;dbname=bd', 'dba', 'gestion');
		foreach($mbd->query('SELECT * from usuario') as $fila) {
			print_r($fila);
		}
		$mbd = null;
	} catch (PDOException $e) {
		print "¡Error!: " . $e->getMessage() . "<br/>";
		die();
		
	}


	?>
	
	
	
</body>
</html>