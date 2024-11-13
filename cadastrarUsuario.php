<?php
include_once("conexao.php");

			if ($conexao -> connect_errno) {
				echo "Failed to connect to MySQL: " . $conexao -> connect_error;
				exit();
			} else {
				// Evita caracteres epsciais (SQL Inject)
				$nome = $conexao -> real_escape_string($_POST['nome']);
				$email = $conexao -> real_escape_string($_POST['email']);

				$sql = "INSERT INTO professor
							(`nome`, `email`)
						VALUES
							('".$nome."', '".$email."');";
echo $sql;
				$resultado = $conexao->query($sql);
				
				$conexao -> close();
				header('Location: cadastroUsuario.php?sucesso=1', true, 301);
			}
?>	