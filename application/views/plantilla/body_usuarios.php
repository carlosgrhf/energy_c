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
										Usuarios
								</li>
							</ol>                                                    
                                                        <div class="page-header">
                                                                <h1>Usuarios <small>Usuarios dados de alta actualmente en la aplicación</small></h1>
                                                        </div>
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- start: RESPONSIVE TABLE PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Listado de usuarios
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
									<div class="table-responsive">  
										<table class="table table-bordered table-hover" id="sample-table-1">
											<thead>
												<tr>
													<th>Id</th>
													<th>Nombre</th>
													<th>Usuario</th>
                                                                                                        <th>Tipo</th>
                                                                                                        <th>Estado</th>
                                                                                                        <th>Cliente</th>
                                                                                                        <th>Descripción</th>                                                                                                        
                                                                                                        <th style="min-width: 120px;">Acciones</th>
												</tr>
											</thead>
											<tbody>
                                                                                                <?php
                                                                                                //cargo el modelo de clientes para poder cambiar el id por el nombre real
                                                                                                $ci = &get_instance();
                                                                                                $ci->load->model('Clientes_model');
                                                                                                foreach ($usuarios as $usuario) { 
                                                                                                    
                                                                                                    //antes de pintar la tabla traenos el nombre del cliente
                                                                                                    $idCliente=$usuario->Clientes_idClientes;
                                                                                                    $NombreEmpresa = $ci->Clientes_model->dame_solo_nombre($idCliente);   
                                                                                                    
                                                                                                    echo '<tr>';
                                                                                                    echo '<td>'.$usuario->idUsuarios.'</td>';
                                                                                                    echo '<td>'.$usuario->Nombre.' '.$usuario->Apellidos.'</td>';
                                                                                                    echo '<td>'.$usuario->Usuario.'</td>';
                                                                                                    echo '<td>'.$usuario->TipoUsuario.'</td>';
                                                                                                    echo '<td>'.$usuario->Estado.'</td>';
                                                                                                    echo '<td>'.$NombreEmpresa.'</td>';
                                                                                                    echo '<td>'.$usuario->Descripcion.'</td>';
                                                                                                    echo '<td>                                                                                                                                                                                                                               
                                                                                                                <a class="btn btn-primary tooltips" href="'.base_url().'usuarios/ver/'.$usuario->idUsuarios.'" data-placement="top" data-original-title="Ver Usuario">
                                                                                                                    <i class="fa fa-share"></i>
                                                                                                                </a>
                                                                                                                <a class="btn btn-teal tooltips" href="'.base_url().'usuarios/editar/'.$usuario->idUsuarios.'" data-placement="top" data-original-title="Editar Usuario">
                                                                                                                    <i class="fa fa-edit"></i>
                                                                                                                </a>
                                                                                                          </td>';
                                                                                                    echo '</tr>';
                                                                                                } 
                                                                                                
                                                                                                ?>
                                                                                            
											</tbody>
										</table>
                                                                            <?=$this->pagination->create_links()?>
									</div>
								</div>
							</div>
							<!-- end: RESPONSIVE TABLE PANEL -->
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