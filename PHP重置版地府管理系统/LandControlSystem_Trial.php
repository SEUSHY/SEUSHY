<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
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
					echo "Falled";
				}
		$name = $_POST[ "name03" ];
		$trial01 = $_POST[ "trial01" ];
	$trial02 = $_POST[ "trial02" ];
	$time = date("Y-m-d-H-i-s");
		$sql = "UPDATE userinfo SET Trial_Result = '$trial01', Trial_Reason = '$trial02', Trial_Condition ='已审判' WHERE Name = '$name'";
		$sql1 = "INSERT INTO trialrecord (Result, Info, Time, Name)
VALUES('$trial01', '$trial02', '{$time}', '$name')";
	mysqli_query($conn, $sql1);
		if (mysqli_query($conn, $sql) ) {
			echo "<p>修改成功</p>";
		} 
	else {
			echo "Error: " . $sql .
			"<br>" . $conn->error;
		}
				$sql4 = "ALTER TABLE trialrecord AUTO_INCREMENT = 1";
			$sql2 = "SET @count = 0";
			$sql3 = "UPDATE trialrecord SET id = @count:= @count + 1";
			mysqli_query( $conn, $sql4 );
			mysqli_query( $conn, $sql2 );
			mysqli_query( $conn, $sql3 );
	echo "<script> location.replace('LandControlSystem_Trial01.php'); </script>";
	?>
	<script> location.reload(); </script>
</body>
</html>