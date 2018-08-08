<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>

<?php

try {
	$dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
	$user = 'root';
	$passwd = 'c(xEJua3i&pGFtWU';
	$dbh = new PDO($dsn, $user, $passwd);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = 'SELECT code,name FROM mst_staff';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	
	$dbh = null;
	
	print 'スタッフ一覧<br /><br />';
	
	print '<form method="post" action="staff_branch.php">';
	while ($rec = $stmt->fetch(PDO::FETCH_ASSOC)) {
		print '<input type="radio" name="staffcode" value="'.$rec['code'].'">';
		print $rec['name'].'<br />';
	}
	print '<input type="submit" name="disp" value="参照">';
	print '<input type="submit" name="add" value="追加">';
	print '<input type="submit" name="edit" value="修正">';
	print '<input type="submit" name="delete" value="削除">';
	print '</form>';
}
catch (Exception $e) {
	echo 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
	
}

?>

</body>
</html>