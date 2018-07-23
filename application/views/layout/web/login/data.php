<div class="container" style="margin-top: 150px">
	<div class="row">

		<div class="col-md-4 col-md-offset-4">

			<div class="img-logo" style="text-align: center;padding-bottom: 20px">
				<img src="<?php echo base_url() ?>resources/images/logo.png">
			</div>

			<div class="card">
				<div class="card-content">
					<?php echo form_open('login/action') ?>

					  <div class="form-group">
					    <label for="text"><i class="fa fa-shield"></i> USERNAME</label>
					    <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
					  </div>

					  <div class="form-group">
					    <label for="text"><i class="fa fa-lock"></i> PASSWORD</label>
					    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
					  </div>

					  <div class="form-group">
					  	<?php
					  		if(isset($error)){
					  	?>

					  	<div class="alert alert-danger" role="alert">
					  		<?php echo $error;?>
					  	</div>
					  	
					  	<?php } ?>

					  </div>
					  
					  <div class="text-center">
						  <button type="submit" class="btn btn-md btn-success" style="border-radius: 25px"><i class="fa fa-sign-in"></i> Masuk</button>
						  <button type="reset" class="btn btn-md btn-warning" style="border-radius: 25px"><i class="fa fa-repeat"></i> reset</button>
					  </div>

					<?php echo form_close() ?>

				</div>
			</div>

		</div>

	</div>
</div>