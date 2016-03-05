<?php
include('conn.php');
$sql = "
create table log_0 (
id int(4) not null auto_increment primary key,
name varchar(255) ,
time datetime 
)
";
$res = $dbh->prepare($sql);
$res->execute();
?>