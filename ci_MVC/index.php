<form action="index.php" method="get">
	<input type="text" name="search">
	<input type="submit" name="sub" value="搜索"><br/>
	<input type="submit" name="wenxue" value="文学类">
	<input type="submit" name="dongman" value="动漫类">
	<input type="submit" name="lishi" value="历史类">
</form>	
<a href="add.php">添加文章</a><br/>

<?php
	if($_COOKIE['id']){
		echo "<a href='admin/admin.php'>"."<span>".$_COOKIE['name']."已登录</span></a>";
		echo "<a href='logout.php?id=$id'>".'退出'."<a>";
	}else{
		echo "<a href='login.php'>".'游客'."</a>";
	}
?>
<?php
	include 'conn.php';
	if(isset($_GET['sub'])){
		$se =$_GET['search'];
		$e = "title like '%".$se."%'";
	}else{
		$e = 1;
	}
	//拼写查询
	if(isset($_GET['wenxue'])){
		$a ="classid=1";
	}elseif(isset($_GET['dongman'])){
		$a ="classid=2";
	}elseif(isset($_GET['lishi'])){
		$a ="classid=3";
	}else{
		$a=1;
	}
	$sql = "select * from user,blog,class where $e and user.userid=blog.nid and blog.cid=class.classid and $a order by blogid desc";
	//发送字符串到数据库
	$query = mysqli_query($link,$sql);
	//资源转化为数组
	
	while($result = mysqli_fetch_array($query)){

	//$result = mysqli_fetch_array($query);
	
?>
<h2><a href="view.php?id=<?php echo $result['blogid']?>">标题:<?php echo $result['title'];?></a> | <a href="edit.php?id=<?php echo $result['blogid']?>">编辑</a> |<a href="del.php?id=<?php echo $result['blogid'];?>">删除</a></h2>
<li><?php echo $result['time'];?></li>
<p><?php echo iconv_substr($result['content'],0,4);?>...</p><br/>
<li><?php echo $result['classname']?></li><br/>
作者：<a href="sixin.php?id=<?php echo $result['userid']?>"><?php echo $result['name']?></a>
<hr/>
<?php
	}
?>