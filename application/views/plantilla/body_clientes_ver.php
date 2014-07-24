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
									<i class="clip-home-2"></i>
									<a href="<?php echo base_url(); ?>clientes">
										Clientes
									</a>
								</li>
								<li class="active">
									Ver Cliente <?php echo $NombreEmpresa; ?>
								</li>
							</ol>
                                                        <div class="page-header">
                                                                <h1>Cliente: <?php echo $NombreEmpresa; ?> <small>Edita los datos del cliente</small></h1>
                                                             
                                                        </div>
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="invoice">
						<div class="row invoice-logo">
							<div class="col-sm-6">
								<img alt="Logo <?php echo $NombreEmpresa; ?>" src="<?=base_url("upload/cliente_$idClientes.png")?>">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-5">
								<h4>Datos del cliente:</h4>
								<div class="well">
									<address>
										<strong><?php echo $NombreEmpresa; ?></strong>
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
							<div class="col-sm-5 pull-right">
								<h4>Descripción:</h4>
                                                                <p>
                                                                    <?php echo $Descripcion; ?>
                                                                </p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th> Id </th>
											<th> Nombre </th>
											<th class="hidden-480"> Teléfono </th>
											<th class="hidden-480"> Email </th>
											<th class="hidden-480"> Fecha Alta </th>
                                                                                        <th class="hidden-480"> Tipo </th>
                                                                                        <th class="hidden-480"> Estado </th>
										</tr>
									</thead>
									<tbody>
                                                                            <?php 
                                                                            foreach ($usuarios as $usuario) { 
                                                                                echo '<tr>';
                                                                                echo '<td>'.$usuario->idUsuarios.'</td>';
                                                                                echo '<td>'.$usuario->Nombre.'</td>';
                                                                                echo '<td>'.$usuario->Tlf.'</td>';
                                                                                echo '<td>'.$usuario->Email.'</td>';
                                                                                echo '<td>'.$usuario->FechaAlta.'</td>';
                                                                                echo '<td>'.$usuario->TipoUsuario.'</td>';
                                                                                echo '<td>'.$usuario->Estado.'</td>';
                                                                                echo '</tr>';
                                                                            } 

                                                                            ?>										
									</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 invoice-block">
								
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
                
                