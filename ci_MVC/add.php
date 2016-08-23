<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$title = $_POST['title'];
		$con = $_POST['con'];
		$nid = $_COOKIE['id'];
		$cid = $_POST['leibie'];
		if($nid){
			$aql="insert into blog(blogid,title,content,time,nid,cid) values(null,'$title','$con',now(),'$nid','$cid')";
		//字符串发送数据库
			$query=mysqli_query($link,$aql);
			if($query){
				echo "<script>alert('插入成功')</script>";
				echo "<script>location='index.php'</script>";
			}else{
			echo "插入失败";
			}
		}else{
			echo"<script>location='login.php'</script>";
		}
		//拼字符串
		
	}


?>




<meta charset="UTF-8">
<form action="add.php" method="post">
	标题:<input type="text" name="title"><br/>
	内容:<textarea rows="10" cols="30" name="con"></textarea><br/>
	类别：<select name="leibie">
			<option value="1">文学类</option>	
			<option value="2">动漫类</option>	
			<option value="3">历史类</option>		
		</select> 
	<input type="submit" value="发表" name="sub">
</form>


