<?php
				//connect to mongodb
				$m = new MongoClient();
				//connect to the test db for now
				$db = $m->nodetest1;
				//echo "connected to nodetest1";
				if(!empty($_POST['login_username'])){
					$username=$_POST['login_username'];
				} else {
					echo "ERROR login_username is empty";
				}
				if(!empty($_POST['login_password'])){
					$password=$_POST['login_password'];
				} else {
					echo "ERROR login_password is empty";
				}
				
				$collection = $db->mytestcollection;
				//echo "Selected the collection"; 
				$result = $collection->findOne(array('password' => $password));
				//you've got the collection at this point - so blast out the html templating

				?>	
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
				min-height: 450px;
			}
			.error {
				color: #B94A48;
			}
			.form-horizontal {
				margin-bottom: 0px;
			}
			.hide{display: none;}
		</style>
	</head>
	<body>
	    <header>
            <p class="text-center">Welcome <?php echo $result['username'];?></p>
        </header>

		<div class="container question">
			<div class="col-xs-12 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-3 col-md-offset-3">
				<p>
					Welcome to Polyglot <a href="index.php">Return to Home</a>
				</p>
				<hr>	
				<style>
				.user_profile_image_wrapper{
					width:40%;
					min-width: 200px;
					float:left;
				}
				.user_profile_data{
					width:60%;
					float:right;
				}
				.user_profile_image{
					border:8px solid #6F7F8E;
				}
				@media (max-width: 992px){
					.user_profile_image_wrapper, .user_profile_data{
						float:none;
					}
					.user_profile_data{
						margin-top:5px;
					}
				}
				</style>
				<div class="user_profile_image_wrapper">
						<img class="user_profile_image" src="<?php echo $result['path_to_pic'];?>"</img>
					</div>
					<div class="user_profile_data">
						<p>Username: <?php echo $result['username'];?></p>
						<p>Country: <?php echo $result['country'];?></p>
						<p>Age: <?php echo $result['age'];?></p>
						<p>Score: <?php echo $result['score'];?></p>
					</div>
				</section>
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
	</body>
</html>

