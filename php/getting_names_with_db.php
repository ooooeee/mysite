<?php require_once "./includes/connecting_db.php" ?>
<?
$result = mysqli_query($connection, "SELECT * FROM `data` ");	
	$db_data = $result->fetch_assoc();
	$named = $db_data['names'];
    

$properties = mysqli_query($connection, "SELECT * FROM `properties`");
    $db_properties = $properties->fetch_assoc();

$projects_data = mysqli_query($connection, "SELECT * FROM `projects` ");
	$blog_desc = $projects_data->fetch_assoc();
	
		


