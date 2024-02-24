<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>地府管理系统_生死簿_用户管理</title>
	<link href="LandControlSystem.css" rel="stylesheet" type="text/css">
	<link href="InputPage.css" rel="stylesheet" type="text/css">
</head>

<body>

	<?php
	if ( isset( $_POST[ "submit" ] ) ) {
		$servername = "localhost";
		$username = "admin";
		$password = "123456";
		$database = "landcontrolsystem";

		// 创建连接
		$conn = new mysqli( $servername, $username, $password, $database );
		// 检测连接
		if ( $conn->connect_error ) {
			die( "连接失败: " . $conn->connect_error );
			echo "Falled";
		}
		$name = $_POST[ "name01" ];
		$sex = $_POST[ "sex01" ];
		$age = $_POST[ "age01" ];
		$native = $_POST[ "native01" ];
		$life = $_POST[ "life01" ];
		$reason = $_POST[ "reason01" ];
		$sql = "INSERT INTO userinfo (Name, Sex, Age, Native, Life, Reason)
VALUES('$name', '$sex', '$age', '$native', '$life', '$reason')";
		if (mysqli_query($conn, $sql) ) {
			echo "新记录插入成功";
		} else {
			echo "Error: " . $sql .
			"<br>" . $conn->error;
		}
		$sql1 = "ALTER TABLE userinfo AUTO_INCREMENT = 1";
		$sql2 = "SET @count = 0";
		$sql3 = "UPDATE userinfo SET id = @count:= @count + 1";
		mysqli_query($conn, $sql1);
		mysqli_query($conn, $sql2);
		mysqli_query($conn, $sql3);
	}
		?>
	<script>
		function HaveLife() {
			var lifeobj = document.getElementById( "life01" );
			var reasonobj = document.getElementById( "reason01" );
			if ( lifeobj.value == "死" ) {
				reasonobj.removeAttribute("disabled");
			} 
			else {
				reasonobj.value = "";
				reasonobj.setAttribute("disabled","disabled");
			}

		}
	</script>
	<form method="post" action="">
		<div class="inputBox">
			<p>姓名:<input  id="name01" name="name01" type="text" required="required">
				<i></i>
			</p>
		</div>
		<div class="inputBox">
			<p>性别：<input  id="sex01" name="sex01" type="text" required="required">
				<i></i>
			</p>
		</div>
		<div class="inputBox">
			<p>年龄：<input id="age01" name="age01" type="text" required="required"><i></i>
			</p>
		</div>
		<div class="inputBox">
			<p>籍贯：<input id="native01" name="native01" type="text" required="required"><i></i>
			</p>
		</div>
		<div class="inputBox">
			<p>生死：
				<select id="life01" name="life01" type="text" onchange="HaveLife()">
					<option>死</option>
					<option>生</option>
				</select>
			</p>
		</div>
		<div class="inputBox">
			<p>死因：<input id="reason01" name="reason01" type="text" required="required"><i></i>
			</p>
		</div>
		<div align="center">

			<input type="submit" name="submit" value="提交"></div>
	</form>

	

</body>
</html>