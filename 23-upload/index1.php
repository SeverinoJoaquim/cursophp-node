<html>
	<head>
		<title>Upload de Arquivos</title>
	</head>
	<body>
		<?php
			if(isset($_POST['enviar-formulario'])):
				$formatosPermitidos = array("png", "jpeg", "jpg", "JPG", "gif");
				$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

				if(in_array($extensao, $formatosPermitidos)):
					$pasta = "arquivos/";
					$temporario = $_FILES['arquivo']['tmp_name'];
					$novoNome = uniqid().".$extensao";

					if(move_uploaded_file($temporario, $pasta.$novoNome)):
						$mensagem = "Upload fito com sucesso!";
					else:
						$mensagem = "Erro ao temptar fazer upload!";
					endif;
				else:
					$mensagem = "Formato inválido!";
				endif;
				
			echo $mensagem;

			endif;
		?>


		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

			<input type="file" name="arquivo"><br><br>
			<input type="submit" name="enviar-formulario">
		</form>

	</body>
</html>