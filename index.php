<!DOCTYPE html>
<html>
  	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login Portal HRIS</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="assets/css/AdminLTE.css">
		<link rel="stylesheet" href="assets/css/blue.css">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato" />
		<!-- Include IconCaptcha stylesheet -->
        <link href="assets/css/icon-captcha.min.css" rel="stylesheet" type="text/css">
		<style>
			.bgd{
 				background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('assets/images/bg.jpg');
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
				<div class="col-xs-12">
			<div class="captcha-holder"></div>
				</div>
			<div>
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
    <script src="assets/js/jQuery-2.1.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>

            <!-- Include Google Font - Just for demo page -->
        <link href="//fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">

        <!-- Include jQuery Library -->
        <!--[if lt IE 9]>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
        <![endif]-->

        <!--[if (gte IE 9) | (!IE)]><!-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!--<![endif]-->
    <!-- Include IconCaptcha script -->
        <script src="assets/js/icon-captcha.min.js" type="text/javascript"></script>

        <!-- Initialize the IconCaptcha -->
        <script async type="text/javascript">
            $(window).ready(function() {

                $('.captcha-holder').iconCaptcha({
                    captchaTheme: ["light", "dark"], // Select the theme(s) of the Captcha(s). Available: light, dark
                    captchaFontFamily: '', // Change the font family of the captcha. Leaving it blank will add the default font to the end of the <body> tag.
                    captchaClickDelay: 500, // The delay during which the user can't select an image.
                    captchaHoverDetection: true, // Enable or disable the cursor hover detection.
                    enableLoadingAnimation: true, // Enable of disable the fake loading animation. Doesn't actually do anything other than look nice.
                    loadingAnimationDelay: 1500, // How long the fake loading animation should play.
                    showCredits: 'show', // Show, hide or disable the credits element. Valid values: 'show', 'hide', 'disabled' (please leave it enabled).
                    requestIconsDelay: 1500, // How long should the script wait before requesting the hashes and icons? (to prevent a high(er) CPU usage during a DDoS attack)
                    captchaAjaxFile: 'src/captcha-request.php', // The path to the Captcha validation file.
                    captchaMessages: { // You can put whatever message you want in the captcha.
                        header: "Select the image that does not belong in the row",
                        correct: {
                            top: "Great!",
                            bottom: "You do not appear to be a robot."
                        },
                        incorrect: {
                            top: "Oops!",
                            bottom: "You've selected the wrong image."
                        }
                    }
                })
                .bind('init.iconCaptcha', function(e, id) { // You can bind to custom events, in case you want to execute some custom code.
                    console.log('Event: Captcha initialized', id);
                }).bind('selected.iconCaptcha', function(e, id) {
                    console.log('Event: Icon selected', id);
                }).bind('refreshed.iconCaptcha', function(e, id) {
                    console.log('Event: Captcha refreshed', id);
                }).bind('success.iconCaptcha', function(e, id) {
                    console.log('Event: Correct input', id);
                }).bind('error.iconCaptcha', function(e, id) {
                    console.log('Event: Wrong input', id);
                });
            });
        </script>
  	</body>
</html>