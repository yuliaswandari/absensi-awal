<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Absensi Pegawai</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('assets/images/favicon.png')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url('assets/images/img-01.png')?>" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?= base_url().'login/authkode'?>" method="post">
					<span class="login100-form-title">
						Absensi Pegawai
					</span>
                   
				   <div class="text-center">Halo, <?= $this->session->userdata('ses_nama');?> </div><br/>
				   <input type="hidden" name="id" value="<?= $this->session->userdata('ses_id');?>">
				  
				    <?= $this->session->flashdata('msg');?>
					<div class="wrap-input100 validate-input" data-validate = "Valid code is required">
						
						<input class="input100" type="text" name="kode" placeholder="Masukkan kode">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<!-- <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div> -->
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Kirim
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Belum
						</span>
						<a class="txt2" href="#">
							menerima sms kode?
						</a>
					</div>

					<div class="text-center p-t-120">
						<!-- <a class="txt2" href="<?= base_url('login/admin');?>">
							Masuk sebagai Admin
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a> -->
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?= base_url('assets/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/vendor/tilt/tilt.jquery.min.js')?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/js/main.js')?>"></script>

</body>
</html>