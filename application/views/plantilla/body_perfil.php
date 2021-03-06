<!-- start: MAIN CONTAINER -->
<div class="main-container">

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
								<li class="active">
									<i class="clip-user"></i>
										Mi Perfil
								</li>
							</ol>
                                                        <div class="page-header">
                                                                <h1>Mi Perfil <small>Edita tus datos personales</small></h1>
                                                             
                                                        </div>
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					
					<div class="row">
						<div class="col-md-12">
							<!-- start: FORM VALIDATION 2 PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Formulario de actualización de datos 
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
										</a>
										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
											<i class="fa fa-wrench"></i>
										</a>
										<a class="btn btn-xs btn-link panel-refresh" href="#">
											<i class="fa fa-refresh"></i>
										</a>
										<a class="btn btn-xs btn-link panel-expand" href="#">
											<i class="fa fa-resize-full"></i>
										</a>
										<a class="btn btn-xs btn-link panel-close" href="#">
											<i class="fa fa-times"></i>
										</a>
									</div>
								</div>
								<div class="panel-body">
									<h2><i class="fa fa-pencil-square teal"></i> Datos personales</h2>
									<p>
										Actualiza tus datos personales.
									</p>
									<hr>
									<form id="actualizardatospersonales" method="post" action="<?php echo base_url(); ?>perfil/actualizar_datospersonales">  
                                                                                <input type="hidden" name="actualizar" />
										<div class="row">
											<div class="col-md-12">
												<div class="errorHandler alert alert-danger no-display">
													<i class="fa fa-times-sign"></i> You have some form errors. Please check below.
												</div>
												<div class="successHandler alert alert-success no-display">
													<i class="fa fa-ok"></i> Your form validation is successful!
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">
														Nombre <span class="symbol required"></span>
													</label>
													<input type="text" value="<?php echo $Nombre; ?>" class="form-control" id="Nombre" name="Nombre">
												</div>
												<div class="form-group">
													<label class="control-label">
														Apellidos <span class="symbol required"></span>
													</label>
													<input type="text" value="<?php echo $Apellidos; ?>" class="form-control" id="Apellidos" name="Apellidos">
												</div>
												<div class="form-group">
													<label class="control-label">
														Teléfono <span class="symbol required"></span>
													</label>
													<input type="text" value="<?php echo $Tlf; ?>" class="form-control" id="Tlf" name="Tlf">
												</div>
												<div class="form-group">
													<label class="control-label">
														Email <span class="symbol required"></span>
													</label>
													<input type="email" value="<?php echo $Email; ?>" class="form-control" id="Email" name="Email">
												</div>
                                                                                                
											</div>
											<div class="col-md-6">
												<div class="form-group connected-group">
													<label class="control-label">
														Dirección <span class="symbol required"></span>
													</label>
													<input type="text" value="<?php echo $Direccion; ?>" class="form-control" id="Direccion" name="Direccion">
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">
																Código Postal <span class="symbol required"></span>
															</label>
															<input type="text" value="<?php echo $CodigoPostal; ?>" class="form-control" id="CodigoPostal" name="CodigoPostal">
														</div>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<label class="control-label">
																Localidad <span class="symbol required"></span>
															</label>
															<input type="text" value="<?php echo $Localidad; ?>" class="form-control" id="Localidad" name="Localidad">
														</div>
													</div>
												</div>
                                                                                                <div class="form-group connected-group">
													<label class="control-label">
														Provincia <span class="symbol required"></span>
													</label>
													<input type="text" value="<?php echo $Provincia; ?>" class="form-control" id="Provincia" name="Provincia">
												</div>
                                                                                                <div class="form-group">
													<label class="control-label">
														Usuario de acceso <span class="symbol required"></span>
													</label>
                                                                                                        <input type="text" value="<?php echo $Usuario; ?>" class="form-control" id="Usuario" name="Usuario">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
                                                                                                        <label for="form-field-22">
                                                                                                                Descripción
                                                                                                        </label>
                                                                                                        <textarea id="form-field-22" class="form-control" name="Descripcion"><?php echo $Descripcion; ?></textarea>
                                                                                                </div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<button class="btn btn-yellow btn-block" type="submit">
													Actualizar <i class="fa fa-arrow-circle-right"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- end: FORM VALIDATION 2 PANEL -->
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
                <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>clip-one/assets/plugins/summernote/build/summernote.css">