<?php 
    require_once 'init.php';
    
    //定义一个标识本页面的常量
    define(SCRIPT, 'news_list');
    
    /* 分页模块 */
    //防止非法的page值
    if(isset($_GET['page']) && ($_GET['page'] > 0) && is_numeric($_GET['page'])){
        $page = intval($_GET['page']); //当前页码，防止不是整数，还需要取整
    }else{
        $page = 1;
    }
    $pagesize = 30; //每页显示数目
    $pagenum = ($page-1) * $pagesize; //检索起始点
    $count = num_rows(query($conn, 'SELECT id FROM cms_article'));
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
    /* 新闻列表 */
    $sql = "SELECT * FROM cms_article LIMIT $pagenum,$pagesize";
    $result = query($conn,$sql);
    $article = findAll($result);
    
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>资讯中心</title>
<link rel="stylesheet" href="css/main.css" />

</head>
<body>
<?php include 'includes/header.inc.php';?>
<div class="nav">
    <a href="index.php">首页</a> > <a href="news_list.php">资讯中心</a>
</div>
<div id="news_list">
    <ul>
        <?php foreach ($article as $key => $value){?>
              <li><img src="images/arrow.gif"><a href="news.php?id=<?php echo $value['id']; ?>"><?php echo $value['title'] ;?></a><span><?php echo $value['post_time'];?></span></li>       
        <?php }?>
    </ul>
    
   <?php page(1);?>
    
</div>


<?php include 'includes/footer.inc.php';?>
</body>
</html>