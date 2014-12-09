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
				Welcome to the Quiz Creation Portal
			</p>
		</header>
		<div class="container">
			<form class="fprm-signin" method="post" id="newquiz" name="newquiz" action="create_quiz_insert.php">
				<h1>Create a new quiz</h1>
				<input type="text" id='quiz_name' name='quiz_name' class="form-control" placeholder="Enter quiz name here"/>
				<div style="border-bottom:2px solid silver; margin-top:10px; margin-bottom:10px;"></div>
				<h3>Question 1</h3>
				<input type="text" id='q1' name='q1' class="form-control" placeholder="Enter question1"/>
				<input type="text" id='q1a1' name='q1a1' class="form-control" placeholder="Enter answer 1"/>
				<input type="text" id='q1a2' name='q1a2' class="form-control" placeholder="Enter answer 2"/>
				<input type="text" id='q1a3' name='q1a3' class="form-control" placeholder="Enter answer 3"/>
				<input type="text" id='q1a4' name='q1a4' class="form-control" placeholder="Enter answer 4"/>
				<input type="number" id='q1a5' name='q1a5' class="form-control" placeholder="Enter the correct answer (number) "/>
				<div style="border-bottom:2px solid silver; margin-top:10px; margin-bottom:10px;"></div>
				<h3>Question 2</h3>
				<input type="text" id='q2' name='q2' class="form-control" placeholder="Enter question2"/>
				<input type="text" id='q2a1' name='q2a1' class="form-control" placeholder="Enter answer 1"/>
				<input type="text" id='q2a2' name='q2a2' class="form-control" placeholder="Enter answer 2"/>
				<input type="text" id='q2a3' name='q2a3' class="form-control" placeholder="Enter answer 3"/>
				<input type="text" id='q2a4' name='q2a4' class="form-control" placeholder="Enter answer 4"/>
				<input type="number" id='q2a5' name='q2a5' class="form-control" placeholder="Enter the correct answer (number) "/>
				<div style="border-bottom:2px solid silver; margin-top:10px; margin-bottom:10px;"></div>
				<h3>Question 3</h3>
				<input type="text" id='q3' name='q3' class="form-control" placeholder="Enter question3"/>
				<input type="text" id='q3a1' name='q3a1' class="form-control" placeholder="Enter answer 1"/>
				<input type="text" id='q3a2' name='q3a2' class="form-control" placeholder="Enter answer 2"/>
				<input type="text" id='q3a3' name='q3a3' class="form-control" placeholder="Enter answer 3"/>
				<input type="text" id='q3a4' name='q3a4' class="form-control" placeholder="Enter answer 4"/>
				<input type="number" id='q3a5' name='q3a5' class="form-control" placeholder="Enter the correct answer (number) "/>
				<div style="border-bottom:2px solid silver; margin-top:10px; margin-bottom:10px;"></div>
				<h3>Question 4</h3>
				<input type="text" id='q4' name='q4' class="form-control" placeholder="Enter question4"/>
				<input type="text" id='q4a1' name='q4a1' class="form-control" placeholder="Enter answer 1"/>
				<input type="text" id='q4a2' name='q4a2' class="form-control" placeholder="Enter answer 2"/>
				<input type="text" id='q4a3' name='q4a3' class="form-control" placeholder="Enter answer 3"/>
				<input type="text" id='q4a4' name='q4a4' class="form-control" placeholder="Enter answer 4"/>
				<input type="number" id='q4a5' name='q4a5' class="form-control" placeholder="Enter the correct answer (number) "/>
				<div style="border-bottom:2px solid silver; margin-top:10px; margin-bottom:10px;"></div>
				<h3>Question 5</h3>
				<input type="text" id='q5' name='q5' class="form-control" placeholder="Enter question5"/>
				<input type="text" id='q5a1' name='q5a1' class="form-control" placeholder="Enter answer 1"/>
				<input type="text" id='q5a2' name='q5a2' class="form-control" placeholder="Enter answer 2"/>
				<input type="text" id='q5a3' name='q5a3' class="form-control" placeholder="Enter answer 3"/>
				<input type="text" id='q5a4' name='q5a4' class="form-control" placeholder="Enter answer 4"/>
				<input type="number" id='q5a5' name='q5a5' class="form-control" placeholder="Enter the correct answer (number) "/>
				<div style="border-bottom:2px solid silver; margin-top:10px; margin-bottom:10px;"></div>
				<h3>Question 6</h3>
				<input type="text" id='q6' name='q6' class="form-control" placeholder="Enter question6"/>
				<input type="text" id='q6a1' name='q6a1' class="form-control" placeholder="Enter answer 1"/>
				<input type="text" id='q6a2' name='q6a2' class="form-control" placeholder="Enter answer 2"/>
				<input type="text" id='q6a3' name='q6a3' class="form-control" placeholder="Enter answer 3"/>
				<input type="text" id='q6a4' name='q6a4' class="form-control" placeholder="Enter answer 4"/>
				<input type="number" id='q6a5' name='q6a5' class="form-control" placeholder="Enter the correct answer (number) "/>
				<div style="border-bottom:2px solid silver; margin-top:10px; margin-bottom:10px;"></div>
				<h3>Question 7</h3>
				<input type="text" id='q7' name='q7' class="form-control" placeholder="Enter question7"/>
				<input type="text" id='q7a1' name='q7a1' class="form-control" placeholder="Enter answer 1"/>
				<input type="text" id='q7a2' name='q7a2' class="form-control" placeholder="Enter answer 2"/>
				<input type="text" id='q7a3' name='q7a3' class="form-control" placeholder="Enter answer 3"/>
				<input type="text" id='q7a4' name='q7a4' class="form-control" placeholder="Enter answer 4"/>
				<input type="number" id='q7a5' name='q7a5' class="form-control" placeholder="Enter the correct answer (number) "/>
				<div style="border-bottom:2px solid silver; margin-top:10px; margin-bottom:10px;"></div>
				<h3>Question 8</h3>
				<input type="text" id='q8' name='q8' class="form-control" placeholder="Enter question8"/>
				<input type="text" id='q8a1' name='q8a1' class="form-control" placeholder="Enter answer 1"/>
				<input type="text" id='q8a2' name='q8a2' class="form-control" placeholder="Enter answer 2"/>
				<input type="text" id='q8a3' name='q8a3' class="form-control" placeholder="Enter answer 3"/>
				<input type="text" id='q8a4' name='q8a4' class="form-control" placeholder="Enter answer 4"/>
				<input type="number" id='q8a5' name='q8a5' class="form-control" placeholder="Enter the correct answer (number) "/>
				<div style="border-bottom:2px solid silver; margin-top:10px; margin-bottom:10px;"></div>
				<h3>Question 9</h3>
				<input type="text" id='q9' name='q9' class="form-control" placeholder="Enter question9"/>
				<input type="text" id='q9a1' name='q9a1' class="form-control" placeholder="Enter answer 1"/>
				<input type="text" id='q9a2' name='q9a2' class="form-control" placeholder="Enter answer 2"/>
				<input type="text" id='q9a3' name='q9a3' class="form-control" placeholder="Enter answer 3"/>
				<input type="text" id='q9a4' name='q9a4' class="form-control" placeholder="Enter answer 4"/>
				<input type="number" id='q9a5' name='q9a5' class="form-control" placeholder="Enter the correct answer (number) "/>
				<div style="border-bottom:2px solid silver; margin-top:10px; margin-bottom:10px;"></div>
				<h3>Question 10</h3>
				<input type="text" id='q10' name='q10' class="form-control" placeholder="Enter question10"/>
				<input type="text" id='q10a1' name='q10a1' class="form-control" placeholder="Enter answer 1"/>
				<input type="text" id='q10a2' name='q10a2' class="form-control" placeholder="Enter answer 2"/>
				<input type="text" id='q10a3' name='q10a3' class="form-control" placeholder="Enter answer 3"/>
				<input type="text" id='q10a4' name='q10a4' class="form-control" placeholder="Enter answer 4"/>
				<input type="number" id='q10a5' name='q10a5' class="form-control" placeholder="Enter the correct answer (number) "/>
				<div style="border-bottom:2px solid silver; margin-top:10px; margin-bottom:10px;"></div>

				<button class="btn btn-success btn-block" id="create_quiz_submit" type="submit">Create Quiz</button>
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