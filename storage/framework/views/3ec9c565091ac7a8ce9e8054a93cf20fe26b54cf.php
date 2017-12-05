	
	<?php $__env->startSection('content'); ?>

			<div class="container-fluid">
				<div class="row">
				  <div class="carousel-inner">
				    <div class="item active">
				      <img src="assets/img/receptionist.jpg" alt="img 1">
				      <div class="carousel-caption">
				        <h3>Welcome To CJ Hotel's Web</h3>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="fullwidth-box biru">
				<div class="container">
					<div class="row ataslega">
						<div class="col-md-12 col-xs-12">
							<div class="logo logo-inverse">Reservasi</div>	
							<form>
								<div class="row">
									<div class="col-md-6">
										<select class="form-control" name="noidentitas">
											<option></option>
										</select>
									</div>
									<div class="col-md-6">
										<select class="form-control" name="kamar">
											<option selected="selected" disabled="disabled">Pilih Kamar</option>
											<option value="Kamar Standar">Kamar Standar</option>
										</select>	
									</div>
									<div class="col-md-6">
										<label>Nama Lengkap</label>
										<input type="text" class="form-control" name="nama">	
									</div>
								</div>	
								<div class="row">
									<div class="col-md-12">
										<br/>
									</div>
									<div class="col-md-1">
										<input type="submit" class="form-control btn btn-primary" name="nama">	
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<br/>
		<div class="container-fluid">
			<div class="container bgcolor">
				<div class="row">
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="assets/img/economy.jpg" alt="...">
				      <div class="caption">
				        <h3>Economy class</h3>
				        <p>this is a Hotel Room economy class.</p>
				        <hr/>
				        <p>Rp.500.000,00</p>
				        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
				      </div>
				    </div>
				  </div>
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="assets/img/standar.jpg" alt="...">
				      <div class="caption">
				        <h3>Standar Class</h3>
				        <p>this is a Hotel Room Standar Class.</p>
				        <hr/>
				        <p>Rp.950.000,00</p>
				        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
				      </div>
				    </div>
				  </div>
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="assets/img/premium.jpg" alt="...">
				      <div class="caption">
				        <h3>Premium class</h3>
				        <p>this is a Hotel Room Premium class.</p>
				        <hr/>
				        <p>Rp.1.350.000,00</p>
				        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
				      </div>
				    </div>
				  </div>
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="assets/img/1920.png" alt="...">
				      <div class="caption">
				        <h3>Thumbnail label</h3>
				        <p>this is a Hotel Room economy class.</p>
				        <hr/>
				        <p>Rp.500.000,00</p>
				        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
				      </div>
				    </div>
				  </div>
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="assets/img/1920.png" alt="...">
				      <div class="caption">
				        <h3>Thumbnail label</h3>
				        <p>this is a Hotel Room economy class.</p>
				        <hr/>
				        <p>Rp.950.000,00</p>
				        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
				      </div>
				    </div>
				  </div>
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="assets/img/1920.png" alt="...">
				      <div class="caption">
				        <h3>Thumbnail label</h3>
				        <p>this is a Hotel Room economy class.</p>
				        <hr/>
				        <p>Rp.1.250.000,00</p>
				        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<div class="fullwidth-box biru">
			<div class="container">
				<div class="row ataslega">
					<div class="col-md-12 col-xs-12">
						<div class="logo logo-inverse">Testimonial</div>	
						<blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  							<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>