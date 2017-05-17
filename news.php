<?php 
require_once ('init.php');
if(isset($_GET['id'])){
    $sql = 'SELECT * FROM cms_article WHERE id = '.$_GET['id'];
    $result = query($conn, $sql);
    $article = findOne($result);
}else{
    exit();    
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>新闻详情</title>
<link rel="stylesheet" href="css/main.css" />

</head>
<body>
<?php include 'includes/header.inc.php';?>
<div class="nav">
    <a href="index.php">首页</a> > <a href="news_list.php">资讯中心</a> > <a href="news.php?id=<?php echo $article['id'];?>"><?php echo $article['title'];?></a>
</div>
<div id="news_info">
    <table>
        <tr><td>文章标题:</td><td><?php echo $article['title'];?></td></tr>
        <tr><td>发布时间:</td><td><?php echo $article['post_time'];?></td></tr>
        <tr><td colspan='2'>文章内容:</td></tr>
    </table>
    <p><?php echo $article['content'];?></p>
</div>


<?php include 'includes/footer.inc.php';?>
</body>
</html>