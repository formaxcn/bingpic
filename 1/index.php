<?php  
	$randseed=rand(0,18);
    $str=file_get_contents('https://www.bing.com/HPImageArchive.aspx?format=js&mkt=en-US&idx='.$randseed.'&n=1');
    $array = json_decode($str);
	$imgurl = 'https://www.bing.com'.$array->{"images"}[0]->{"urlbase"}.'_1920x1080.jpg';
	
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