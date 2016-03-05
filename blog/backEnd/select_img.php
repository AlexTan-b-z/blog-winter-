<?php
include('conn.php');
$sql = 'SELECT * FROM img';
$res = $dbh->prepare($sql);
$res->execute();
$message = $res->fetchAll(PDO::FETCH_ASSOC);
?>