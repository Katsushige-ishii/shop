<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>

<?php

try {
	$staff_code = $_POST['code'];
	$staff_name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
	$staff_pass = htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8');

	$dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
	$user = 'root';
	$passwd = 'c(xEJua3i&pGFtWU';
	$dbh = new PDO($dsn, $user, $passwd);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = 'UPDATE mst_staff SET name=?, password=? WHERE code=?';
	$stmt = $dbh->prepare($sql);
	$data[] = $staff_name;
	$data[] = $staff_pass;
	$data[] = $staff_code;
	$stmt->execute($data);

	$dbh = null;

}
catch (Exception $e) {
	echo 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
	
}

?>

修正しました。<br />
<br />
<a href="staff_list.php">戻る</a>

</body>
</html>