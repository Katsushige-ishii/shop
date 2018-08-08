<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>

<?php

$pro_name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$pro_price = htmlspecialchars($_POST['price'], ENT_QUOTES, 'UTF-8');

if ($pro_name == '') {
	echo '商品名が入力されていません。<br />';
}
else {
	echo '商品名:'.$pro_name.'<br />';
}

if (preg_match('/\A[0-9]+\z/', $pro_price) == 0) {
	echo '価格をきちんと入力してください。<br />';
}
else {
	echo '価格:'.$pro_price.'円<br />';
}

if ($pro_name == '' || preg_match('/\A[0-9]+\z/', $pro_price) == 0) {
	echo '<form>';
	echo '<input type="button" onclick="history.back()" value="戻る">';
	echo '</form>';
}
else {
	echo '上記の商品を追加します。<br />';
	echo '<form method="post" action="pro_add_done.php">';
	echo '<input type="hidden" name="name" value="'.$pro_name.'">';
	echo '<input type="hidden" name="price" value="'.$pro_price.'">';
	echo '<br />';
	echo '<input type="button" onclick="history.back()" value="戻る">';
	echo '<input type="submit" value="OK">';
	echo '</form>';
}

?>

</body>
</html>