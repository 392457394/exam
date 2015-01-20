<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>

</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
	<li><a href="__APP__/Admin/Arrangement/index">教学计划管理</a></li>
    </ul>
    </div>
    <table class="filetable">
    
    <thead>
    	<tr>
			<th width="7%">编号</th>
			<th width="7%">课程编号</th>
			<th width="15%">课程名称</th>
			<th width="7%">教师编号</th>
			<th width="10%">教师名称</th>
			<th width="15%">所属系部</th>
			<th width="15%">班级名称</th>
			<th width="10%">班级人数</th>
			<th width="14%">更新时间</th>

        </tr>    	
    </thead>
    
    <tbody>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($vo["id"]); ?></td>
			<td><?php echo ($vo["cid"]); ?></td>
			<td><?php echo ($vo["coursename"]); ?></td>
			<td><?php echo ($vo["tid"]); ?></td>
			<td><?php echo ($vo["teachername"]); ?></td>
			<td><?php echo ($vo["systemname"]); ?></td>
			<td><?php echo ($vo["classname"]); ?></td>
			<td><?php echo ($vo["classnumber"]); ?></td>
			<td><?php echo ($vo["updatetime"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
    
    
    
    
    </table>
    <a href="__APP__/Admin/Arrangement/add"><input type="button" class="btn" value="添加"/></a>
    
    
   

</body>

</html>