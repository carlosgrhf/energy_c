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
					<!-- start: PAGE CONTENT -->
                                        <p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultrices lacus non diam convallis rhoncus. Cras in leo eu sem dictum tincidunt nec ut neque. In faucibus porta leo nec cursus. Fusce ac pretium nunc. Curabitur at faucibus nisl, at consequat sapien. Suspendisse fringilla mollis auctor. Vestibulum scelerisque in urna ut mattis. In hac habitasse platea dictumst. Aenean a odio vitae mauris viverra dapibus volutpat ut orci.
                                        </p>
                                        <div class="panel panel-default">
                                                <div class="panel-heading">
                                                        <i class="clip-stats"></i>
                                                        Hasta las 6:00 de la mañana
                                                        <div class="panel-tools">
                                                                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                                                </a>
                                                                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                                                        <i class="fa fa-wrench"></i>
                                                                </a>
                                                                <a class="btn btn-xs btn-link panel-refresh" href="#">
                                                                        <i class="fa fa-refresh"></i>
                                                                </a>
                                                                <a class="btn btn-xs btn-link panel-close" href="#">
                                                                        <i class="fa fa-times"></i>
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="panel-body">
                                                        <div class="flot-medium-container">
                                                        <script type="text/javascript">
                                                            google.load('visualization', '1', {packages: ['corechart']});
                                                          </script>
                                                          <script type="text/javascript">
                                                            function drawVisualization() {
                                                              // Some raw data (not necessarily accurate)
                                                              var data = google.visualization.arrayToDataTable([
                                                                ['Horas', 'Consumo', 'Modelo Min', 'Modelo Max', 'Máximo'],
                                                                ['00:15', 20, 25, 50, 23.7],
                                                                ['00:30', 12, 25, 50, 17.5],
                                                                ['00:45', 12, 25, 50, 12],
                                                                ['01:00', 4, 25, 50, 7.7],
                                                                ['01:15', 8, 25, 50, 8.6],
                                                                ['01:30', 8, 25, 50, 8],
                                                                ['01:45', 8, 25, 50, 8.4],
                                                                ['02:00', 8, 25, 50, 15],
                                                                ['02:15', 8, 25, 50, 20],
                                                                ['02:30', 16, 25, 50, 18],
                                                                ['02:45', 16, 25, 50, 23.7],
                                                                ['03:00', 20, 25, 50, 23.7],
                                                                ['03:15', 25, 25, 50, 29],
                                                                ['03:30', 26, 25, 50, 40],
                                                                ['03:45', 40, 25, 50, 50],
                                                                ['04:00', 50, 25, 50, 60],
                                                                ['04:15', 66, 25, 50, 70],
                                                                ['04:30', 88, 25, 50, 90],
                                                                ['04:45', 70, 50, 50, 75],
                                                                ['05:00', 55, 50, 50, 60],
                                                                ['05:15', 16, 50, 50, 20],
                                                                ['05:30', 8, 50, 50, 10],
                                                                ['05:45', 4, 50, 50, 15],
                                                                ['06:00', 8, 25, 50, 10]
                                                              ]);

                                                              var options = {
                                                                title : 'Gráfica de mañana',
                                                                vAxis: {title: "KW"},
                                                                hAxis: {title: "Horas"},
                                                                seriesType: "bars", 
                                                                series: {
                                                                    0: {type: "bars",color:"#5cb85c"},
                                                                    1: {type: "steppedArea",color:"#f0ad4e"},
                                                                    2: {type: "steppedArea",color:"#D9534F"},
                                                                    3: {type: "line",color:"#334c68"}
                                                                }
                                                                
                                                              };

                                                              var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                                                              chart.draw(data, options);
                                                            }
                                                            google.setOnLoadCallback(drawVisualization);
                                                          </script> 
                                                          <div id="chart_div" style="width: 100%; min-height: 300px;"></div>
                                                        </div>
                                                </div>
                                            
                                            
                                                
                                        </div>
                                        
                                        
                                        <div class="panel panel-default">
                                                <div class="panel-heading">
                                                        <i class="clip-stats"></i>
                                                        Hasta las 6:00 de la mañana
                                                        <div class="panel-tools">
                                                                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                                                </a>
                                                                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                                                        <i class="fa fa-wrench"></i>
                                                                </a>
                                                                <a class="btn btn-xs btn-link panel-refresh" href="#">
                                                                        <i class="fa fa-refresh"></i>
                                                                </a>
                                                                <a class="btn btn-xs btn-link panel-close" href="#">
                                                                        <i class="fa fa-times"></i>
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="panel-body">
                                                        <div class="flot-medium-container">
                                                        <script type="text/javascript">
                                                            google.load('visualization', '1', {packages: ['corechart']});
                                                          </script>
                                                          <script type="text/javascript">
                                                            function drawVisualization() {
                                                              // Some raw data (not necessarily accurate)
                                                              var data = google.visualization.arrayToDataTable([
                                                                ['Horas', 'Consumo', 'Modelo Min', 'Modelo Max', 'Máximo'],
                                                                ['00:15', 20, 25, 50, 23.7],
                                                                ['00:30', 12, 25, 50, 17.5],
                                                                ['00:45', 12, 25, 50, 12],
                                                                ['01:00', 4, 25, 50, 7.7],
                                                                ['01:15', 8, 25, 50, 8.6],
                                                                ['01:30', 8, 25, 50, 8],
                                                                ['01:45', 8, 25, 50, 8.4],
                                                                ['02:00', 8, 25, 50, 15],
                                                                ['02:15', 8, 25, 50, 20],
                                                                ['02:30', 16, 25, 50, 18],
                                                                ['02:45', 16, 25, 50, 23.7],
                                                                ['03:00', 20, 25, 50, 23.7],
                                                                ['03:15', 25, 25, 50, 29],
                                                                ['03:30', 26, 25, 50, 40],
                                                                ['03:45', 40, 25, 50, 50],
                                                                ['04:00', 50, 25, 50, 60],
                                                                ['04:15', 66, 25, 50, 70],
                                                                ['04:30', 88, 25, 50, 90],
                                                                ['04:45', 70, 50, 50, 75],
                                                                ['05:00', 55, 50, 50, 60],
                                                                ['05:15', 16, 50, 50, 20],
                                                                ['05:30', 8, 50, 50, 10],
                                                                ['05:45', 4, 50, 50, 15],
                                                                ['06:00', 8, 25, 50, 10]
                                                              ]);

                                                              var options = {
                                                                title : 'Gráfica de mañana',
                                                                vAxis: {title: "KW"},
                                                                hAxis: {title: "Horas"},
                                                                seriesType: "bars", 
                                                                series: {
                                                                    0: {type: "bars",color:"#5cb85c"},
                                                                    1: {type: "steppedArea",color:"#f0ad4e"},
                                                                    2: {type: "steppedArea",color:"#D9534F"},
                                                                    3: {type: "line",color:"#334c68"}
                                                                }
                                                                
                                                              };

                                                              var chart = new google.visualization.ComboChart(document.getElementById('chart2_div'));
                                                              chart.draw(data, options);
                                                            }
                                                            google.setOnLoadCallback(drawVisualization);
                                                          </script> 
                                                          <div id="chart2_div" style="width: 100%; min-height: 300px;"></div>
                                                        </div>
                                                </div>
                                            
                                            
                                                
                                        </div>
					<!-- end: PAGE CONTENT-->
                                        
                                        <div class="panel panel-default">
                                                <div class="panel-heading">
                                                        <i class="clip-stats"></i>
                                                        Hasta las 6:00 de la mañana
                                                        <div class="panel-tools">
                                                                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                                                </a>
                                                                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                                                        <i class="fa fa-wrench"></i>
                                                                </a>
                                                                <a class="btn btn-xs btn-link panel-refresh" href="#">
                                                                        <i class="fa fa-refresh"></i>
                                                                </a>
                                                                <a class="btn btn-xs btn-link panel-close" href="#">
                                                                        <i class="fa fa-times"></i>
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="panel-body">
                                                        <div class="flot-medium-container">
                                                        <script type="text/javascript">
                                                            google.load('visualization', '1', {packages: ['corechart']});
                                                          </script>
                                                          <script type="text/javascript">
                                                            function drawVisualization() {
                                                              // Some raw data (not necessarily accurate)
                                                              var data = google.visualization.arrayToDataTable([
                                                                ['Horas', 'Consumo', 'Modelo Min', 'Modelo Max', 'Máximo'],
                                                                ['00:15', 20, 25, 50, 23.7],
                                                                ['00:30', 12, 25, 50, 17.5],
                                                                ['00:45', 12, 25, 50, 12],
                                                                ['01:00', 4, 25, 50, 7.7],
                                                                ['01:15', 8, 25, 50, 8.6],
                                                                ['01:30', 8, 25, 50, 8],
                                                                ['01:45', 8, 25, 50, 8.4],
                                                                ['02:00', 8, 25, 50, 15],
                                                                ['02:15', 8, 25, 50, 20],
                                                                ['02:30', 16, 25, 50, 18],
                                                                ['02:45', 16, 25, 50, 23.7],
                                                                ['03:00', 20, 25, 50, 23.7],
                                                                ['03:15', 25, 25, 50, 29],
                                                                ['03:30', 26, 25, 50, 40],
                                                                ['03:45', 40, 25, 50, 50],
                                                                ['04:00', 50, 25, 50, 60],
                                                                ['04:15', 66, 25, 50, 70],
                                                                ['04:30', 88, 25, 50, 90],
                                                                ['04:45', 70, 50, 50, 75],
                                                                ['05:00', 55, 50, 50, 60],
                                                                ['05:15', 16, 50, 50, 20],
                                                                ['05:30', 8, 50, 50, 10],
                                                                ['05:45', 4, 50, 50, 15],
                                                                ['06:00', 8, 25, 50, 10]
                                                              ]);

                                                              var options = {
                                                                title : 'Gráfica de mañana',
                                                                vAxis: {title: "KW"},
                                                                hAxis: {title: "Horas"},
                                                                seriesType: "bars", 
                                                                series: {
                                                                    0: {type: "bars",color:"#5cb85c"},
                                                                    1: {type: "steppedArea",color:"#f0ad4e"},
                                                                    2: {type: "steppedArea",color:"#D9534F"},
                                                                    3: {type: "line",color:"#334c68"}
                                                                }
                                                                
                                                              };

                                                              var chart = new google.visualization.ComboChart(document.getElementById('chart3_div'));
                                                              chart.draw(data, options);
                                                            }
                                                            google.setOnLoadCallback(drawVisualization);
                                                          </script> 
                                                          <div id="chart3_div" style="width: 100%; min-height: 300px;"></div>
                                                        </div>
                                                </div>
                                            
                                            
                                                
                                        </div>
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