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

	<table>
		
		<div>
			<p>地府管理系统-审判记录</p>
		</div>
		<div style="text-align: center">

		<thead>
			<tr>
				<th>序号</th>
				<th>姓名</th>
				<th>审判时间</th>
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
			$sql = "SELECT Id, Name, 
        Time, Result, Info FROM trialrecord";

			mysqli_select_db( $conn, 'trialrecord' );
			$retval = mysqli_query( $conn, $sql );
			if ( !$retval ) {
				die( '无法读取数据: ' . mysqli_error( $conn ) );
			}
			while ( $row = mysqli_fetch_array( $retval, MYSQLI_ASSOC ) ) {
				echo "<tr><td> {$row['Id']}</td> " .
				"<td>{$row['Name']} </td> " .
				"<td>{$row['Time']} </td> " .
				"<td>{$row['Result']} </td> " .
				"<td>{$row['Info']} </td> " .
				"</tr>";
			}
	?>
		</thead>
			
	</table>

</body>
</html>