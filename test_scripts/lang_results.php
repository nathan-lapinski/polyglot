<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Results</title>
</head>
<body>
	<?php
	$searchtype = $_POST['searchtype'];
//	$searchterm = $_POST['searchterm'];
	if(!$searchtype /*|| !$searchterm*/){
		echo 'Missing search fields.';
		exit;
	}
	if(!get_magic_quotes_gpc()){
		$searchtype = addslashes($searchtype);
		//$searchterm = addslashes($searchterm);
	}
    
	$db = mysqli_connect('localhost','root','t0mf0rd','language_project');
	if(mysqli_connect_errno()){
		echo 'Error: Could not connect to db';
		exit;
	}
	//$query = "select * from books where ".$searchtype." like '%".$searchterm."%'";
	$query = "select * from japanese_vocab";
	$result = $db->query($query);
	$num_results = $result->num_rows;
	echo "<p>Number of entries found: ".$num_results."</p>";
	for($i=0; $i < $num_results; $i++){
		$row = $result->fetch_assoc();
		echo "<p><strong>".($i+1).". Japanese: ";
		echo htmlspecialchars(stripslashes($row['japanese']));
		echo "</strong><br />English: ";
		echo stripslashes($row['english']);
		echo "<br />Meaning: ";
		echo stripslashes($row['meaning']);
		echo "<br />Kana: ";
		echo stripslashes($row['hiragana']);
		echo "<br />Kanji: ";
		echo stripslashes($row['kanji']);
		echo "</p>";
	}
	$result->free();
	$db->close();
	?> 
	</body>
	</html>