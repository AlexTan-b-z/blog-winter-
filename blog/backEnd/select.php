<?php
include('conn.php');
$sql = 'SELECT * FROM log_mb';
$res = $dbh->prepare($sql);
$res->execute();
$message = $res->fetchAll(PDO::FETCH_ASSOC);
?>