<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Insert Results</title>
</head>
<body>
	<h1>Insert Results</h1>
	<?php
	$japanese = $_POST['japanese'];
	$english = $_POST['english'];
	$meaning = $_POST['meaning'];
	$hiragana = $_POST['hiragana'];
	$kanji = $_POST['kanji'];

	if(!$japanese || !$english || !$meaning || !$hiragana || !$kanji){
		echo 'Missing required fields';
		exit;
	}

	if(!get_magic_quotes_gpc()){
		$japanese = addslashes($japanese);
		$english = addslashes($english);
		$meaning = addslashes($meaning);
		$hiragana = addslashes($hiragana);
		$kanji = addslashes($kanji);
	}

	$db = mysqli_connect('localhost','root','t0mf0rd','language_project');
	if(mysqli_connect_errno()){
		echo 'Error: Could not connect to db';
		exit;
	}
	$null = 3;
	/*$query = "insert into japanese_vocab values
			  ['".$null."', '".$japanese."', '".$english."', '".$meaning."', '".$hiragana."', '".$kanji."']";*/
	$query = "insert into japanese_vocab set japanese ='".$japanese."', english ='".$english."', meaning ='".$meaning."', hiragana ='".$hiragana."', kanji='".$kanji."'";
	$result = $db->query($query);
	if($result){
		echo $db->affected_rows." term inserted into db.";
	} else{
		echo "An error has occured. Insertion failed.";
	}
	$db->close();
	?>
</body>
</html>