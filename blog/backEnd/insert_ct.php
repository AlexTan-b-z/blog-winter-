<?php
include('conn.php');
$title = $_POST['title'];
$content = $_POST['content'];
if (empty($content)||empty($title)) {
	echo '<script language="javascript">';
    echo 'alert("亲！你还没输入内容噢~！");';
    echo "location.href='../write.php'";
    echo '</script>';   

    include '../write.php';
}
else{
	date_default_timezone_set('Etc/GMT-8');
	$rq = $date['regdate'] = date("Y-m-d H:i");
	$sql = "insert into log_ct (title,content, time) values('$title','$content', '$rq')";
	$dbh->exec($sql);
	if ($dbh) 
	{
		echo '<script language="javascript">';
	    echo 'alert("亲！恭喜您，发表成功！");';
	    echo "location.href='../write.php'";
	    echo '</script>';   

	    include '../write.php';
	}
	else
	{
		echo '<script language="javascript">';
	    echo 'alert("对不起！发表失败");';
	    echo "location.href='../write.php'";
	    echo '</script>';   

	    include '../write.php';
	}
}