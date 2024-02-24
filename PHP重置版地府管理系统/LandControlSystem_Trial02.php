<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>审判</title>
	<link href="LandControlSystem.css" rel="stylesheet" type="text/css">
	<style>
		select,option {
			width: 350px;
			height: 60px;
			font-size: 30px;
			font-family: "黑体";
		}
		button,input {
			width: 150px;
			height: 60px;
			font-size: 30px;
			font-family: "黑体";
		}
		
		table {
			width: 1000px;
			border: 1px solid #FFFFFF;
			padding: 0;
			margin: 0 auto;
			border-collapse: collapse;
		}
		
		p {
			text-align: center;
			font-size: 26px;
			font-family: "黑体";
			color: #336699;
		}
		
		table th {
			border: 1px solid #FFFFFF;
			font-size: 18px;
			text-align: center;
			padding: 10px;
			color: #FFFFFF;
		}
		
		table th {
			background-color: #767676;
		}
		
		table td {
			border: 1px solid #FFFFFF;
			font-size: 18px;
			text-align: center;
			padding: 10px;
			color: #FFFFFF;
		}

	</style>
	
</head>

<body>
	<script>
		function GetName() {
			document.getElementById( "name03" ).setAttribute("value", document.getElementById("name02").innerHTML);
		}
	</script>

	<table>
		
		<div>
			<p>地府管理系统-审判</p>
		</div>
		<div style="text-align: center">
<form method="post" action="LandControlSystem_Trial.php">
			
				<div>
			<p>审判结果：
				<select id="trial01" name="trial01" type="text">
					<option>十八层地狱-拔舌地狱</option>
					<option>十八层地狱-剪刀地狱</option>
					<option>十八层地狱-铁树地狱</option>
					<option>十八层地狱-孽镜地狱</option>
					<option>十八层地狱-蒸笼地狱</option>
					<option>十八层地狱-铜柱地狱</option>
					<option>十八层地狱-刀山地狱</option>
					<option>十八层地狱-冰山地狱</option>
					<option>十八层地狱-油锅地狱</option>
					<option>十八层地狱-牛坑地狱</option>
					<option>十八层地狱-石压地狱</option>
					<option>十八层地狱-舂臼地狱</option>
					<option>十八层地狱-血池地狱</option>
					<option>十八层地狱-枉死地狱</option>
					<option>十八层地狱-磔刑地狱</option>
					<option>十八层地狱-火山地狱</option>
					<option>十八层地狱-石磨地狱</option>
					<option>十八层地狱-刀锯地狱</option>
					<option>六道轮回-天神道</option>
					<option>六道轮回-人间道</option>
					<option>六道轮回-修罗道</option>
					<option>六道轮回-恶鬼道</option>
					<option>六道轮回-畜生道</option>
				</select>
			</p>
			<p></p>
		</div>
				<p>审判原因：<input id="trial02" name="trial02" style="width: 350px"  onChange="GetName()"></p>
				<input id="name03" name="name03" style="display: none">
				<input type="submit" name="submit" value="确认审判">
			</form>
		</div>
		<p></p>
		<thead>
			<tr>
				<th>序号</th>
				<th>姓名</th>
				<th>性别</th>
				<th>年龄</th>
				<th>籍贯</th>
				<th>生死</th>
				<th>死因</th>
				<th>审判状态</th>
				<th>审判结果</th>
				<th>审判原因</th>
			</tr>
			<?php
		$servername = "localhost";
			$username = "admin";
			$password = "123456";
			$database = "landcontrolsystem";

			// 创建连接
			$conn = new mysqli( $servername, $username, $password, $database );
			// 检测连接
			if ( $conn->connect_error ) {
				die( "连接失败: " . $conn->connect_error );
			}
			$name = $_POST["name01"];
			$sql = "SELECT Id, Name, 
        Sex, Age, Native, Life, Reason, Trial_Condition, Trial_Result, Trial_Reason
        FROM userinfo WHERE Name = '$name'";

			mysqli_select_db( $conn, 'userinfo' );
			$retval = mysqli_query( $conn, $sql );
			if ( !$retval ) {
				die( '无法读取数据: ' . mysqli_error( $conn ) );
			}
			while ( $row = mysqli_fetch_array( $retval, MYSQLI_ASSOC ) ) {
				echo "<tr type=\"button\" onClick=\"getTableContent(this)\"><td> {$row['Id']}</td> " .
				"<td>{$row['Name']} </td> " .
				"<td>{$row['Sex']} </td> " .
				"<td>{$row['Age']} </td> " .
				"<td>{$row['Native']} </td> " .
				"<td>{$row['Life']} </td> " .
				"<td>{$row['Reason']} </td> " .
					"<td>{$row['Trial_Condition']} </td> " .
					"<td>{$row['Trial_Result']} </td> " .
					"<td>{$row['Trial_Reason']} </td> " .
				"</tr>";
			}
			echo "<p id=\"name02\" style=\"display:none\">{$name}</p>"
	?>
		</thead>
			
	</table>

</body>
</html>