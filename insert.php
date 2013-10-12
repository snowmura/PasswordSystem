<?php

 require("connect.php"); //mysql_connect & mysql_select_db

$service = $_POST['service'];
$accounts = $_POST['accounts'];
$password = $_POST['password'];
$memo = $_POST['memo']; 

	$sql = "insert into accounts(service,accounts,password,memo)
	 values('$service','$accounts','$password','$memo')";

	$result = mysql_query($sql)or die(mysql_error());


 header('Location: password.php');

?>


