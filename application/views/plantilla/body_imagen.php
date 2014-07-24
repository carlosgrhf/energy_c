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
							
                                                    
                                                        <div class="page-header">
                                                                <h1>Consumo <small>Gráfico de consumo por día</small></h1>
                                                        </div>
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					
                                        
                                                
                                                <?php echo $error;?>

                                                <?php echo form_open_multipart('upload/do_upload');?>

                                                <input type="file" name="userfile" size="20" />

                                                <br /><br />

                                                <input type="submit" value="upload" />

                                                </form>
                                  
					
                                        
                                        
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
                
                
                