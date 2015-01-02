<?php 
 
     $v=$_POST['v'];
   
    
 
?> 
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>解析视频 自带输入框，</title>

<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
 <style type="text/css">
.container {
width: 800px;

}
video{
width: 800px;
height:450px;
}
</style>
 

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

 <script>
 function subForm()
 {

form.action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']; ?> ";
 form.submit();
 //form1为form的id
 }
 </script>
  </head>
  <body>
	
<div class="container">
      <div class="row">
	      <h3><?php if ($v == null)  {
  echo "乖，请提交视频地址，不填则播放默认视频";
}  else {
  echo "你提交的视频地址是：$v";
}?></h3>

    <form id="form" action="" method="post"> 
      <div class="input-group">
     <input type="text" name="v" class="form-control" value='' /> 
     <span id="submit" class="input-group-addon btn" href="javascript:void(0)" onclick="subForm()">发射</span>
    </div>

         
     
    </form> 
	
<video controls="" autoplay="" name="media"><source src="api/phone.php?v=<?php if ($v == null)  {
  echo "http://v.youku.com/v_show/id_XODYxNzIzNzYw.html?f=23084159&from=y1.3-idx-grid-1519-9909.87157-87155-87726-87144.2-2";
}  else {
  echo "$v";
}?>" type="video/mp4"></video>
	
      </div>
    </div>

  </body>
</html>
