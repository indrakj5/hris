<!DOCTYPE html>
<html>
  	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login Portal HRIS</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="../assets/css/AdminLTE.css">
		<link rel="stylesheet" href="../assets/css/blue.css">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato" />
		<style>
			.bgd{
 				background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('../assets/images/bg.jpg');
				background-size:cover;
  				background-repeat:no-repeat;
			}
		</style>
  	</head>
  	<body class="hold-transition login-page bgd">
    	<div class="login-box" style="box-shadow:0 1px 0 rgba(12,13,14,0.1), 0 1px 3px rgba(12,13,14,0.1), 0 4px 20px rgba(12,13,14,0.035), 0 1px 1px rgba(12,13,14,0.025);">
      	<div class="login-box-body" align="center">
		<form action="session.php" method="post">
       		<div class="row">
				<div class="col-xs-12">
				<img src="" class="img-responsive" align="center">
				<p class="login-box-msg" style="margin-top:5px; border-top:solid 1px #ededed;">Login Untuk Masuk ke Portal</p>
					<div class="form-group has-feedback">
						<input type="text" class="form-control" placeholder="Username" name="username" required>
						<span class="fa fa-user form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" name="password" class="form-control" placeholder="Password" required>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
				</div>
			</div>
          		<div class="row">
           		 	<div class="col-xs-3"></div>
           		 	<div class="col-xs-6"><button type="submit" class="btn btn-danger btn-block" style="margin:5px;"><i class="fa fa-sign-in"></i> Sign In</button></div>
           		 	<div class="col-xs-3"></div>
          		</div>
        </form>
			<hr>
        	<div class="social-auth-links" style="padding:5px;">
				<i>HRIS Application<br>
				<b>v1.0</b></i><br><br>
				<!--<b></b>-->
        	</div>
      	</div>
    </div>
    <script src="assets/jQuery-2.1.4.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script src="assets/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  	</body>
</html>
