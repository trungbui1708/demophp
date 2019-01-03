<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mang trong PHP</title>
</head>
<body>
	<?php
	$thang = array(0 =>'Tháng 1' ,
		1 =>'Tháng 2' ,
		2 =>'Tháng 3' ,
		3 =>'Tháng 4' ,
		4 =>'Tháng 5' ,
		5 =>'Tháng 6' ,
		6 =>'Tháng 7' ,
		7 =>'Tháng 8' ,
		8 =>'Tháng 9' ,
		9 =>'Tháng 10' ,
		10 =>'Tháng 11' ,
		11 =>'Tháng 12' ,
					 );
	$ngay=range(1, 31);
	?>
	<form name="chon" method="post">
		<select name="ngaysinh">
			<option>--Ngày sinh--</option>
			<?php
				foreach ($thang as $key => $value) {
					# code...
				}
			?>
		</select>
		<select name="thangsinh">
			<option>--Tháng--</option>
		</select>
		<select name="namsinh">
			<option>--Năm--</option>
		</select>
	</form>
</body>
</html>