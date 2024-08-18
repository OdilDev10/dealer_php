<?php 
include 'php/header.php';


?>
	
	<!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->	

	
	<div class="main">

		<!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	

		<section class="container content clearfix">
			
				<h3 class="LogoEloisa">Login Eloisa</h3>
				<h3>Inicia Sesion</h3>
				
				<div class="eight columns alpha">
					
				<!-- 	<div class="form-account">
						
						<div class="form-heading">
							<h3>Registrarse</h3>
						</div> .form-heading
						
						<form action="php/registro.php" method="POST" class="form-entry">

								<label>Email:</label>
								<input type="text" required name="email">
							<p>
								<label>Usuario:</label>
								<input type="text" name="usuario" required min="3" />
							</p>

							<p>
								<label>Password:</label>
								<input type="password" name="password" required />

							</p>
							<p>
								<label>Repeat Password:</label>
								<input type="password" name="password2" required />

							</p>
							<button type="submit" name="Enviar" class="button orange">Registro</button>
						</form>  .form-entry
						
					</div>.form-account-->
					
				</div><!--/ .eight.columns-->
				


<form action="php/sesion.php" method="POST" class="form-entry">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" required aria-describedby="emailHelp" placeholder="Entra email">
    <small id="emailHelp" class="form-text text-muted">Email para usuarios</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required  placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

<button class="cta" type="submit" name="Enviar" >
  <span>Iniciar</span>
  <svg viewBox="0 0 13 10" height="10px" width="15px">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</button>


</form>				
			



</section><!--/.container -->




		<!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->			
		
	</div><!--/ .main-->

	
	<!-- - - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->	
	
<?php 
include 'php/footer.php'

 ?>