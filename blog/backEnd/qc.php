<?php
include('conn.php');
$sql = "TRUNCATE TABLE log_ct";
$qc = $dbh->prepare($sql);
$qc->execute();