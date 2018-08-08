<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>

<?php

$staff_code = $_POST['code'];
$staff_name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$staff_pass = htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8');
$staff_pass2 = htmlspecialchars($_POST['pass2'], ENT_QUOTES, 'UTF-8');

if ($staff_name == '') {
	echo 'スタッフ名が入力されていません。<br />';
}
else {
	echo 'スタッフ名:'.$staff_name.'<br />';
}

if ($staff_pass == '') {
	echo 'パスワードが入力されていません。<br />';
}

if ($staff_pass != $staff_pass2) {
	echo 'パスワードが一致しません。<br />';
}

if ($staff_name == '' || $staff_pass == '' || $staff_pass != $staff_pass2) {
	echo '<form>';
	echo '<input type="button" onclick="history.back()" value="戻る">';
	echo '</form>';
}
else {
	$staff_pass = md5($staff_pass);
	echo '<form method="post" action="staff_edit_done.php">';
	echo '<input type="hidden" name="code" value="'.$staff_code.'">';
	echo '<input type="hidden" name="name" value="'.$staff_name.'">';
	echo '<input type="hidden" name="pass" value="'.$staff_pass.'">';
	echo '<br />';
	echo '<input type="button" onclick="history.back()" value="戻る">';
	echo '<input type="submit" value="OK">';
	echo '</form>';
}

?>

</body>
</html>