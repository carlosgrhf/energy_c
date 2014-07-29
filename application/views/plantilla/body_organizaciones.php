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
									<i class="clip-user-5"></i>
										Organizaciones
								</li>
							</ol>                                                    
                                                        <div class="page-header">
                                                                <h1>Organizaciones <small>Organizaciones dadas de alta actualmente en la aplicación</small></h1>
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
									Listado de organizaciones
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
                                                                            <a class="btn btn-primary tooltips" href="<?php echo base_url(); ?>organizaciones/nuevo" data-placement="right" data-original-title="Añadir nueva organización">
                                                                                <i class="fa fa-plus"></i> Nueva Organización
                                                                            </a>
                                                                            <br /><br />
										<table class="table table-bordered table-hover" id="sample-table-1">
											<thead>
												<tr>
													<th>Id</th>
													<th>Nombre</th>
													<th>CIF</th>
													<th>Teléfono</th>
													<th>Email</th>
                                                                                                        <th>Descripción</th>
                                                                                                        <th style="min-width: 200px;">Acciones</th>
												</tr>
											</thead>
											<tbody>
                                                                                                <?php 
                                                                                                foreach ($organizaciones as $organizacion) { 
                                                                                                    echo '<tr>';
                                                                                                    echo '<td>'.$organizacion->idOrganizaciones.'</td>';
                                                                                                    echo '<td>'.$organizacion->NombreOrganizacion.'</td>';
                                                                                                    echo '<td>'.$organizacion->CIF.'</td>';
                                                                                                    echo '<td>'.$organizacion->Tlf.'</td>';
                                                                                                    echo '<td>'.$organizacion->Email.'</td>';
                                                                                                    echo '<td>'.$organizacion->Descripcion.'</td>';
                                                                                                    echo '<td>
                                                                                                                <a class="btn btn-green tooltips" href="'.base_url().'organizaciones/ver_usuarios/'.$organizacion->idOrganizaciones.'" data-placement="top" data-original-title="Usuarios">
                                                                                                                    <i class="fa fa-user fa fa-white"></i>
                                                                                                                </a>                                                                                                                
                                                                                                                <a class="btn btn-primary tooltips" href="'.base_url().'organizaciones/ver/'.$organizacion->idOrganizaciones.'" data-placement="top" data-original-title="Ver Organización">
                                                                                                                    <i class="fa fa-share"></i>
                                                                                                                </a>
                                                                                                                <a class="btn btn-teal tooltips" href="'.base_url().'organizaciones/editar/'.$organizacion->idOrganizaciones.'" data-placement="top" data-original-title="Editar Organización">
                                                                                                                    <i class="fa fa-edit"></i>
                                                                                                                </a>
                                                                                                                <a class="btn btn-bricky tooltips" href="'.base_url().'clientes/borrar/'.$organizacion->idOrganizaciones.'" data-placement="top" data-original-title="Borrar Organización">
                                                                                                                    <i class="fa fa-times fa fa-white"></i>
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