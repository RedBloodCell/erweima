<html>
	<head>
		<title>二维码测试</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta http-equiv="refresh" content="5"/>
	</head>
	<body>
	<?php	
	include 'phpqrcode.php';	//调用phpqrcode库
	
	$datat = time() % 99999999;
	$data = $datat;  				//二维码数据
	$filename = 'test.png'; 		//生成二维码图片名称
	$errorCorrectionLevel = 'H';	//容错率 L(7%)、M(15%)、Q(25%)、H(30%)
	$matrixPointSize = 10; 			//像素点大小（1-10）
	
	QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);	//生成二维码文件
	//QRcode::png($data);	//输入二维码到浏览器 
	
	$logo = 'tsg.png';	//自己准备的logo图片
	$QR = 'test.png';	//生成的二维码原图
	
	if ($logo != FALSE) 
	{ 
		$QR = imagecreatefromstring(file_get_contents($QR)); 	 //获取生成二维码信息
		$logo = imagecreatefromstring(file_get_contents($logo)); //获取logo信息
		
		$QR_width = imagesx($QR);		//二维码图片宽度 
		$QR_height = imagesy($QR);		//二维码图片高度 
		$logo_width = imagesx($logo);	//logo图片宽度 
		$logo_height = imagesy($logo);	//logo图片高度 
		
		$logo_qr_width = $QR_width / 2;  					//logo的宽度限制
		$scale = $logo_width / $logo_qr_width; 				//保持长宽比例
		$logo_qr_height = $logo_height / $scale; 			//logo高度限制
		$star_width = ($QR_width - $logo_qr_width) / 2; 	//logo x方向起始位置
		$star_height = ($QR_height - $logo_qr_height) / 2;	//logo y方向起始位置
		
		//imagecopyresampled参数(目标文件，加入文件，加入文件的x起始位置，加入文件的起始位置,载入图片的x区域，载入图片的y区域，
		//载入图片缩放高度，载入图片缩放宽度，载入图片原宽度，载入图片原高度)  
		imagecopyresampled($QR, $logo, $star_width, $star_height, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height); 
	} 
	imagepng($QR, 'tsgtest.png');
	echo '<img src = "tsgtest.png">';
	?>
	</body>
</html>
