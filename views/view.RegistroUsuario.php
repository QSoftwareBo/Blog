<?php
require 'view.Header.php';
?>

<div class="form-style-9">
		<h1 class="titulo">Regístrate</h1>
		
		<hr class="border">

		<form class="form-style-9" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				<ul>
					<label for="name">Ingresa tu nombre completo</label>
					<li>
					 	<input  type="text" id="name" name="usuario" placeholder="Nombre">
					</li>	
					
					<label for="password">Ingresa tu contraseña</label>
					<li>
						<input  type="password" name="password" id="password" placeholder="Contraseña">
					</li>
					
					<label for="password2">Repite tu contraseña</label>
					<li>
						<input  type="password" id="password2"name="password2" placeholder="Repite la contraseña">
					</li>
					<li>
						<input type="submit" value="Registrarse">
					</li>
				</ul>
			<!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>

		<p class="texto-registrate">
			¿ Ya tienes cuenta ?
			<a href="../Login.php">Iniciar Sesión</a>
		</p>

	</div>

<?php
require 'view.Footer.php';
?>
