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
                                        <?php
                                        
                                        $i=0;
                                        $x=0;
                                        $w=0;
                                        
                                        $query = $this->db->query("
            

                                            SELECT
                                                    COUNT(IDDispositivo) AS Dispositivos, 
                                                    STR_TO_DATE(FH, '%Y-%m-%d %H:%i:%s') AS FechaHora,
                                                    SUM(Energia) AS Energia, SUM(Coste) AS Coste, SUM(CO2) AS CO2,
                                                Max_PActiva, Max_PActiva_FechaHora
                                            FROM 
                                            (
                                                    SELECT 399 AS IDDispositivo, IDQH, 
                                                    Max_PActiva_FechaHora,
                                                    Max_PActiva,	
                                                    CONCAT(Ano, '-', Mes, '-', Dia, ' ', Hora) AS FH,
                                                    ROUND(Energia,3)*1 AS Energia, 
                                                    DATE_FORMAT(Max_PActiva_FechaHora, '%Y%m%d%H') AS FH_GROUPBYHOUR,
                                                    ROUND(Coste,7)*1 AS Coste, 
                                                    ROUND(CO2,2)*1 AS CO2
                                                    FROM t_qh_399
                                            ) AS tabla
                                            WHERE
                                                    Max_PActiva_FechaHora > '2014-04-01 00:00' AND Max_PActiva_FechaHora <= '2014-04-02 00:00'
                                            GROUP BY FH
                                            ORDER BY Max_PActiva_FechaHora


                                            ;");
                                        
                                            foreach ($query->result_array() as $row){
                                                $Energia[$i] = substr($row['Energia'], 0, strpos($row['Energia'], "."));
                                                $Max_PActiva[$i] = $row['Max_PActiva'];
                                                $FechaHora[$i] = substr($row['FechaHora'], -8);     
                                                $i++;
                                            }

                                            $query = $this->db->query("

                                                    SELECT 
                                                            t_modelos.IDModelo, 
                                                            '00:00:00' AS HoraDesde,
                                                            '00:00:00' AS HoraHasta,
                                                            FALSE AS Productivo,
                                                            t_niveles_plus.IDNivel,
                                                            0 AS Nivel_Desde,
                                                            t_niveles_plus.Nivel_Hasta,
                                                            t_niveles_plus.Color,
                                                            t_niveles_plus.Descripcion
                                                    FROM t_modelos
                                                            RIGHT JOIN t_modelos_fechas
                                                                    ON t_modelos.IDModelo = t_modelos_fechas.IDModelo
                                                            RIGHT JOIN t_niveles_plus
                                                                    ON t_modelos.IDNivel_Por_Defecto = t_niveles_plus.IDNivel
                                                    where
                                                            '2014-04-01' BETWEEN t_modelos_fechas.Desde AND t_modelos_fechas.Hasta
                                                            /*AND t_modelos.M = '1'*/
                                                            /*AND t_modelos.IDAgrupacion = (Pendiente)*/
                                                    ORDER BY t_modelos.IDModelo DESC
                                                    LIMIT 0,1
                                                    ;");
                                            
                                            foreach ($query->result_array() as $row){
                                                $Modelo_defecto = $row['Nivel_Hasta'];
                                             
                                            }
                                            
                                            $query = $this->db->query("

                                                    SELECT
                                                        t_modelos_niveles.HoraDesde,
                                                        t_modelos_niveles.HoraHasta,
                                                        t_modelos_niveles.Productivo,
                                                        t_modelos_niveles.IDNivel,
                                                        0 AS Nivel_Desde,
                                                        t_niveles_plus.Nivel_Hasta,
                                                        t_niveles_plus.Color,
                                                        t_modelos.IDNivel_Por_Defecto,
                                                        t_niveles_plus.Descripcion
                                                FROM t_modelos
                                                        INNER JOIN (
                                                                t_modelos_niveles LEFT JOIN t_niveles_plus
                                                                        ON t_modelos_niveles.IDNivel = t_niveles_plus.IDNivel)
                                                                ON t_modelos.IDModelo = t_modelos_niveles.IDModelo
                                                WHERE t_modelos_niveles.IDModelo = 1181 /* iddModelo por defecto */
                                                ORDER BY t_modelos_niveles.HoraDesde ASC
                                                ");
                                            
                                            foreach ($query->result_array() as $row){
                                                $HoraDesde[$w] = $row['HoraDesde'];
                                                $HoraHasta[$w] = $row['HoraHasta'];
                                                $Nivel_Hasta[$w] = $row['Nivel_Hasta'];
                                                $w++;
                                            }
        
                                        ?>
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
                                                                  
                                                                <?php 
                                                                echo "['Horas', 'Consumo', 'Modelo', 'Nivel', 'Máximo'],"; 
                                                                for($i=0; $i<96; $i++){
                                                                    if($i==95){
                                                                        echo "['$FechaHora[$i]', $Energia[$i], $Modelo_defecto*200, 500, $Max_PActiva[$i]]";
                                                                    } else {
                                                                        echo "['$FechaHora[$i]', $Energia[$i], $Modelo_defecto*200, 500, $Max_PActiva[$i]],";
                                                                    }
                                                                }
                                                                
                                                                ?>
                                                                
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