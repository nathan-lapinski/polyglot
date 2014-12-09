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
			 if(!empty($_POST['quiz_name'])){
			 	//yes, these need to be put into a collection. I know :)
			     $name=$_POST['quiz_name'];
			     $q1 = $_POST['q1'];
			     $q1a1 = $_POST['q1a1'];
			     $q1a2 = $_POST['q1a2'];
			     $q1a3 = $_POST['q1a3'];
			     $q1a4 = $_POST['q1a4'];
			     $q1a5 = $_POST['q1a5'];
			     $q2 = $_POST['q2'];
			     $q2a1 = $_POST['q2a1'];
			     $q2a2 = $_POST['q2a2'];
			     $q2a3 = $_POST['q2a3'];
			     $q2a4 = $_POST['q2a4'];
			     $q2a5 = $_POST['q2a5'];
			     $q3 = $_POST['q3'];
			     $q3a1 = $_POST['q3a1'];
			     $q3a2 = $_POST['q3a2'];
			     $q3a3 = $_POST['q3a3'];
			     $q3a4 = $_POST['q3a4'];
			     $q3a5 = $_POST['q3a5'];
			     $q4 = $_POST['q4'];
			     $q4a1 = $_POST['q4a1'];
			     $q4a2 = $_POST['q4a2'];
			     $q4a3 = $_POST['q4a3'];
			     $q4a4 = $_POST['q4a4'];
			     $q4a5 = $_POST['q4a5'];
			     $q5 = $_POST['q5'];
			     $q5a1 = $_POST['q5a1'];
			     $q5a2 = $_POST['q5a2'];
			     $q5a3 = $_POST['q5a3'];
			     $q5a4 = $_POST['q5a4'];
			     $q5a5 = $_POST['q5a5'];
			     $q6 = $_POST['q6'];
			     $q6a1 = $_POST['q6a1'];
			     $q6a2 = $_POST['q6a2'];
			     $q6a3 = $_POST['q6a3'];
			     $q6a4 = $_POST['q6a4'];
			     $q6a5 = $_POST['q6a5'];
			     $q7 = $_POST['q7'];
			     $q7a1 = $_POST['q7a1'];
			     $q7a2 = $_POST['q7a2'];
			     $q7a3 = $_POST['q7a3'];
			     $q7a4 = $_POST['q7a4'];
			     $q7a5 = $_POST['q7a5'];
			     $q8 = $_POST['q8'];
			     $q8a1 = $_POST['q8a1'];
			     $q8a2 = $_POST['q8a2'];
			     $q8a3 = $_POST['q8a3'];
			     $q8a4 = $_POST['q8a4'];
			     $q8a5 = $_POST['q8a5'];
			     $q9 = $_POST['q9'];
			     $q9a1 = $_POST['q9a1'];
			     $q9a2 = $_POST['q9a2'];
			     $q9a3 = $_POST['q9a3'];
			     $q9a4 = $_POST['q9a4'];
			     $q9a5 = $_POST['q9a5'];
			     $q10 = $_POST['q10'];
			     $q10a1 = $_POST['q10a1'];
			     $q10a2 = $_POST['q10a2'];
			     $q10a3 = $_POST['q10a3'];
			     $q10a4 = $_POST['q10a4'];
			     $q10a5 = $_POST['q10a5'];

			     //create the quiz
			     mysql_query("INSERT INTO categories (id, category_name) VALUES ('NULL','$name')") or die(mysql_error());
			     //you will have to grab the quiz id at this point.
			     $quiz_res = mysql_query("SELECT id FROM categories WHERE category_name = '$name' ") or die(mysql_error());
			     $quiz_id = mysql_result($quiz_res, 0);
			     //populate the quiz
			     mysql_query("INSERT INTO questions (id, question_name, answer1, answer2, answer3, answer4, answer, category_id) VALUES ('NULL','$q1','$q1a1','$q1a2','$q1a3','$q1a4','$q1a5','$quiz_id')") or die(mysql_error());
			     mysql_query("INSERT INTO questions (id, question_name, answer1, answer2, answer3, answer4, answer, category_id) VALUES ('NULL','$q2','$q2a1','$q2a2','$q2a3','$q2a4','$q2a5','$quiz_id')") or die(mysql_error());
			     mysql_query("INSERT INTO questions (id, question_name, answer1, answer2, answer3, answer4, answer, category_id) VALUES ('NULL','$q3','$q3a1','$q3a2','$q3a3','$q3a4','$q3a5','$quiz_id')") or die(mysql_error());
			     mysql_query("INSERT INTO questions (id, question_name, answer1, answer2, answer3, answer4, answer, category_id) VALUES ('NULL','$q4','$q4a1','$q4a2','$q4a3','$q4a4','$q4a5','$quiz_id')") or die(mysql_error());
			     mysql_query("INSERT INTO questions (id, question_name, answer1, answer2, answer3, answer4, answer, category_id) VALUES ('NULL','$q5','$q5a1','$q5a2','$q5a3','$q5a4','$q5a5','$quiz_id')") or die(mysql_error());
			     mysql_query("INSERT INTO questions (id, question_name, answer1, answer2, answer3, answer4, answer, category_id) VALUES ('NULL','$q6','$q6a1','$q6a2','$q6a3','$q6a4','$q6a5','$quiz_id')") or die(mysql_error());
			     mysql_query("INSERT INTO questions (id, question_name, answer1, answer2, answer3, answer4, answer, category_id) VALUES ('NULL','$q7','$q7a1','$q7a2','$q7a3','$q7a4','$q7a5','$quiz_id')") or die(mysql_error());
			     mysql_query("INSERT INTO questions (id, question_name, answer1, answer2, answer3, answer4, answer, category_id) VALUES ('NULL','$q8','$q8a1','$q8a2','$q8a3','$q8a4','$q8a5','$quiz_id')") or die(mysql_error());
			     mysql_query("INSERT INTO questions (id, question_name, answer1, answer2, answer3, answer4, answer, category_id) VALUES ('NULL','$q9','$q9a1','$q9a2','$q9a3','$q9a4','$q9a5','$quiz_id')") or die(mysql_error());
			     mysql_query("INSERT INTO questions (id, question_name, answer1, answer2, answer3, answer4, answer, category_id) VALUES ('NULL','$q10','$q10a1','$q10a2','$q10a3','$q10a4','$q10a5','$quiz_id')") or die(mysql_error());

			 }
			?>
			<?php 
				echo "quiz successfully created";
			?> 
			
			<a href="<?php echo BASE_PATH.'';?>" class='btn btn-success'>Back to Main Page</a>

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