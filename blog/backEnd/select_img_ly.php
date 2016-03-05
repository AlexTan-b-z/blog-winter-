<?php
include('conn.php');
$sql = 'SELECT * FROM img_ly';
$res = $dbh->prepare($sql);
$res->execute();
$message = $res->fetchAll(PDO::FETCH_ASSOC);
?>