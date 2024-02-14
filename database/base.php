<?php
$dbinfo = "mysql:host=localhost;dbname=fhst";
$dbuser = "fhsttruthwrit";
$dbpass ="fhst4life@truthwrit";
$db = new PDO($dbinfo, $dbuser, $dbpass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//prof4NO_$!LackNot$page_in->script = $page_in->addScript("js/editor.js");
?>
