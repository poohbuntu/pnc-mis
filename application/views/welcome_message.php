<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PNC MIS</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.css">
		<script src="<?php echo base_url(); ?>asset/js/jquery-3.js" charset="utf-8"></script>
		<script src="<?php echo base_url(); ?>asset/js/bootstrap.js" charset="utf-8"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				</nav>
			</div>
			<div class="row">
				<div class="col">
      		1 of 2
					<?php
						echo $this->session->userdata('logged_in');
						echo $this->session->userdata('sess_username');
					?>
    		</div>
			</div>
		</div>
	</body>
</html>
