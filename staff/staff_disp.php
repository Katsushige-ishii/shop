<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>

<?php

try {
	$staff_code = $_GET['staffcode'];
	
	$dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
	$user = 'root';
	$passwd = 'c(xEJua3i&pGFtWU';
	$dbh = new PDO($dsn, $user, $passwd);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = 'SELECT name from mst_staff WHERE code=?';
	$stmt = $dbh->prepare($sql);
	$data[] = $staff_code;
	$stmt->execute($data);
	
	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	$staff_name = $rec['name'];
	
	$dbh = null;
	
}
catch (Exception $e) {
	echo 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

スタッフ情報参照<br />
<br />
スタッフコード<br />
<?php print $staff_code; ?>
<br />
スタッフ名<br />
<?php print $staff_name; ?>
<br />
<br />
<form>
<input type="button" onclick="history.back()" value="戻る">
</form>

</body>
</html>