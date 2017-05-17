<?php 
    require_once 'init.php';
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = 'SELECT * FROM cms_case WHERE id = '.$id;
        $result = query($conn, $sql);
        $case = findOne($result);
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>案例详情</title>
<link rel="stylesheet" href="css/main.css" />
</head>
<body>
<?php include 'includes/header.inc.php';?>
<div class="nav">
    <a href="index.php">首页</a> > <a href="case_list.php">案例展示</a> > <a href="case.php?id=<?php echo $id;?>"><?php echo $case['name']?></a>
</div>
<div id="case_info">
    <table>
        <tr><td>项目名称：</td><td><?php echo $case['name']?></td></tr>
        <tr><td>上架时间：</td><td><?php echo $case['post_time']?></td></tr>
        <tr><td>项目网址：</td><td><?php echo $case['http_address']?></td></tr>
        <tr><td>项目描述：</td><td><?php echo $case['description']?></td></tr>
    </table>
</div>
<?php include 'includes/footer.inc.php';?>
</body>
</html>