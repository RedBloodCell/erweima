<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<title>作为</title>
</head>

<body>
<div class="container">
<table class="table table-bordered">
   <caption class="text-center">选座情况</caption>
   <tbody>
      <tr class="tr">
         <td></td>
         <td></td>
         <td></td>
      </tr>
       <tr class="tr">
         <td></td>
         <td></td>
         <td></td>
      </tr>
       <tr class="tr">
         <td></td>
         <td></td>
         <td></td>
      </tr>
   </tbody>
</table>
</div>
</body>
<script>
$(document).ready(function(){
	$(".tr").eq(<?php echo 1;?>).children().eq(1).text("1111");
})
</script>
</html><?php echo 1;?>
