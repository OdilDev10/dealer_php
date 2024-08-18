<?php 
include 'php/header.php';

?>
	
	<!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->	
	
	
	<div class="main">
		
		<!-- <div id="map"></div> -->

		<!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->	

		<section class="container clearfix">
			
			<div class="four columns">
				
				<div class="widget_contacts">

					<h3 class="widget-title">Formas de contacto</h3>			

					<ul class="our-contacts">

						<li class="address">
							<b>Address:</b>
							<p>R.D, San Cristobal</p>
						</li>
						<li class="phone">
							<a href="https://api.whatsapp.com/send?phone=8096715201&text=Hola, Nececito mas informacion!">
							<b>Phone:</b>&nbsp;<span>+1 (809) 671-5201</span> <br />
							</a>
						</li>

						<li>
						<a href="https://api.whatsapp.com/send?phone=8096715201&text=Hola, Nececito mas informacion!">
							<b>Phone:</b>&nbsp;<span>+1 (809) 671-5201</span>
							</a>
						</li>
						<li>
							<b>Email: <a href="mailto:odildmartinezcuello@gmail.com">odildmartinezcuello@gmail.com</a></b>
						</li>

					</ul><!--/ .our-contacts-->

				</div><!--/ .widget-container-->
				
			</div><!--/ .four .columns-->
			
			<div class="twelve columns">

				<div id="contact">

					<h3 class="widget-title">Contactanos</h3>

	<form id="formularioContacto" method="post" action="php/formulario.php" class="contact-form" >


						
								   
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre</label>
  <input type="text" name="nombre" required min="3" max="50" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Correo</label>
  <input type="email" name="correo" required min="3" max="50" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1"  class="form-label">Asunto</label>
  <input type="text" class="form-control" name="asunto" required min="3" max="50"  id="exampleFormControlInput1" placeholder="Asunto">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje" rows="3"></textarea>
</div>			

						
<button type="submit" name="Enviar">
  <div class="svg-wrapper-1">
    <div class="svg-wrapper">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
        <path fill="none" d="M0 0h24v24H0z"></path>
        <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
      </svg>
    </div>
  </div>
  <span>Enviar</span>
</button>


</form><!--/ .contact-form-->	
			</div><!--/ #contact-->
					
			</div><!--/ .twelve .columns-->



		</section><!--/.container -->

		<!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->			


	</div><!--/ .main-->

	
	<!-- - - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->	
	
<?php 
include 'php/footer.php';

?>