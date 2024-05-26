<head>
    <meta charset="utf-8">
    <link href="<?php echo base_url('assets/libs/bootstrap/dist/css/login.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/libs/bootstrap/dist/css/login.min.css')?>" rel="stylesheet">
</head>

<div class ="row">
	<div class="col-md-6 mx-auto p-0">
		<div class="card">
<div class="login-box">
	<div class="login-snip">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-space">
			<div class="login">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="text" class="input"  placeholder="Enter your Email">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" placeholder="Enter your password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Log In">
				</div>
				<!-- <div class="hr"></div> -->
				<!-- <div class="foot">
					<a href="#">Forgot Password?</a>
				</div> -->
			</div>
		</div>
	</div>
</div>   
</div>
</div>
</div>
<script src="<?php echo base_url('assets/libs/bootstrap/dist/js/login.min.js')?>"></script>
<script src="<?php echo base_url('assets/libs/bootstrap/dist/js/login.bundle.min.js')?>"></script>