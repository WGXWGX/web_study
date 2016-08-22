<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$name = $_POST['username'];
		$pass = $_POST['pass'];
		$sql = "select * from user where name='$name' and pass='$pass'";
		$query = mysqli_query($link,$sql);
		$result=mysqli_fetch_array($query);
		if($result){
			setcookie('id',$result['userid']);
			setcookie('name',$result['name']);
			echo "<script>location='index.php'</script>";
		}else{
			echo "登录失败";
		}
	}

?>


<meta charset="utf-8">
<form action="login.php" method="post">
	用户名：<input type="text" name="username"><br/>
	密码：<input type="password" name="pass"><br/>
	确认密码：<input type="password" name="pass1"><br/>
	<input type="submit" name="sub" value="登录">
	<input type="reset" name="rst" value="重置">
	<a href="reg.php">注册</a>
</form>