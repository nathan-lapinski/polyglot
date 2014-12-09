<!DOCTYPE html>
<html>
	<head>
		<title>Polyglot</title>
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
		<style>
			.container {
				margin-top: 110px;
			}
			.error {
				color: #B94A48;
			}
			.form-horizontal {
				margin-bottom: 0px;
			}
			.hide{display: none;}
			#mongo_login_form{
				display:none;
			}
			#mongo_new_user_form{
				display:none;
			}
		</style>
	</head>
	<body>
	    <header>
	    	<p class="text-center">
            Welcome to Polyglot
        	</p>
        </header>

		<div class="container question">
			<div class="col-xs-12 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-3 col-md-offset-3">
				<hr>
				<button id="mongo_new_user" class="mongo_login_button btn btn-success btn-block">New User</button>
				<button id="mongo_existing_user" class="mongo_login_button btn btn-success btn-block">Login</button>
				<form id="mongo_new_user_form" method="post" action="mongo_new_user_form.php">
					<input type="text" name="new_username" id="new_username" placeholder="username"></input>
					<input type="text" name="new_password" id="new_password" placeholder="password"></input>
					<input type="number" name="age" id="age" placeholder="age"></input>
					<input type="text" name="country" id="country" placeholder="country"></input>
					<!--<input type="file" name="profile_pic" id="profile_pic" /> -->
					<button value="submit" class="btn btn-success btn-block">Create User</button>
				</form>
				<form id="mongo_login_form" method="post" action="mongo_login_form.php">
					<input type="text" name="login_username" id="login_username" placeholder="username"></input>
					<input type="text" name="login_password" id="login_password" placeholder="password"></input>
					<button value="submit" class="btn btn-success btn-block">Login</button>
				</form>
			</div>
		</div>
       <footer>
            <p class="text-center" id="foot">
                Nathan Lapinski Web Design 2014              
            </p>
        </footer>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script>
		//jquery shenanigans
		$("#mongo_new_user").click(function(){
			//fade out the buttons, bring in the new user form
			$(this).fadeOut("slow");
			$("#mongo_existing_user").fadeOut("slow");
			$("#mongo_new_user_form").fadeIn("slow");
		});
		$("#mongo_existing_user").click(function(){
			//fade out the buttons, bring in the new user form
			$(this).fadeOut("slow");
			$("#mongo_new_user").fadeOut("slow");
			$("#mongo_login_form").fadeIn("slow");
		});
		</script>
	</body>
</html>

