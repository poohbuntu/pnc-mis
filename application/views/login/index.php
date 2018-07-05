<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
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
      <div class="row justify-content-center">
        <div class="col-4">
          <?php
            $data = array(
              'name' => 'form_login',
            );
            echo form_open('login/check_login', $data);
          ?>
            <div class="form-group">
              <?php
                echo form_label('Username', 'username');
                $data = array(
                  'type'  => 'text',
                  'class' => 'form-control',
                  'name'  => 'username',
                  'id'  => 'username',
                  'placeholder' => 'Username',
                );
                echo form_input($data);
              ?>
            </div>
            <div class="form-group">
              <?php
                echo form_label('Password', 'password');
                $data = array(
                  'type'  => 'password',
                  'class' => 'form-control',
                  'name'  => 'password',
                  'id'  => 'password',
                  'placeholder' => 'Password',
                );
                echo form_input($data);
              ?>
            </div>
            <div class="form-group">
              <?php
                $data = array(
                  'class' => 'btn btn-primary',
                  'name' => 'mysubmit',
                  'value' => 'Submit',
                );
                echo form_submit($data);
                $data = array(
                  'class' => 'btn btn-danger',
                  'name' => 'myreset',
                  'value' => 'Clear',
                );
                echo form_reset($data);
              ?>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>
		</div>
	</body>
</html>
