<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>地府管理系统_工作站</title>
<link href="LandControlSystem.css" rel="stylesheet" type="text/css">
<style>        
a 
{           
	display: block;
	height: 40px;
	background-color: #55585a;
	font-size: 14px;
	color: #fff;
	text-decoration: none;
	padding-left: 30px;
	line-height: 40px;
}
a:hover 
{
    background-color: #1496d4;
}
</style>
</head>

<body class="MainBody">
	
	
<div class="sidebar" style="float:left">
	<div class="menu-head">
		<i class="iconfont"></i><span class="MainTitle">地府管理系统</span>
	</div>	
	<div class="menu-body">
		<ul class="menu-list">
			<li class="menu-list-label2"><a onClick="Page01()"><span class="list2">首页</span></a></li>
          	<li class="menu-list-label2"><a><span class="list2">生死簿</span></a></li>
              <li class="menu-list-label"><a onClick="Page02()"><span class="list1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户管理</span></a></li>
              <li class="menu-list-label"><a onClick="Page03()"><span class="list1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;数据同步</span></a></li>
			<li class="menu-list-label2"><a onClick="Page04()"><span class="list2">勾魂管理</span></a></li>	
			<li class="menu-list-label2"><a><span class="list2">阎王殿审判</span></a></li>	
				<li class="menu-list-label"><a onClick="Page05()"><span class="list1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;预约管理</span></a></li>	
				<li class="menu-list-label"><a onClick="Page06()"><span class="list1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;审判</span></a></li>	
				<li class="menu-list-label"><a onClick="Page07()"><span class="list1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;审判记录</span></a></li>	
			<li class="menu-list-label2"><a><span class="list2">十八层地狱</span></a></li>
			<li class="menu-list-label"><a onClick="Page08()"><span class="list1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;设备管理</span></a></li>
			<li class="menu-list-label"><a onClick="Page09()"><span class="list1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作业流程</span></a></li>
			<li class="menu-list-label"><a onClick="Page10()"><span class="list1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户管理</span></a></li>
			<li class="menu-list-label2"><a><span class="list2">六道轮回</span></a></li>
				<li class="menu-list-label"><a onClick="Page12()"><span class="list1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;轮回</span></a></li>	
				<li class="menu-list-label"><a onClick="Page13()"><span class="list1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;轮回记录</span></a></li>	
			<li class="menu-list-label2"><a><span class="list2">冥币管理</span></a></li>
				<li class="menu-list-label"><a onClick="Page14()"><span class="list1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;资金总数</span></a></li>		
		</ul>
	</div>
</div>

<script>
function Page01()
{
document.getElementsByTagName("iframe")[0].setAttribute("src","LandControlSystem_MainPage.php"); 
}
	
function Page02()
{
document.getElementsByTagName("iframe")[0].setAttribute("src","LandControlSystem_UserManagement.php"); 
}
	
function Page03()
{
document.getElementsByTagName("iframe")[0].setAttribute("src","LandControlSystem_FigureUpdate.php"); 
}
	
function Page04()
{
document.getElementsByTagName("iframe")[0].setAttribute("src","LandControlSystem_CatchLife.php"); 
}
	
function Page05()
{
document.getElementsByTagName("iframe")[0].setAttribute("src","LandControlSystem_TrialCondition.php"); 
}
	
function Page06()
{
document.getElementsByTagName("iframe")[0].setAttribute("src","LandControlSystem_Trial01.php"); 
}
	
function Page07()
{
document.getElementsByTagName("iframe")[0].setAttribute("src","LandControlSystem_TrialRecord.php"); 
}
	
function Page08()
{
document.getElementsByTagName("iframe")[0].setAttribute("src","地府管理系统_十八层地狱_设备管理.html"); 
}

function Page09()
{
document.getElementsByTagName("iframe")[0].setAttribute("src","地府管理系统_十八层地狱_作业流程.html"); 
}
	
function Page10()
{
document.getElementsByTagName("iframe")[0].setAttribute("src","地府管理系统_十八层地狱_用户管理.html"); 
}
		
function Page12()
{
document.getElementsByTagName("iframe")[0].setAttribute("src","地府管理系统_六道轮回_作业流程.html"); 
}
	
function Page13()
{
document.getElementsByTagName("iframe")[0].setAttribute("src","地府管理系统_六道轮回_轮回记录.html"); 
}
	
function Page14()
{
document.getElementsByTagName("iframe")[0].setAttribute("src","地府管理系统_冥币管理_流动记录.html"); 
}

</script>
<div>
<iframe scrolling="auto" height="1000" width="1200"></iframe>
</div>

</body>
</html>