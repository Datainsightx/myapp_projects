<?php

$target_dir = "/Upload";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$query = "INSERT INTO school_data VALUES ('$_POST[schoolid]','$_POST[target_file]') 
$result = pg_query($query); 
$test_data = pg_fetch_all($result);

$fieldname = pg_field_name($test_data);

?>
