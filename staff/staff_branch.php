<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>

<?php

if (isset($_POST['disp']) == true) {
	if (isset($_POST['staffcode']) == false) {
		header('Location: staff_ng.php');
		exit();
	}
	$staff_code = $_POST['staffcode'];
	header('Location: staff_disp.php?staffcode='.$staff_code);
	exit();
}
elseif (isset($_POST['add']) == true) {
	header('Location: staff_add.php');
	exit();
}
elseif (isset($_POST['edit']) == true) {
	if (isset($_POST['staffcode']) == false) {
		header('Location: staff_ng.php');
		exit();
	}

	$staff_code = $_POST['staffcode'];
	header('Location: staff_edit.php?staffcode='.$staff_code);
	exit();
}
elseif (isset($_POST['delete']) == true) {
	if (isset($_POST['staffcode']) == false) {
		header('Location: staff_ng.php');
		exit();		
	}
	
	$staff_code = $_POST['staffcode'];
	header('Location: staff_delete.php?staffcode='.$staff_code);
	exit();
}

?>

</body>
</html>