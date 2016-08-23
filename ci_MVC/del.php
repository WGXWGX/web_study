<?php
	include 'conn.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$aql = "delete from blog where blogid=$id";
		// var_dump($aql);
		// die();
		$query = mysqli_query($link,$aql);
		if($query){
			echo "<script>location='index.php'</script>";
		}else{
			echo "删除失败";
		}
	}

?>