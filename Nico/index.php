<!DOCTYPE html>
<html>
<head>
	<title>Santander Rio @ hery</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<header>
		<span class="logo"><img src="img/logo.jpg" alt="logo"></span>
		<nav>
			<ul>
				<li><a>Home</a></li>
				<li><a>FAQ</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section>
			<h2>Registrate</h2>
			<form method="POST">
				<input type="email" name="email" placeholder="E-mail">
				<input type="password" name="password" placeholder="Contraseña">
				<input type="password" name="password" placeholder="Re-ingresar contraseña">
				<input type="submit" value="&#11157;" class="submit">
			</form>
		</section>
		<section>
			<h2>Ingresar</h2>
			<form method="POST">
				<input type="email" name="email" placeholder="E-mail o usuario">
				<input type="password" name="password" placeholder="Contraseña">
				<input type="checkbox" name="recordar">
				<input type="submit" value="&#11157;" class="submit">
			</form>
			<p><a href="resetpsw.php">Olvidé mi contraseña</a></p>
		</section>
	</main>
</body>
</html>