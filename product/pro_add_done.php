<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>

<?php

try {
	$pro_name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
	$pro_price = htmlspecialchars($_POST['price'], ENT_QUOTES, 'UTF-8');

	$dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
	$user = 'root';
	$passwd = 'c(xEJua3i&pGFtWU';
	$dbh = new PDO($dsn, $user, $passwd);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = 'INSERT INTO mst_product (name, price) VALUES (?, ?)';
	$stmt = $dbh->prepare($sql);
	$data[] = $pro_name;
	$data[] = $pro_price;
	$stmt->execute($data);

	$dbh = null;

	echo $pro_name.'を追加しました。<br />';

}
catch (Exception $e) {
	echo 'ただいま障害により大変ご迷惑をお掛けしております。'.$e->getMessage();
	exit();
}

?>

<a href="pro_list.php">戻る</a>

</body>
</html>