<?php
$user_comment = $_POST['user-comment'];
$user_comment = mb_convert_encoding($user_comment, "UTF-8");
if (empty($user_comment))
{
echo '<p>投稿に失敗しました</p>';
echo '<p>ERROR : コメントが空白です</p>';
exit();
}

// DBに接続
require("../mysql.php");

// 接続結果の確認
if (mysqli_connect_errno())
{
echo '<p>投稿に失敗しました</p>';
echo '<p>ERROR : データベースへの接続に失敗しました</p>';
exit();
}

// レコード取得のSQL作成（最大件数を超える場合は投稿を許可しない）
$sql = "SELECT * FROM user_comment";

// SQL実行
$result = $mysqli->query($sql);

// 実行結果確認
$max = 20;
$num = $max;
if ($result)
{
$num = $result->num_rows;
}
if (!$result || $num >= $max)
{
echo '<p>投稿に失敗しました</p>';
echo '<p>ERROR : データベースの保存件数が最大です</p>';
$mysqli->close();
exit();
}

// 投稿データ追加のSQL文(insert)作成
$sql = "INSERT INTO user_comment (date, comment) VALUES ('".date('Y-m-d H:i:s')."', '".$user_comment."')";

// SQL実行
$result = $mysqli->query($sql);

// 切断
$mysqli->close();

// 元のページにリダイレクト
header("Location: https://shigenomin.work/", true, 307);
exit();
?>
