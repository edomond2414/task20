<?php

if (!empty($_POST['name'])) {
	$msg = "あなたは" . $_POST['name'] . "ですね。";
	$name = $_POST['name'];
} else {
	$msg = "名前を入力してください";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>タスクサンプル1</title>
</head>
<body>

<?php echo $msg; ?>

<div>
<form action="3.php" method="post">

<div>好きな食べ物</div>
<input type="text" name="food">

<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="submit" value="送信する">
</form>

</div>

</body>
</html>
