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
	$hiragana = $_POST['hiragana'];
	$kanji = $_POST['kanji'];

	if(!$japanese || !$english || !$hiragana || !$kanji){
		echo 'Missing required fields';
		exit;
	}

	if(!get_magic_quotes_gpc()){
		$japanese = addslashes($japanese);
		$english = addslashes($english);
		$hiragana = addslashes($hiragana);
		$kanji = addslashes($kanji);
	}

	$db = mysqli_connect('localhost','root','t0mf0rd','language_project');
	if(mysqli_connect_errno()){
		echo 'Error: Could not connect to db';
		exit;
	}
	$query = "insert into japanese_vocab set japanese ='".$japanese."', english ='".$english."', hiragana ='".$hiragana."', kanji='".$kanji."'";

	/*Check for duplicates*/
	$dupesql = "select * from japanese_vocab where english='".$english."'";
	$duperaw = $db->query($dupesql);
	if(mysql_num_rows($duperaw) > 0){
		echo 'Error, this entry already exists in the database.';
		exit;
	}
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