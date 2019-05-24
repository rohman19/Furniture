<html>
<head>
<meta charset="utf-8">
<title>Halaman User | Login</title>
<link href="<?php echo base_url().'assets/' ?>login_style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
<script type="text/javascript" src="assets/css/sweetalert.min.js"></script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
 <link rel="shortcut icon" href="https://peyfurniture.000webhostapp.com/glj.png"/>
<!--//webfonts-->
<script>
	function myFunction()
		{
			alert("Thanks for login");
		}
</script>
</head>
 
<body>
	<div class="main">
		<div class="user">
			
		</div>
		<div class="login">
			<div class="inset">
		<center><h1>LOGIN USER</h1></center>
					<?php echo form_open('Home/login'); ?>
			         <div>
						<span><label>Username</label></span>
						<span><input type="text" name="username" class="textbox" id="active"></span>
					 </div>
					 <div>
						<span><label>Password</label></span>
					    <span><input type="password" name="password" class="password" id="active"></span>
					 </div>
					<div class="sign">
						<div class="submit">
						<input type="submit" name="submit" value="Submit">
						</div>
						<span class="forget-pass">
							<a href="<?= base_url(); ?>lost_user">Lupa Password?</a>
						</span>
						  <div class="copy_right">
            <p>
                </br>
            <center>Belum punya akun ? Daftar 
            <a href="<?= base_url(); ?>home/registrasi">disini</a></center>
            <center><p><a href="<?= base_url(); ?>"><i class="fa fa-home" style="font-size:30px;"></i> Back to Home</a></p>
            </center>
         </div>
							<div class="clear"> </div>
					</div>
					</form>
				</div>
			</div>
		
		</div>
		 
   					
				
	 
</body>
</html>