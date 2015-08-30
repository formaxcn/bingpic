<?php  
	$randseed=10;
//$randseed=rand(1,100);
//echo $randseed;
    $str=file_get_contents('http://cn.bing.com/HPImageArchive.aspx?idx='.$randseed.'&n=1');  
    if(preg_match("/<url>(.+?)<\/url>/ies",$str,$matches)){  
        $imgurl='http://cn.bing.com'.$matches[1];  
    }  
    if($imgurl){  
        header('Content-Type: image/JPEG');  
        @ob_end_clean();  
        @readfile($imgurl);  
        @flush(); @ob_flush();  
        exit();  
    }else{  
        exit('error');  
    }  
?> 