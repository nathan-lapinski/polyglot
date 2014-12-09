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
				//let's start by dumping all of the content of the questions table
				$res = mysql_query("select * from questions") or die(mysql_error());
                $rows = mysql_num_rows($res);
                $i = 1;
                while($result=mysql_fetch_array($res)){
                	echo $result['question_name'];
                }
			?>
			<form class="form-signin" method="post" id='insert' name="insert" action="insert_test.php">
				<div class="form-group">
					<input type="text" id='insert' name='insert' class="form-control" placeholder="Enter your Question here"/>
					<span class="help-block"></span>
				</div>
				<br>
				<button id="start_button" class="btn btn-success btn-block" type="submit">
					Start
				</button>
			</form>
			<form class="fprm-signin" method="post" id="newquiz" name="newquiz" action="new_quiz_insert.php">
				<h1>Create a new quiz</h1>
				<input type="text" id='quiz_namae' name='quiz_namae' class="form-control" placeholder="Enter quiz name here"/>
				<input type="text" id='q1' name='q1' class="form-control" placeholder="Enter question1"/>
				<input type="text" id='a1' name='a1' class="form-control" placeholder="Enter answer 1"/>
				<input type="text" id='a2' name='a2' class="form-control" placeholder="Enter answer 2"/>
				<input type="text" id='a3' name='a3' class="form-control" placeholder="Enter answer 3"/>
				<input type="text" id='a4' name='a4' class="form-control" placeholder="Enter answer 4"/>
				<button class="btn btn-success btn-block" id="create_quiz_test" type="submit">
			</form>
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