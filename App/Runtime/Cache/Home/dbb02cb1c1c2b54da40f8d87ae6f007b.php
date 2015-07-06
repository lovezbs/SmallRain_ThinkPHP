<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>注册界面</title>
	<!-- 引入css -->
	<link href="<?php echo (CSS_URL); ?>bootstrap.css" rel="stylesheet">
	<link href="<?php echo (CSS_URL); ?>style.css" rel="stylesheet">
	<link rel="icon" href="<?php echo (IMG_URL); ?>logo.ico" type="image/x-icon">

</head>
<body>

<!-- 页面主题的开始 -->
<div id="container" style="background:url('<?php echo (IMG_URL); ?>register_bg.jpg');
	background-position:center;background-size:100% 100%;position:absolute;position:fixed;top:0;bottom:0;right:0;left:0;">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-6  col-md-offset-3 col-sm-offset-3 col-xs-offset-3" style="margin-top:100px;background:white;padding:30px;" >
		<h2 class="text-center">注册界面</h2>
			<form action="" method="post">
				用户名 : <input type="text" class="form-control" name="username" /> 
						<p class="alert_font">亲 , 请输入用户名</p>
				<br/>
				密 码  : <input type="password" class="form-control" name="passwd" />
						<p class="alert_font">亲 , 请输入密码</p>
				确认密码  : <input type="password" class="form-control" name="passwd" />
						<p class="alert_font">亲 , 请输入确认密码</p>
				<br/>
				<input type="reset" class="btn btn-success" value="重置 " /> &nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" class="btn btn-success" value="注册" />

			</form>
		</div>
	</div>
</div>
<!-- 页面主体的结束 -->


<!-- 引入js -->
<script src="<?php echo (JS_URL); ?>jquery-1.11.1.js"></script>
<script src="<?php echo (JS_URL); ?>do_form.js"></script>