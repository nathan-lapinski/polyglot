<?php
require 'config.php';
//This is a test file for editing information on the live data base - will place this functionality under the 'edit' section
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

	</head>
	<body>
		<header>
			<p class="text-center">
				Welcome to testing
			</p>
		</header>
		<div class="container" style="height:800px;">
			<?php
			$category='';
			 if(!empty($_POST['insert'])){
			     $name=$_POST['insert'];
			     $category="questions";
			     mysql_query("INSERT INTO questions (id, question_name, answer1, answer2, answer3, answer4, answer, category_id)VALUES ('NULL','$name','ph1','ph2','ph3','ph4',1,1)") or die(mysql_error());
			 }
			?>

			<?php
				//let's start by dumping all of the content of the questions table
				$res = mysql_query("select * from questions") or die(mysql_error());
                $rows = mysql_num_rows($res);
                $i = 1;
                while($result=mysql_fetch_array($res)){
                	echo $result['question_name'];
                }
			?>
			
		</div>
		<footer>
			<p class="text-center" id="foot">
				Nathan Lapinski Web Design 2014
			</p>
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/jquery.validate.min.js"></script>
	</body>
</html>