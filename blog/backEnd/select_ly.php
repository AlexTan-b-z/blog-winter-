<?php
include('conn.php');
$sql = 'SELECT * FROM ly';
$res = $dbh->prepare($sql);
$res->execute();
$message = $res->fetchAll(PDO::FETCH_ASSOC);
?>