<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>地府管理系统_登录</title>
<link href="LandControlSystem.css" rel="stylesheet" type="text/css">
<link href="LoginInPage.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="outer_box">
    <div class="filterImg"></div>
    <div class="login_box">
      <h1><img src="MemberHeadImage.jpg" alt=""></h1>
      <p><input id="key" type="text" value="账号"></p>
      <p><input id="value" type="text" value="登录密码"></p>
      <p class="logIn_btn" onClick="OnClick()">登录</p>
    </div>
  </div>
<script>
function OnClick()
{
	if(document.getElementById("key").value=="admin" & document.getElementById("value").value=="password")
	   {
	   		window.alert("登录成功");
		   	location.replace("./LandControlSystem_Studio.php");
		    
	   }
	else
		{
			window.alert("登录失败");
		}
}
</script>
</body>
</html>