<?php 
// Page分页函数 
$page = !empty($_GET["page"]) ? $_GET["page"] : 1 ;
 
function Page($rows,$page_size){ 
	global $page,$select_from,$select_limit,$pagenav; 
	$page_count = ceil($rows/$page_size); 
	if($page <= 1 || $page == '') $page = 1; 
	if($page >= $page_count) $page = $page_count; 
	$select_limit = $page_size; 
	$select_from = ($page - 1) * $page_size.','; 
	$pre_page = ($page == 1)? 1 : $page - 1; 
	$next_page= ($page == $page_count)? $page_count : $page + 1 ; 
	$pagenav .= "第 $page/$page_count 页 共 $rows 张 "; 
	$pagenav .= "<a href='?page=1'>首页</a> "; 
	$pagenav .= "<a href='?page=$pre_page'>前一页</a> "; 
	$pagenav .= "<a href='?page=$next_page'>后一页</a> "; 
	$pagenav .= "<a href='?page=$page_count'>末页</a>"; 
	$pagenav.="　跳到<select name='topage' size='1' onchange='window.location=\"?page=\"+this.value'>\n"; 
	for($i=1;$i<=$page_count;$i++){ 
	if($i==$page) $pagenav.="<option value='$i' selected>$i</option>\n"; 
	else $pagenav.="<option value='$i'>$i</option>\n"; 
	} 
} // Page分页函数 
include 'conn.php';
// 用Page函数计算出 $select_from 从哪条记录开始检索、$pagenav 输出分页导航 
$q = $dbh->query("select * from img");
$row = $q->fetchAll();
$rows = count($row);
Page($rows,8); 
$sql = "select * from img limit $select_from $select_limit"; 
$rst = $dbh->prepare($sql); 
$rst->execute();

?> 