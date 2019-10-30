<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
	.zhuce{
		display:none;
	}
	</style>

</head>
<body>
<form action="mysqladd.php?type=1 " method="post" id="dlname" >
		账号：<input type="text" name="dlzh" value="请输入账号" /><br/>
		密码：<input type="password" name="mima"><br/>
		<input type="submit" name="dltj" value="登录" /><br/>
		
</form>
<button onclick="zhuce()" id="dizhuce" >注册</button>
<form action="mysqladd.php?type=2" method="post" class="zhuce" id="urlzc" >
		昵称：<input type="text" name="zcnc" value="请输入昵称" /><br/>
		账号：<input type="text" name="zcname" value="请输入账号" /><br/>
		密码：<input type="password" name="zcmima"><br/>
		确认密码：<input type="password" name="zcqueren"><br/>
		<input type="submit" name="zctj" value="注册" /><br/>
		<button onclick="dl()" >返回登录</button>
</form>
	<script>
function zhuce(){
	document.getElementById("dizhuce").style.display="none";
	document.getElementById("urlzc").style.display="block";
	document.getElementById("dlname").style.display="none";
}
function dl(){
	document.getElementById("urlzc").style.display="none";
	document.getElementById("urldl").style.display="block";
}
</script>
</body>
</html>


