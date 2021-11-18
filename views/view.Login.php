<?php require 'view.Header.php';?>
<link rel="stylesheet" href="css/estilos.css">

<div class="form-style-9">
		<h1 class="titulo">Iniciar Sesión</h1>
		
		<hr class="border">

		<form class="form-style-9" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<div>
				<ul>
					<label for="nombre">Ingrese su nombre de Usuario</label>
					<li>
						<input class="usuario" type="text" name="nombre" placeholder="Ingrese nombre de Usuario" required>
					</li>

					<label for="password">Ingrese su password</label>
					<li>
						<input class="password_btn" type="password" name="password" placeholder="Password" required>
					</li>
					<li>
						<input type="submit" value="Ingresar">
					</li>
				</ul>
			</div>

			
		</form>

		<p class="texto-registrate">
			¿ Aun no tienes cuenta ?
			<a href="registrate.php">Regístrate</a>
		</p>

	</div>

<?php 
require 'view.Footer.php';
?>