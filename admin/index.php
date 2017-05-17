<?php 
    require_once '../init.php';
    /* 判断是否登录 */
    if(!isset($_COOKIE[admin_user])){
        alertMes('请先登录！', 'login.php');
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MyCompany后台管理系统</title>
</head>
<frameset frameborder="1" border="1" noresize rows="9%,91%">
	<frame src="top.php" scrolling="no" />
	<frameset frameborder="0" cols="10%,90%">
		<frame src="menu.html" scrolling="no" />
		<frame name="main" src="sys_info.php" />
	</frameset>
</frameset>
</html>