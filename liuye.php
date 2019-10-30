<!DOCTYPE html>
<html>
<head>
<style>
h1{
	color:red;
	text-align:center;
}
</style>
</head>
<body>
<h1>最新网游留言信息表</h1>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
	input,textarea{
		width:100%;
		margin:10px 0;
	}
	</style>
</head>
<body>
	<form action="mysqladd.php?type=3" method="post" >
		<textarea name="min">请输入留言信息</textarea><br/>
		<input type="submit" onclick="myFunction()" name="nrtj" value="提交" /><br/>
		<input type="submit" name="chakan" value="查看所有留言" /><br/>
	</form>

<input type="submit" onclick="qk()" value="清空数据维护中" /><br/>
<script>
function myFunction()
{
    alert("留言成功");
}
function qk()
{
    alert("清除不了，请联系网站管理员");
}
</script>

</body>
</html>