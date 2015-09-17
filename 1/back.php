<?php  
	$randseed=rand(0,18);
    $str=file_get_contents('http://cn.bing.com/HPImageArchive.aspx?format=js&idx='.$randseed.'&n=1');
    $array = json_decode($str);
	$imgurl = 'http://s.cn.bing.net'.$array->{"images"}[0]->{"urlbase"}.'_1920x1080.jpg';
	
    if($imgurl){  
        header('Content-Type: image/JPEG');  
        @ob_end_clean();  
        @readfile($imgurl);  
        @flush(); @ob_flush();  
        exit();  
    }else{  
        exit('pic error ');  
    }  
?> 
