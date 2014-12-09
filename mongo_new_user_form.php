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
		</style>
	</head>
	<body>
	    <header>
            
        </header>

		<div class="container question">
			<div class="col-xs-12 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-3 col-md-offset-3">
				<p>
					Welcome to Polyglot <a href="index.php">Return to Home</a>
				</p>
				<hr>
				<?php
				//connect to mongodb
				$m = new MongoClient();
				//connect to the test db for now
				$db = $m->nodetest1;
				//$gridfs = $db->getGridFS();
				//echo "connected to nodetest1";
				if(!empty($_POST['new_username'])){
					$username=$_POST['new_username'];
				} else {
					echo "ERROR new_username is empty";
				}
				if(!empty($_POST['new_password'])){
					$password=$_POST['new_password'];
				} else {
					echo "ERROR new_password is empty";
				}
				if(!empty($_POST['age'])){
					$age=$_POST['age'];
				} else {
					echo "ERROR age is empty";
				}
				if(!empty($_POST['country'])){
					$country=$_POST['country'];
				} else {
					echo "ERROR country is empty";
				}
				
				//$gridfs->storeUpload('profile_pic' array('profile_pic' => $_POST['profile_pic']));
				$collection = $db->mytestcollection;
				//echo "Selected the collection";

				$document = array( 
				      'username' => $username, 
				      'password' => $password,
				      'age' => $age,
				      'country' => $country
				   );

				   $collection->insert($document);
				   echo "User created Successfully";
				?>		
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

