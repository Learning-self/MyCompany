<?php 
      /* 常用函数库 */
    
    /**返回文件大小的单位的转换
     * @param int $size
     * @return string
     */
    function transBytes($size){
        $arr = array('B','KB','MB','GB','TB','EB');
        $i = 0;
        while($size >= 1024){
            $size /= 1024;
            $i++;
        }
        return round($size,2).$arr[$i];
    }

    /**获取文件夹大小
     * @param string $path
     * @return number
     */
    function dirSize($path){
        $sum = 0;
        global $sum;
        $handle = opendir($path);
        while(($file = readdir($handle)) !== false){
            if ($file != '.' && $file != '..') {
                if(is_file($path.$file)){
                    $sum += filesize($path.$file);
                }
                if (is_dir($path.$file)) {
                    // PHP中的魔术常量
                    // 递归
                    $func = __FUNCTION__;
                    $func($path.$file);
                }
            }
        }
        closedir($handle);
        return $sum;
    }
    
    /**删除文件夹
     * @param string $path
     * @return string
     */
    function deleteFolder($path){
    		$handle = opendir($path);
    		while(($file = readdir($handle)) !== false){
    			if ($file != '.' && $file != '..') {
    				if(is_file($path.$file)){
    					unlink($path.$file);
    				}
    				if(is_dir($path.$file)){
    					$func = __FUNCTION__;
    					$func($path.$file);
    				}
    			}
    		}
    		closedir($path);
    		rmdir($path);//删除文件夹，此时里面的文件已经不存在
    		return '文件夹删除成功！';
    
    	}
    	
    /**提示信息，并跳转页面
     * @param string $mes
     * @param string $url
     */
    function alertMes($mes,$url){
        if ($url != ''){
    	   echo "<script type='text/javascript'>alert('{$mes}');location.href='{$url}';</script>";
        }else{
           echo "<script type='text/javascript'>alert('{$mes}');location.goback();</script>";
        }
    }
    
    /**返回特定格式时间
     * @param string $format
     * @param int $time
     * @return string
     */
    function myDate($format='Y/m/d H:i:s',$time){
        return date($format,$time);
    }
       
    /**输出函数
     * @param mixed $var
     */
    function outPut($var){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    } 
    
    function page($type){
       // 定义全局变量
       global $page,$page_absolute,$count,$page_absolute;
       if($type == 1){
          echo "<div class='page_num'>";
          echo "<ul>";
          for ($i=0;$i<$page_absolute;$i++){
               if($page == $i+1){
                echo "<li class='selected'><a href='".SCRIPT."php?page=".($i+1)."'>".($i+1)."</a></li>";
               }else{
                echo "<li><a href='".SCRIPT."php?page=".($i+1)."'>".($i+1)."</a></li>";
               }
          }
          echo "</ul>";
          echo "</div>";
       }elseif($type == 2){
           echo "<div class='page_text'>";
           echo "<ul>";
                echo "<li>".$page."/".$page_absolute."页</li>";
                echo "<li>|</li>";
                echo "<li>共有<strong>".$count."</strong>条数据</li>";
                echo "<li>|</li>";
                if($page == 1){
                     echo "<li>首页</li>";
                     echo "<li>|</li>";
                     echo "<li>上一页</li>";
                     echo "<li>|</li>";
                }else{
                     echo "<li><a href='".SCRIPT.".php'>首页</a></li>";
                     echo "<li>|</li>";
                     echo "<li><a href='".SCRIPT.".php?page=".($page-1)."'>上一页</a></li>";
                     echo "<li>|</li>";
                }
                           
                if ($page == $page_absolute){
                     echo "<li>下一页</li>";
                     echo "<li>|</li>";
                     echo "<li>尾页</li>";
                     echo "<li>|</li>";
                }else{
                     echo "<li><a href='".SCRIPT.".php?page=".($page+1)."'>下一页</a></li>";
                     echo "<li>|</li>";
                     echo "<li><a href='".SCRIPT.".php?page=".$page_absolute."'>尾页</a></li>";
                     echo "<li>|</li>";
                }
                echo "</ul>";
                echo "</div>";
       }    
    }
?>