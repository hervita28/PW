<?php
	if(!empty($notif)){
		echo '<div class="alert alert-danger">';
		echo $notif;
		echo '</div>';
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>TELKOM WITEL REGIONAL V</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css"> 
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/style.css">
	</head>
	<body> 
		<div class="container" style="padding-top: 150px;">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"></div>
				<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading"><h4><center>Login</center></h4></div>
				    	<div class="panel-body">
							
							<form method="post" action="<?php echo base_url();?>index.php/admin/validation_login">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input type="text" id="username" name="username" autofocus value="" placeholder="Username" class="form-control" />
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input type="password" id="password" name="password" autofocus value="" placeholder="Password" class="form-control" />
								</div>
								<br>
								<input type="submit" name="submit" value="LOGIN" class="btn btn-block btn-sm btn-danger">
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 col-lg-4"></div>
			</div>
		</div>
	</body>
</html>