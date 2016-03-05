<?php
include('conn.php');
$content = $_POST['message'];
if (empty($content)) {
	echo '<script language="javascript">';
    echo 'alert("亲！你还没输入你的留言噢~！");';
    echo "location.href='../home.php'";
    echo '</script>';   

    include '../home.php';
}
else{
	date_default_timezone_set('Etc/GMT-8');
	$rq = $date['regdate'] = date("Y-m-d H:i");
	$sql = "insert into log_mb (content, time) values('$content', '$rq')";
	$dbh->exec($sql);
	if ($dbh) 
	{
		echo '<script language="javascript">';
	    echo 'alert("亲！感谢你的留言");';
	    echo "location.href='../home.php'";
	    echo '</script>';   

	    include '../home.php';
	}
	else
	{
		echo '<script language="javascript">';
	    echo 'alert("对不起！留言失败");';
	    echo "location.href='../home.php'";
	    echo '</script>';   

	    include '../home.php';
	}
}