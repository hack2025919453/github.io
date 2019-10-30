<?php
header("Content-type:text/html;charset=utf-8");
$host="127.0.0.1";
$username="root";
$pass="root";
$conn=mysql_connect($host,$username,$pass);
$zhiding=mysql_select_db("tests");
if ($_GET['type']== 1)
{
	$zhanghao=$_POST["dlzh"];
	$dlpass=$_POST["mima"];


	
	$sqlyuju="select useradd,passadd from liuyename where useradd ='$zhanghao' and passadd='$dlpass'";
	$query=mysql_query($sqlyuju);

	 
	#mysql_num_rows获取到行数
	if (mysql_num_rows($query) < 1){
		echo "账号不存在，请注册";
	}else{
			header('refresh:1;url=liuye.php');
	}

	
}
if ($_GET['type']== 2){
	$nc=$_POST["zcnc"];
	$zczhao=$_POST["zcname"];
	$zcmm=$_POST["zcmima"];
	$zcqm=$_POST["zcqueren"];
	if ($zcmm==$zcqm){
	$zengjia="insert into liuyename(username,useradd,passadd) value('$nc','$zczhao','$zcmm')";
	$qingqiu=mysql_query($zengjia);
	echo "注册成功，跳转登录界面";
	header('refresh:1;url=index.php');
}else{
	echo "两次密码不正确";
}
}
if ($_GET['type']== 3){
	if (isset($_REQUEST["nrtj"])){
		$neirong=$_POST["min"];
		$lynr="insert into liuyename(liuye) value('$neirong')";
		$lyzj=mysql_query($lynr);
		header('refresh:1;url=liuye.php');
	}
	if (isset($_REQUEST["chakan"])){
		$nesql="select liuye from liuyename";
		$u=mysql_query($nesql);
		
		while($row=mysql_fetch_array($u)){
			echo $row['liuye']."<br>";
		}

	}
}

mysql_close($conn);
?>


