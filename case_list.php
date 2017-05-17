<?php 
    require_once 'init.php';

    //定义一个标识本页面的常量
    define(SCRIPT, 'case_list');
    
    /* 查询案例分类 */
    $sql = "SELECT `cat_id`,`cat_name` FROM `cms_case_cat`";
    $cat = findAll(query($conn, $sql)); // 从数据库查询出来的分类
    
    /* 查询分类下所有案例，默认查询cat_id=1 */
    $sql2 = "SELECT `ppt_img`,`logo_img`,`name`,`id` FROM `cms_case`";
    $sql2 .= isset($_GET['cat_id']) ? ' WHERE `cat_id`='.$_GET['cat_id'] : 'WHERE `cat_id` = 1';
    
    /* 分页模块 */
    //防止非法的page值
    if(isset($_GET['page']) && ($_GET['page'] > 0) && is_numeric($_GET['page'])){
        $page = intval($_GET['page']); //当前页码，防止不是整数，还需要取整
    }else{
        $page = 1;
    }
    $pagesize = 4; //每页显示数目
    $pagenum = ($page-1) * $pagesize; //检索起始点
    $count = num_rows(query($conn, $sql2));
    //判断数据库是否清零，如果没数据，则页码为1
    if($count == 0){
        $page_absolute = 1;
    }else{
        $page_absolute = ceil($count/$pagesize);
    }
    //还要防止$值大于总页码,如果是这样的话，就将总页码值赋予$page
    if($page > $page_absolute){
        $page = $page_absolute;
    }
    
    $sql2 .= ' LIMIT '.$pagenum.','.$pagesize;
    $cases = findAll(query($conn, $sql2));
    print_r($count);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>案例展示</title>
<link rel="stylesheet" href="css/main.css" />
</head>
<body>
<?php include 'includes/header.inc.php';?>
<div id="case_cat">
    <ul>
    <?php foreach ($cat as $value){
        echo "<li><a href=case_list.php?cat_id=".$value['cat_id'].">".$value['cat_name']."</a></li>";
    }?>
    </ul>
</div>
<div id="case_list">
<ul>
    <?php 
        foreach ($cases as $value){
            echo "<li><a href='case.php?id=".$value['id']."'><img src='uploads/case/logo/".$value['ppt_img']."'><span>".$value['name']."</span></a></li>";
        }
    ?> 
</ul>
</div>
<?php page(2);?>
<?php include 'includes/footer.inc.php';?>
</body>
</html>