<?php
require("connect.php");

$drop="drop table accounts";

$result=mysql_query($drop)or die("cannot drop");

$sql="create table accounts(
id int auto_increment,
primary key(id),
date timestamp default current_timestamp,
service varchar(260),
accounts varchar(260),
password varchar(260),
memo text)";

$result=mysql_query($sql)or die("cannot create");

echo "ok";

?>


