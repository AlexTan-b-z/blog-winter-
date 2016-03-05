<?php
include('conn.php');
$sql = "insert into img (fileName,file_url) values('$fileName','$file_url')";
$dbh->exec($sql);
?>