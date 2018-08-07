<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>

<?php

try {
	$staff_name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
	$staff_pass = htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8');

	$dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
	$user = 'root';
	$passwd = 'c(xEJua3i&pGFtWU';
	$dbh = new PDO($dsn, $user, $passwd);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = 'INSERT INTO mst_staff(name, password) VALUES (?, ?)';
	$stmt = $dbh->prepare($sql);
	$data[] = $staff_name;
	$data[] = $staff_pass;
	$stmt->execute($data);

	$dbh = null;

	echo $staff_name.'さんを追加しました。<br />';
}
catch (Exception $e) {
	echo 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
	
}

?>

<a href="staff_list.php">戻る</a>

</body>
</html>