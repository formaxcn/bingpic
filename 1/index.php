<?php  
	$randseed=rand(0,18);
    $str=file_get_contents('https://www.bing.com/HPImageArchive.aspx?idx='.$randseed.'&n=1');  
    if(preg_match("/<url>(.+?)<\/url>/ies",$str,$matches)){  
        $imgurl='https://www.bing.com'.$matches[1];
		$imgurl=str_replace("1366x768","1920x1080",$imgurl);
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