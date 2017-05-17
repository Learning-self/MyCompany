<?php 
    /* 用于初始化：调用所有函数和配置文件 */
    header('Content-type:text/html;charset=utf-8');
    date_default_timezone_set('PRC');
    
       
    include 'includes/config.php';
    include 'includes/db.func.php';
    include 'includes/common.func.php';
    global $conn;
   /* 建立数据库连接 */
    $conn = connect($config);
    global $conn;    
?>