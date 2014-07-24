<!-- start: PAGE -->
			<div class="main-content">
				<!-- start: PANEL CONFIGURATION MODAL FORM -->
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<button type="button" class="btn btn-primary">
									Save changes
								</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">							
							<ol class="breadcrumb">
								<li>
									<i class="clip-user"></i>
									<a href="<?php echo base_url(); ?>usuarios">
										Usuarios
									</a>
								</li>
								<li class="active">
									Ver Usuario <?php echo $Nombre; ?>
								</li>
							</ol>
                                                        <div class="page-header">
                                                                <h1>Usuario: <?php echo $Nombre; ?> <small>Edita los datos del usuario</small></h1>
                                                             
                                                        </div>
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="invoice">
						<div class="row invoice-logo">
							<div class="col-sm-6">
								<img alt="Logo <?php echo $Nombre; ?>" src="<?php echo base_url(); ?>clip-one/assets/images/your-logo-here.png">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-5">
								<h4>Datos del usuario:</h4>
								<div class="well">
									<address>
										<strong><?php echo $Nombre; ?> <?php echo $Apellidos; ?></strong>
										<br>
										<?php echo $Direccion; ?>
										<br>
										<?php echo $CodigoPostal; ?> - <?php echo $Localidad; ?> - <?php echo $Provincia; ?>
									</address>
									<address>
										<strong>Teléfono</strong>
										<br>
                                                                                    <?php echo $Tlf; ?>
									</address>
                                                                    <address>
                                                                            <strong>E-mail</strong>
                                                                            <br>
                                                                            <a href="mailto:<?php echo $Email; ?>">
                                                                                    <?php echo $Email; ?>
                                                                            </a>
                                                                    </address>
								</div>
							</div>
							<div class="col-sm-4 pull-right">
                                                                <h4>Caracteristicas de acceso:</h4>
                                                                <strong>Cliente: </strong><?php echo $NombreEmpresa; ?>
                                                                <br>
                                                                <strong>Nombre de usuario: </strong><?php echo $Usuario; ?>
                                                                <br>
                                                                <strong>Tipo de usuario: </strong><?php echo $TipoUsuario; ?>
                                                                <br>
                                                                <strong>Fecha de alta: </strong><?php echo $FechaAlta; ?>
                                                                <br>
                                                                <strong>Estado de la cuenta: </strong><?php echo $Estado; ?>
                                                                <br><br>
                                                                
								<h4>Descripción:</h4>
                                                                <p>
                                                                    <?php echo $Descripcion; ?>
                                                                </p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 invoice-block">
                                                            <br>
								<a onclick="javascript:window.print();" class="btn btn-lg btn-teal hidden-print">
									Print <i class="fa fa-print"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				2014 &copy; clip-one by cliptheme.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->
                <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo base_url(); ?>clip-one/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="<?php echo base_url(); ?>clip-one/assets/plugins/summernote/build/summernote.min.js"></script>
		<script src="<?php echo base_url(); ?>clip-one/assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="<?php echo base_url(); ?>clip-one/assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="<?php echo base_url(); ?>clip-one/assets/js/form-validation.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
                <script>
			jQuery(document).ready(function() {
				Main.init();
				FormValidator.init();
			});
		</script>
                
                