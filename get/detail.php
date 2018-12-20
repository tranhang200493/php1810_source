<!DOCTYPE html>
<html>
<head>
	<title>Trang chi tiết</title>
</head>
<body>
	<?php
	if(isset($_GET['id'])&& isset($_GET['catid'])) {
		//lay gia tri cua tham so tren URl
	$masp = $_GET['id'];
	$madm = $_GET['catid'];
	echo "Mã sản phâm: ". $masp;
	if($madm == 1){
		echo "<br> Sản phẩm thuộc danh mục laptop";
	}elseif($madm == 2) {
		echo "<br>Sản phẩm thuộc danh mục computer";
	}}else{
		header("location:index.php");
	}
	?>
</body>
</html>