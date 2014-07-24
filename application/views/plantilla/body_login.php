<body class="login example2">
		<div class="main-login col-sm-4 col-sm-offset-4">
			<div class="logo"><img src="<?php echo base_url(); ?>img/Logo_energy_sentinel.png" alt="Logo" style="margin-top:-14px;"/>
			</div>
                        
                        <?php
                        if($error==1){
                            echo '
                                <div class="alert alert-danger">
                                    <button data-dismiss="alert" class="close">
                                        &times;
                                    </button>
                                    <i class="fa fa-times-circle"></i>
                                    <strong>Acceso Denegado!</strong> Por favor, cambia los datos y vuelve a intentarlo.
                                </div>
                            ';
                        } elseif($error==2){
                            echo '
                                <div class="alert alert-danger">
                                    <button data-dismiss="alert" class="close">
                                        &times;
                                    </button>
                                    <i class="fa fa-times-circle"></i>
                                    <strong>Registro Denegado!</strong> Ya existe un usuario con el email indicado.
                                </div>
                            ';
                        }                        
                        ?>
			<!-- start: LOGIN BOX -->
			<div class="box-login">
				<h3>Acceder a Energy</h3>
				<p>
					Por favor, introduce tu usuario y contraseña.
				</p>
				<form class="form-login" method="post" action="<?php echo base_url(); ?>login/procesar_form_login">
                                        <input type="hidden" name="login" />
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> Tienes errores, por favor revisalo.
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="username" placeholder="Username">
								<i class="fa fa-user"></i> </span>
						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="password" placeholder="Password">
								<i class="fa fa-lock"></i>
								<a class="forgot" href="#">
									Olvidé mi contraseña
								</a> </span>
						</div>
						<div class="form-actions">
							<label for="remember" class="checkbox-inline">
								<input type="checkbox" class="grey remember" id="remember" name="remember">
								Recordarme
							</label>
							<button type="submit" class="btn btn-bricky pull-right">
								Login <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
						<div class="new-account">
							¿Eres nuevo aquí?
							<a href="#" class="register">
								Crear una cuenta
							</a>
						</div>
					</fieldset>
				</form>
			</div>
			<!-- end: LOGIN BOX -->
			<!-- start: FORGOT BOX -->
			<div class="box-forgot">
				<h3>Forget Password?</h3>
				<p>
					Enter your e-mail address below to reset your password.
				</p>
				<form class="form-forgot">
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon">
								<input type="email" class="form-control" name="email" placeholder="Email">
								<i class="fa fa-envelope"></i> </span>
						</div>
						<div class="form-actions">
							<a class="btn btn-light-grey go-back">
								<i class="fa fa-circle-arrow-left"></i> Back
							</a>
							<button type="submit" class="btn btn-bricky pull-right">
								Submit <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
					</fieldset>
				</form>
			</div>
			<!-- end: FORGOT BOX -->
			<!-- start: REGISTER BOX -->
			<div class="box-register">
				<h3>Darse de alta</h3>
				<p>
					Introduce tus datos personales:
				</p>
				<form class="form-register" method="post" action="<?php echo base_url(); ?>energy/procesar_form_registro">
                                    <input type="hidden" name="registro" />
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> Tienes errores, por favor revisalo.
					</div>
					<fieldset>
						<div class="form-group">
							<input type="text" class="form-control" name="nombre" placeholder="Nombre completo">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="direccion" placeholder="Dirección">
						</div>
                                                <div class="form-group">
							<input type="text" class="form-control" name="codigopostal" placeholder="Código Postal">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="ciudad" placeholder="Ciudad">
						</div>
						<div class="form-group">
							<div>
								<label class="radio-inline">
									<input type="radio" class="grey" value="hombre" name="genero">
									Hombre
								</label>
								<label class="radio-inline">
									<input type="radio" class="grey" value="mujer" name="genero">
									Mujer
								</label>
							</div>
						</div>
						<p>
							Introduce tu datos de acceso:
						</p>
						<div class="form-group">
							<span class="input-icon">
								<input type="email" class="form-control" name="email" placeholder="Email">
								<i class="fa fa-envelope"></i> </span>
						</div>
						<div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
								<i class="fa fa-lock"></i> </span>
						</div>
						<div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" name="password_again" placeholder="Password (repetir)">
								<i class="fa fa-lock"></i> </span>
						</div>
						<div class="form-group">
							<div>
								<label for="agree" class="checkbox-inline">
									<input type="checkbox" class="grey agree" id="agree" name="agree">
									Acepto los terminos y la política de privacidad
								</label>
							</div>
						</div>
						<div class="form-actions">
							<a class="btn btn-light-grey go-back">
								<i class="fa fa-circle-arrow-left"></i> Volver
							</a>
							<button type="submit" class="btn btn-bricky pull-right">
								Enviar <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
					</fieldset>
				</form>
			</div>
			<!-- end: REGISTER BOX -->
			
		</div>




