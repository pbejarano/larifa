<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	include_once(FCPATH.'application/template/header.php');
?>
<section class="pt-5 pb-3 text-center container">
	<div class="row py-lg-5">
		<div class="col-lg-6 col-md-8 mx-auto">
			<h1 class="fw-light slogan animate__animated animate__backInDown">LaRifa!</h1>
			<img src="<?= base_url('images/icons/') ?>ms-icon-310x310.png" alt="" class="animate__animated animate__heartBeat animate__delay-1s logo">
			<p class="lead text-muted">Hola amigos! Bienvenido a este sitio acerca de rifas, cundinas y demas :)</p>
			<hr>
			<h2>Acerca de...</h2>
			<p class="lead text-muted_">El contenido del sitio iniciara ofrenciendo pequeñas rifas para ayudar a los usuarios a organizarlas y tener un mejor control y manejo de las mismas.</p>
			<p class="lead text-muted">Conforme vayamos avanzando y viendo las necesidades de los usuarios, iremos actualizando mejoras y funcionalidades</p>
		</div>
	</div>
</section>

<?php include_once(FCPATH.'application/template/footer.php'); ?>