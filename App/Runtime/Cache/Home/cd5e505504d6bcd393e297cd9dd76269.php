<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>登录界面</title>
	<!-- 引入css -->
	<link href="<?php echo (CSS_URL); ?>bootstrap.css" rel="stylesheet">
	<link href="<?php echo (CSS_URL); ?>style.css" rel="stylesheet">
	<link rel="icon" href="<?php echo (IMG_URL); ?>logo.ico" type="image/x-icon">
	<!-- 引入js -->
	<script src="<?php echo (JS_URL); ?>jquery-1.11.1.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?php echo (EDITOR_URL); ?>ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (EDITOR_URL); ?>ueditor.all.min.js"> </script>


</head>
<body>

<!-- 页面主题的开始 -->
<div class="container " style="margin-top:30px;">
		<a href="<?php echo U('Home/Index/index');?>">
			<button class="btn btn-info">返回首页</button>
		</a>

	<h1>发表文章页面</h1><br/><hr style="border:1px solid green"/><br/>



		<div class="col-md-2 col-sm-2 col-xs-2">
			<span>文章标题 : </span> <br/><br/> <br/><br/>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6  ">
			<input id="title" name="title" class="form-control" />
		</div>
		<div class="col-md-2 col-sm-2 col-xs-2">
			<select id="type" name="type" class="form-control">
			  <option value='1'>军情</option>
			  <option value='2'>国际</option>
			  <option value='3'>装备</option>
			  <option value='4'>军史</option>
			</select>
		</div>
	
	

	
	<div class="col-md-12" style="">
		文章的主题内容
	</div>
<!-- 编辑器的位置 -->
<div class="col-md-12" style="">
	<script id="editor" type="text/plain"   style="width:800px;height:200px;"></script>
</div>
<div class="col-md-12" style="">
<br/>
	<!-- <button id="get_all_content">获得所有的内容</button> -->
	<button id="get_all_content" class="btn btn-success"> 发表文章</button>
</div>
</div>
<!-- 页面主体的结束 -->


<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


</script>
    <!-- 引入发表文章的js -->
    <!--<script src="<?php echo (JS_URL); ?>public_pass.js"></script>-->
<!-- 将发送的js写在这文件里 -->
<script type="text/javascript">
	$(function(){
		$("#get_all_content").click(function(){
			// 获取标题
			$title=$("#title").val();
			$type=$('#type  option:selected') .val();
			$content=UE.getEditor('editor').getContent();
			// 将收到的数据打印出来
			// alert("titl is : "+$title+"type is : "+$type+"contents is : "+$content);
			// 通过ajax传输数据
			$.ajax({
				type:"post",
				url:"get_content",
				data:"title="+$title+"&type="+$type+"&content="+$content,
				success:function(data){
					alert(data);
				},
				error:function(){
					alert("sorry , 文章发表失败 !");
				}

			});
		});
	});
</script>