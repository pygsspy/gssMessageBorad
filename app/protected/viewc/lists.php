<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title> new document </title>
  <meta name="generator" content="editplus" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
 </head>

 <body>

	<a href="/app/">发布留言</a><br><br>
	
	<?php
		if ($data['arr']){ // 是否有数据
			foreach ($data['arr'] as $v){
				// 显示每一行
				echo '<li>'.$v['username'].' 说：'.$v['message'].'</li>';
			}
		}
	?>

 </body>
</html>
