<?php echo form_open('users/login'); ?>
<div class="login-wrapper">
	<div class="row">
		<div class="col-10 col-md-4 login-form">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<br>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</div>
	</div>
</div>
<?php echo form_close(); ?>
