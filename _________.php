<?php
//データの受け取り
$namae = $_POST["namae"];
$pass = $_POST["pass"];
$email = $_POST["email"];

//タグの無効化
$namae = htmlspecialchars($namae);
$email = htmlspecialchars($email);
$pass = htmlspecialchars($pass);

$namae = mb_convert_kana($namae,"KV");
$email = mb_convert_kana($email,"a");
$pass = mb_convert_kana($pass,"a");

$msg = "";
if( strlen($namae) == 0){
    $msg .= "名前が未入力です<br>";
}

if( strlen($pass) == 0){
    $msg .= "パスワードが未入力です<br>";
}

if( strlen($email) == 0){
    $msg .= "メールアドレスが未入力です<br>";
}

?>
<!DOCTYPE html>
<html lang="ja">
<meta charset="UTF-8">
<head><title>仮登録</title></head>
<body>
<h1>仮登録</h1>
<h2>確認画面</h2>
<?php echo $msg; ?>
<table border="1">
<tr><td>氏名</td><td><?php echo $namae;?></td></tr>
<tr><td>メアド</td><td><?php echo $email;?></td></tr>
<tr><td>パスワード</td><td><?php echo $pass;?></td></tr>
<tr><td>
<input type="submit" value="仮登録完了">
<input type="submit" value="戻る" onclick="history.back()">
</td></tr>
</table>
</body>
</html>