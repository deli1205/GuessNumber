<?php
$dsn = "localhost";
$user = "root" ; 
$password = "" ;
$conn = mysqli_connect($dsn,$user,$password);
mysqli_select_db($conn,"guess_game");
mysqli_query($conn,"SET NAMES 'UTF8'");
$result = mysqli_query($conn,"SELECT * FROM `rank` ORDER BY `rank`.`Time` ASC");
$row_num = mysqli_num_rows($result);
$field_num = mysqli_num_fields($result);
$cnt = 1;

echo"
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>排行榜</title>
<link href=\"style/style.css\" rel=\"stylesheet\" type=\"text/css\" id=\"css\">
</head>
		
<body>
	<div class=\"wrap\">
    	<div id=\"header\">排行榜</div>
";

echo "<table>";
	echo "<tr><td>No</td><td>NAME</td><td>花的時間(秒)</td><td>猜的次數</td></tr>"; 
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<th>$cnt</th>"; 
		$cnt=$cnt+1;
		for($x=1;$x<$field_num;$x=$x+1)
		{  
			echo "<th> $row[$x]  </th>";
		}
		echo"</tr>";
	}
	echo "</table>
	    </div>
</body>
</html>";
mysqli_close( $conn);
?>
