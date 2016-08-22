<?php
include "conn.php";
	if(isset($_POST['sub'])){
		$name = $_POST['username'];
		$pass = $_POST['pass'];
		$pass1 = $_POST['pass1'];
		if($pass==$pass1){
			$sql ="select * from user where name='$name'";
			$query=mysqli_query($link,$sql);
			$result = mysqli_fetch_assoc($query);
			if($result){
				echo "<script>alert('用户名已存在')</script>";	
				echo "<script>location='reg.php'</script>";	
			}else{
				$flag=true;
				$arr =array('%',' ','=','>','&');
				for($i=0;$i<strlen($arr);$i++){
					for($j=0;$j<count($arr);$j++){
						if($name[$i]==$arr[$j]){
							$flag =false;
						}
					}
				}
				if($flag==false){
					echo "<script>alert('用户名存在非法字符')</script>";	
				    echo "<script>location='reg.php'</script>";	
				}else{
					$sql = "insert into user(userid,name,pass) values(null,'$name','$pass')";
					$query=mysqli_query($link,$sql);
					if($query){
						header('location:login.php');
					}else{
						echo "注册失败";
					}
					
				}
				//$sql = "insert into user(userid,name,pass) values(null,'$name','$pass')";
			}
		}else{
			echo "<script>alert('注册失败')</script>";	
			echo "<script>location='reg.php'</script>";	
		}
	}
?>


<meta charset="utf-8">
<form action="reg.php" method="post">
	用户名：<input type="text" name="username"><br/>
	密码：<input type="password" name="pass"><br/>
	确认密码：<input type="password" name="pass1"><br/>
	<input type="submit" name="sub" value="注册">
	<input type="reset" name="rst" value="重置">
</form>