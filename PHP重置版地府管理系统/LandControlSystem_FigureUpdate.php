<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>地府管理系统_生死簿_数据同步</title>
	<link href="LandControlSystem.css" rel="stylesheet" type="text/css">
	<style>
		button,input {
			width: 120px;
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
		
		table tr:hover {
			background-color: rgba(30, 60, 202, 1.00);
		}
	</style>
	
</head>

<body>

	<script>
		function getTableContent( node ) {
			for ( var i = 1; i < node.parentNode.parentNode.getElementsByTagName( "tr" ).length; i++ ) {
				//置空背景颜色
				node.parentNode.parentNode.rows[ i ].style.background = "";
			}
			node.style.background = "rgba(30,60,202,1.00)";
			document.getElementById( "id01" ).setAttribute("value", node.cells[ 0 ].innerHTML);
		}
		function Refresh()
		{
			window.location.reload();
		}
	</script>
	<table>
		<div>
			<p>地府管理系统-生死簿-数据同步</p>
		</div>
		<div style="text-align: center">

			<form method="post" action="">
				<input style="display: none" id="id01" name="id01" type="text">
				<input type="submit" name="submit" value="删除">
				<button onClick="Refresh()">刷新</button>
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
			$sql1 = "ALTER TABLE userinfo AUTO_INCREMENT = 1";
			$sql2 = "SET @count = 0";
			$sql3 = "UPDATE userinfo SET id = @count:= @count + 1";
			mysqli_query( $conn, $sql1 );
			mysqli_query( $conn, $sql2 );
			mysqli_query( $conn, $sql3 );
			// 设置编码，防止中文乱码
			mysqli_query( $conn, "set names utf8" );

			$sql = 'SELECT Id, Name, 
        Sex, Age, Native, Life, Reason
        FROM userinfo';

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
				"</tr>";
			}
	?>
			<?php
			if (isset($_POST["submit"])) {
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
				$id01 = 10;
				$id01 = $_POST[ "id01" ];
				$sql = "DELETE FROM userinfo WHERE Id = $id01";
				$retval = mysqli_query( $conn, $sql );
				if ( !$retval ) {
					die( '无法读取数据: ' . mysqli_error( $conn ) );
				}
				echo "<p>删除成功</p>";
			} 
			?>
		</thead>
	</table>

</body>
</html>