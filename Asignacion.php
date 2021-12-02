<!DOCTYPE HTML>
<html>
	<head>
		<title>Tareas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">Bienvenido</a></h1>
					<nav id="nav">
						
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Docente</h2>
							<p>En esta seccion<br />
							Podra crear las asignaciones para sus alumnos.</p>
						</header>
						<span class="image"><img src="images/Docen.jpeg" alt="10px" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/Docen2.jpeg" alt="" /></span>
					<div class="content">
						<div class="container">
							<form action="check.php" method="post" >
							  <div class="row">
							  	<div class="col-4 col-12-medium">
							  		<header>
							  			<h2>Crear asignacion</h2>
							  			<p><a><input type="submit" value="crear" name="asg"></a></p> 
							  		</header>
							  	</div>
							  	<div class="col-4 col-12-medium">
							  		<p>Nombre de la asignacion</p>
							  		<P><input type="text" name="tareaa_nom"></P>
							  	</div>
							  	<div class="col-4 col-12-medium">
							  		<p>Material de apoyo</p>
							  		<p><input type="file" name="" id="material"></p>
							  	</div>
							  </div>
						    </form>
						</div>
					</div>
				</section>


			<!-- Two -->
			<footer id="footer">
			<form action="return.php" method="post" >
							  <div class="row">
								<table>
									<tr>
										<td>ID</td>
										<td>Asignacion</td>
									</tr>
									<?php
									$dbhost = "localhost";
									$dbuser = "root";
									$dbpass = "";
									$dbname = "testbd";
									$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
									if (!$conn) {
	
										die("No hay conexion: " . mysqli_connect_error());
									}
									$sql = "SELECT * FROM tareas";
									$result = mysqli_query($conn, $sql);
									while ($mostrar = mysqli_fetch_array($result)) {
									?>
	
										<tr>
											<td  ><?php echo $mostrar['ID'] ?></td>
											<td  ><?php echo $mostrar['ASIGNACION'] ?></td>
										</tr>
									<?php
									}
									?>
	
								</table>
							  </div>
						    </form>
				</footer>

			<!-- Footer -->
				<footer id="footer">
					<p>Proyecto de asignacion y entrega de tareas</p>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


	</body>
</html>