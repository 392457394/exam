<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
	<li><a href="__APP__/Admin/System/index">系部管理</a></li>
    <li><a href="__APP__/Admin/System/edit/id/<?php echo ($data["id"]); ?>">修改系部信息</a></li>   
	</ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>基本信息</span></div>
    
	<form action="__APP__/Admin/System/Update" method="post">
    <ul class="forminfo">
	<li><label>系部编号</label><label><?php echo ($data["id"]); ?></label></li>
    <li><label>系部名称</label><input name="name" type="text" class="dfinput" value="<?php echo ($data["name"]); ?>"/></li>
   
	<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认保存"/></li>
    </ul>
	</form>
    
    
    </div>


</body>

</html>