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
				$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
//$full_path_bitnami = "C:\Bitnami\wampstack-5.4.35-0\apache2ahtdocsphp_spike/";
$final_path = $target_file;
				//$gridfs->storeFile($_FILES['profile_pic'], array("metadata" => array("date" => new MongoDate())));
				$collection = $db->mytestcollection;
				//echo "Selected the collection";

				$document = array( 
				      'username' => $username, 
				      'password' => $password,
				      'age' => $age,
				      'country' => $country,
				      'path_to_pic' => $final_path,
				      'score' => 0
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

