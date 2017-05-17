<?php 
    require_once '../init.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MyCompany后台管理系统</title>
<link rel="stylesheet" href="css/admin.css" />
</head>
<body>
<div class="container">
<div id="login">
    <form action="?" method="post">
        <table>
            <tr>
                <td><img alt="MyCompany" src="../images/logo.png"></td>
                <td>
                    <table>
                        <tr><td>用户名：</td><td><input type="text" name="admin_name"></td></tr>
                        <tr><td>密&nbsp;&nbsp;&nbsp;码：</td><td><input type="text"name="admin_name"></td></tr>
                        <tr><td>验证码：</td><td><input type="text" name="admin_name" style="width:40px;"><img id="captcha_img" border='1' src='captcha.php?r=<?php echo rand(); ?>' style="width:100px; height:30px" /><a href="javascript:void(0)" onclick="document.getElementById('captcha_img').src='captcha.php?r='+Math.random()">换一个?</a></td></tr>
                        <tr id="submit"><td colspan=2 ><input type="submit" value="登录"></td></tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>
</div>
</body>
</html>