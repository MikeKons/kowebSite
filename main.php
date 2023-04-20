<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION['rango'])){
        
        if($_SESSION['rango'] == 1){
            
            header('location: aspirante_formulario.php');
        
        }else if($_SESSION['rango'] == 2){
            
            header('location: estudiante_menu.php');
        }
    }
?>
<html>
<head>
	<title>Menu Principal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<header class="bg-dark text-white py-2">
		<div class="container d-flex justify-content-between align-items-center">
			<div class="d-flex align-items-center">
				<img src="img/lgo.jpeg" alt="Logo" class="mr-2">
				<h5 class="mb-0">Menu Principal</h5>
			</div>
			<div>Bienvenido, <span id="user">Juan</span>
            <form method="POST" action="php/logout.php" class="ml-3">
                    <button type="submit" class="btn btn-outline-light">Cerrar Sesión</button>
                </form></div>
		</div>
	</header>
	<nav class="bg-light">
		<div class="container">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Productos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Servicios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contacto</a>
				</li>
			</ul>
		</div>
	</nav>
	<main class="container my-4">
		<h1 class="text-center mb-4">Bienvenido al sitio web</h1>
		<p>Este es el panel central del sitio web. Aquí se mostrará el contenido de las distintas secciones.</p>
	</main>
	<footer class="bg-dark text-white py-2 text-center">
		Derechos Reservados &copy; 2023
	</footer>
</body>
</html>
