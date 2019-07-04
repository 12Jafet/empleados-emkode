<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/js.js"></script>


</head>
<body style="background: rgba(241,241,241,1);">
	<nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Features</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Pricing</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			</li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<br><br><br><br>
		<br>
		<div class='row m-0 justify-content-center'>
			<h1 style="color: #888;">Empleados</h1>
		</div>
		<br>
		<!-- Buscar por campo -->
		<form method="" name="formSearch" id="formSearch">
			<div class="row" style="padding-left:20px;padding-right:20px">
				<input class="col-3 form-control" type="text" id="keyWord" name="keyWord">
				<input class="col btn btn-dark" type="button" name="filter" id="search" value="Buscar">
				
				<label class=" offset-1" for="idFilter">ID</label>
				<input class="col" type="radio" style="margin-top:5px;margin-left:5px" value="id" name="filter" id="idFilter" checked>
				<label class="" for="nameFilter">Nombre</label>
				<input class="col" type="radio" style="margin-top:5px;margin-left:5px" value="name" name="filter" id="nameFilter" checked>
				<label class="" for="last_nameFilter">Apellido</label>
				<input class="col" type="radio" style="margin-top:5px;margin-left:5px" value="last_name" name="filter" id="last_nameFilter">
				<label class="" for="emailFilter">Correo</label>
				<input class="col" type="radio" style="margin-top:5px;margin-left:5px" value="email" name="filter" id="emailFilter">
				<label class="" for="phoneFilter">Teléfono</label>
				<input class="col" type="radio" style="margin-top:5px;margin-left:5px" value="phone" name="filter" id="phoneFilter">
				

			</div>
		</form>
		<br>
		<!-- Tabla -->
		<form method="" name="" id="">
			<table class="table table-striped table-dark" id="tabla" >

			</table>			
        </form>
        
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal" id="modalInsert">
            Agregar nuevo empleado
        </button>

        <form method="POST" name="formEmpleados" id="formEmpleados"> 
            <!-- Modal formulario -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Empleado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <label class="col-3" for="">Nombre</label>
                            <input class="col-7" type="text" name="name" id="name">
                            <input type="hidden" name="id" id="id">
                        </div>
                        <br>
                        <div class="row">
                            <label class="col-3" for="">Apellido</label>
                            <input class="col-7" type="text" name="last_name" id="last_name">
                        </div>
                        <br>
                        <div class="row">
                            <label class="col-3" for="">Correo</label>
                            <input class="col-7" type="text" name="email" id="email">
                        </div>
                        <br>
                        <div class="row">
                            <label class="col-3" for="">Teléfono</label>
                            <input class="col-7" type="text" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-dark" id="save">Guardar</button>
                    </div>
                    </div>
                </div>
            </div>
        </form>
</div>	
		<br><br><br><br><br><br><br><br><br>
		<!-- Footer -->
<footer class="page-footer text-center font-small mt-4 wow fadeIn" style="background-color: #343a40">
		<br><br>
<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5 style="color:white">Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5 style="color:white">Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5 style="color:white">Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a style="text-decoration: none;color:gray" href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>

			</div>
			
			
		</div>
    <!--Copyright-->
    <div class="footer-copyright py-3" style="color:white">
        © 2019 Copyright
    </div>
</body>
</html>