<?php
include('conn.php');
$content = $_POST['content'];
if (empty($content)) {
	echo '<script language="javascript">';
    echo 'alert("亲！你还没输入你的留言噢~！");';
    echo "location.href='../leaveWords.php'";
    echo '</script>';   

    include '../leaveWords.php';
}
else{
	date_default_timezone_set('Etc/GMT-8');
	$rq = $date['regdate'] = date("Y-m-d H:i");
	$sql = "insert into ly (content, time) values('$content', '$rq')";
	$dbh->exec($sql);
	if ($dbh) 
	{
		echo '<script language="javascript">';
	    echo 'alert("亲！感谢你的留言");';
	    echo "location.href='../leaveWords.php'";
	    echo '</script>';   

	    include '../leaveWords.php';
	}
	else
	{
		echo '<script language="javascript">';
	    echo 'alert("对不起！留言失败");';
	    echo "location.href='../leaveWords.php'";
	    echo '</script>';   

	    include '../leaveWords.php';
	}
}