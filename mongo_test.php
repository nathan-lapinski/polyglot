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
					Polyglot
				</p>
				<hr>
				<?php
				//connect to mongodb
				$m = new MongoClient();
				echo 'Connection to db successful?!';
				$db = $m->nodetest1;
				echo "connected to nodetest1";
				if(!empty($_POST['username1'])){
				$name=$_POST['username1'];
				} else {echo "ERROR username is empty";}
				$pass=$_POST['password1'];
				$collection = $db->mytestcollection;
				echo "Selected the collection";

				$document = array( 
				      'username' => $name, 
				      'password' => $pass
				   );

				   $collection->insert($document);
				   echo "Document inserted successfully";
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

