<?php
	/*
	留言板例子（mysql数据库  表与表之间关联）
	约束：主键约束、外键约束、默认值约束、非空约束（not null）
	关系型数据库中  每一个表只有一个主键（值不重复） 却可以有多个外键
	PHP调用了mysql引擎---读取数据库中的表关联和表数据-->resource类型-->
	mysql引擎针对PHP提供一系列的操作mysql的api函数-->resource变成array
	把array加载到前端的静态页面显示数据
	
	功能需求：发表文章，删除文章，更新文章，登录和注册功能，浏览率，权限功能
	                （上传功能（单文件上传、多文件上传）），评论功能*/
	                
	                
	增
	//insert into 表名(列名,列名,....) values(值,值......);
	删
	delete from 表名 where 条件   id=1
	
	改
	update 表名 set 列名=值,列名=值 where 条件
	
	查
	select * from 表名 order by id asc/desc
	
	select * from 表名 where 条件
	                
	//创建数据表  
	//blog(文章ID、文章标题、文章内容、发表时间、访问率)
	user(用户ID、用户名、密码、权限)
	pl(plid,puid,pcon,ptime)
	
	//类型：int char(11)定字符型 varchar(11)可变字符型 text date timestamp
	
	/*
	1:php连接数据库
	2:php选中数据库名
	3:设置字符编码*/
	//1.php内加载2.php  require  include
	


?>
