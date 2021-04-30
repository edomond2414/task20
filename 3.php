<?php

if (!empty($_POST['name']) && !empty($_POST['food'])) {
	$msg = "あなたは" . $_POST['name'] . "で、" . $_POST['food'] . "が好きなのですか？";
	$food = $_POST['name'];
} else {
	$msg = "好きな食べ物を入力してください";
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

</div>

</body>
</html>
