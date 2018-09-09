<!DOCTYPE html>
<html>
<head>
	<title>Santander Rio @ hery</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body><div id="totalwrap">
	<header>
		<span class="logo"><img src="img/logo.png" alt="logo"></span>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="FAQ.php">FAQ</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section>
			<h2>Registrate</h2>
			<form method="POST">
				<input type="email" name="email" placeholder="E-mail" required class="txtbox">
				<input class="txtbox" type="password" name="password" placeholder="Contraseña" required>
				<input type="password" class="txtbox" name="password" placeholder="Re-ingresar contraseña" required>
				<input type="submit" value="&#11157;" class="submit">
			</form>
		</section>
		<section>
			<h2>Ingresar</h2>
			<form method="POST">
				<input type="email" name="email" class="txtbox" placeholder="E-mail o usuario"required>
				<input type="password" name="password" class="txtbox" placeholder="Contraseña"required>
				<input type="checkbox" name="recordar">
				<input type="submit" value="&#11157;" class="submit">
			</form>
			<p><a href="resetpsw.php">Olvidé mi contraseña</a></p>
		</section>
	</main>
	<footer>
		<p>hery &copy; 2018</p>
	</footer>
</div>
</body>
</html>