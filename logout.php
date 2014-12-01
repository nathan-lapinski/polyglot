<?php
session_start();
session_destroy();
header( 'Location: http://localhost:5678/php_spike/index.php' ) ;
?>

