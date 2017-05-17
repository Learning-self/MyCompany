<?php 
    require_once 'init.php';
    
    /* 文章列表读取 */
    $sql = 'SELECT * FROM cms_article LIMIT 10';
    $result = query($conn,$sql);
    $article = findAll($result);
    /* cases */
    $sql = 'SELECT * FROM cms_case';
    $result = query($conn,$sql);
    $case = findAll($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>我的公司</title>
<link rel="stylesheet" href="css/main.css" />
<script type="text/javascript" src="js/jquery1.42.min.js"></script>
<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
</head>
<script type="text/javascript" src="js/index.js"></script>
<body>
<?php
    include 'includes/header.inc.php';
?>
<div id="banner">
    <div id="slideBox" class="slideBox">
            <!-- 下面是文字  -->
			<div class="hd">
				<ul><li>1</li><li>2</li><li>3</li></ul>
			</div>
			<!-- 下面图片  -->
			<div class="bd">
				<ul>
					<li><a href="#" target="_blank"><img src="images/bg01.jpg" /></a></li>
					<li><a href="#" target="_blank"><img src="images/bg02.jpg" /></a></li>
					<li><a href="#" target="_blank"><img src="images/bg03.jpg" /></a></li>
				</ul>
			</div>
		</div>
</div>
<div id="content" class="group">
   <div id="intro"><a id="service"></a>
        <ul>
            <li><a href="#" class="intro"><img alt="电子商务方案" src="images/left1.png"><span>电子商务方案</span></a></li>
            <li><a href="#" class="intro"><img alt="高品质网站解决方案" src="images/left2.png"><span>高品质网站解决方案</span></a></li>
            <li><a href="#" class="intro"><img alt="电子商务平台解决方案" src="images/left3.png"><span>电子商务平台解决方案</span></a></li>
            <li><a href="#" class="intro"><img alt="微信应用解决方案" src="images/left4.png"><span>微信应用解决方案</span></a></li>
            <li><a href="#" class="intro"><img alt="网站开发人才培养服务" src="images/left5.png"><span>网站开发人才培养服务</span></a></li>
            <li><a href="#" class="intro"><img alt="企业信息化解决方案" src="images/left6.png"><span>企业信息化解决方案</span></a></li>
        </ul>
        <div class="intro2" style="display:block;">
            <ul>
                <li><b>电子商务方案</b></li>
                <li><span>电子商务,B2B,B2C,C2C,O2O</span></li>
                <li><p>电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案</p></li>
            </ul>
        </div>
        <div class="intro2">
            <ul>
                <li><b>高品质网站解决方案</b></li>
                <li><span>电子商务,B2B,B2C,C2C,O2O</span></li>
                <li><p>电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案</p></li>
            </ul>
        </div>
        <div class="intro2">
            <ul>
                <li><b>电子商务平台解决方案</b></li>
                <li><span>电子商务,B2B,B2C,C2C,O2O</span></li>
                <li><p>电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案</p></li>
            </ul>
        </div>
        <div class="intro2">
            <ul>
                <li><b>微信应用解决方案</b></li>
                <li><span>电子商务,B2B,B2C,C2C,O2O</span></li>
                <li><p>电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案</p></li>
            </ul>
        </div>
        <div class="intro2">
            <ul>
                <li><b>网站开发人才培养服务</b></li>
                <li><span>电子商务,B2B,B2C,C2C,O2O</span></li>
                <li><p>电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案</p></li>
            </ul>
        </div>
        <div class="intro2">
            <ul>
                <li><b>企业信息化解决方案</b></li>
                <li><span>电子商务,B2B,B2C,C2C,O2O</span></li>
                <li><p>电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案电子商务方案</p></li>
            </ul>
        </div>
   </div>
   <div id="info">
        <div id="info_title"><h3>资讯中心</h3><span><a href="news_list.php">More</a></span></div>
        <ul>
        <?php 
            foreach ($article as $key => $value){
        ?>
            <li><img src="images/arrow.gif"><a href="news.php?id=<?php echo $value['id']; ?>"><?php echo $value['title'] ;?></a><span><?php echo $value['post_time'];?></span></li>
        <?php
             } 
        ?>          
        </ul>
   </div>
   <div id="case">
        <img src="images/cases.jpg" id="case_title" />
        <div class="picMarquee-left">
			<div class="bd2">
				<ul class="picList">
				    <?php foreach ($case as $key => $value){?>
					<li>
						<div class="pic"><a href="case.php?id=<?php echo $value['id'] ;?>" target="_blank"><img src="uploads/case/ppt/<?php echo $value['ppt_img'];?>" /></a></div>
						<div class="title"><a href="case.php?id=<?php echo $value['id'] ;?>" target="_blank"><?php echo $value['name'];?></a></div>
					</li>
					<?php 
                        }
                    ?>
				</ul>
			</div>
		</div>
   </div>
   <div id="about"><a id="link_us"></a>
        <div class="about">
            <h3>为什么选择我的公司？</h3>
            <p><span>我的公司</span>一场年轻时尚篮球盛宴与你相约这不是一场竞技比赛这是融合声光化电囊括多数流行文化
                                    运动跟娱乐元素，是现在年轻人的新玩法趣味多篮、试比天高、疯狂投篮、体感游戏啦啦队表演等等现场好玩游戏等着你
                                    更重要的是！！！</p><p>只要参加现场篮球三分挑战赛城市冠军将获得vivo X9活力蓝NBA定制版一台只有这样吗？NO城市冠军将参加上海晋级赛，胜出前6名与库里同台竞技
                                    酒店机票全包！vivo夏日篮球派对系列全国城市赛开启现场缤纷好礼等着你。</p>
        </div>
        <div class="about center">
            <h3>服务特色</h3>
            <p>一场年轻时尚篮球盛宴与你相约这不是一场竞技比赛这是融合声光化电囊括多数流行文化
                                    运动跟娱乐元素，是现在年轻人的新玩法趣味多篮、试比天高、疯狂投篮、体感游戏啦啦队表演等等现场好玩游戏等着你
                                    更重要的是！！！</p>
            <table>
                <tr><td>水平突出</td><td>环境优美</td><td>服务齐全</td></tr>
                <tr><td>技术大牛</td><td>高档CBD</td><td>随叫随到</td></tr>
                <tr><td>BOSS nice</td><td>美女如云</td><td>帅哥云集</td></tr>
            </table>
        </div>
        <div class="about">
            <h3>联系我们</h3>
            <table class="table_link">
                <tr><td><img alt="电话" src="images/phone.png"></td><td>400-8888-8888</td></tr>
                <tr><td><img alt="邮箱" src="images/email.png"></td><td>MyCompany@outlook.com</td></tr>
                <tr><td><img alt="地址" src="images/ip.png"></td><td>广东外语外贸大学</td></tr>
            </table>
        </div>
   </div>
</div>
<?php 
    include 'includes/footer.inc.php';
?>
</body>
</html>