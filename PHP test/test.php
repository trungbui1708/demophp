<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
	echo '<h3>Mảng tuần tự</h3>';
	//Mang tuan tu
	$hocsinh = array('Trung Bui','Tuan Nobita','Phan Chien' ,'Nguyen Thinh');
	echo '<pre>';
	print_r($hocsinh);
	echo '</pre>';
	echo '<br>';
	//Hien thi tung phan tu cua mang
	echo '<h3>Hiển thị từng phần tử của mảng</h3>';
	echo $hocsinh[0].'<br>';
	echo $hocsinh[1].'<br>';
	echo $hocsinh[2].'<br>';
	echo $hocsinh[3].'<br>';
	echo '<br>';
	//Them mot phan tu vao mang
	echo '<h2>Thêm một phần tử vào mảng</h2>';
	echo $hocsinh[]='Dinh Van Dung';
	//Hien thi mang sau khi them
	echo '<h2>Hiển thị mảng sau khi thêm</h2>';
	echo '<pre>';
	print_r($hocsinh);
	echo '</pre>';
	//Mang khong tuan tu, Key la cac ky tu chu, khong bang so
	echo '<h2>Mảng không tuần tự, key là các ký tự, không dùng key là số</h2>';
	echo '<br>';
	$sinhvien = array('Name' => 'Bui Van Trung' ,'Old' => 21,'Address'=> 'Bac Giang City');
	echo '<h2>Hiển thị từng phần tử của mảng ra</h2>';
	//Them phan tu vao mang khong tuan tư
	$sinhvien['Email']="babydevils2s@gmail.com";
	//hien thi tung phan tu cua mang ra 
	echo $sinhvien['Name'].'<br>';
	echo $sinhvien['Old'].'<br>';
	echo $sinhvien['Address'].'<br>';
	echo $sinhvien['Email'].'<br>';
	echo '<pre>';
	print_r($sinhvien);
	echo '</pre>';
	//Mảng đa chiều: là mảng có nhiều phần tử nằm trong nó
	echo '<h3>Mảng đa chiều</h3>';
	$sneaker = array('Name' =>'Adidas' ,'Color'=> 'White','Size'=> 40,'Detail' => array('Product' =>'China' ,'Chat lieu'=>'da' ),);
	echo 'Name:'.$sneaker['Name'].'<br>';
	echo 'Color:'.$sneaker['Color'].'<br>';
	echo 'Size:'.$sneaker['Size'].'<br>';
	echo 'Product:'.$sneaker['Detail']['Product'].'<br>';
	echo 'Chat lieu: '.$sneaker['Detail']['Chat lieu'].'<br>';
	$so = array(1,3,12,60,18,9);
	print_r($so);
	echo '<h3>Đếm số phần tử của mảng</h3>';
	//Đếm số phần tử của mảng
	echo count($so);
	//Sắp xếp theo chiều tăng dần
	echo '<h3>Sắp xếp mảng tăng dần</h3>';
	echo sort($so);
	echo "<pre>";
	print_r($so);
	echo "</pre>";
	//Sắp xếp theo chiều giảm dần
	echo '<h3>Sắp xếp mảng giảm dần</h3>';
	echo rsort($so);
	echo "<pre>";
	print_r($so);
	echo "</pre>";
	echo '<h3>Gộp các phần tử của mảng</h3>';
	//Gộp các phần tử của mảng
	$gop= implode(',', $so);
	echo '<pre>';
	print_r($gop);
	echo '</pre>';
	echo '<h3>Tách các phần tử của mảng</h3>';
	//Tách các phần tử của mảng
	$tach = explode(',', $gop);
	foreach ($tach as $tach) {
		# code...
		echo $tach.'<br>';
	}
	echo '<h3>Xóa 1 phần tử của mảng</h3>';
	//Xóa 1 phần tử của mảng
	unset($so[2]);
	print_r($so);
	echo '<h3>Gộp 2 mảng lại với nhau</h3>';
	//Gộp 2 mảng lại với nhau
	$so2 = array('A','G','D','B','F');
	$gopmang=array_merge($so,$so2);
	echo '<pre>';
	print_r($gopmang);
	echo '</pre>';
	//Xuất ra ngẫu nhiên các phần tử của mảng
	echo '<h3>Xuất ra ngẫu nhiên các phần tử của mảng</h3>';
	shuffle($so2);
	echo '<pre>';
	print_r($so2);
	echo '</pre>';
	
	 ?>
</body>
</html>