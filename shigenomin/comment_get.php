<?php
// DBに接続
require("../mysql.php");
// 接続結果の確認
if (mysqli_connect_errno())
{
echo '<p>取得に失敗しました</p>';
echo '<p>ERROR : データベースへの接続に失敗しました</p>';
exit();
}

// レコード取得のSQL作成
$sql = "SELECT comment FROM user_comment ORDER BY date DESC";

// SQL実行
$result = $mysqli->query($sql);

// 実行結果確認
$data = "";
if ($result)
{
while ($row = $result->fetch_row())
{
$tmp = mb_convert_encoding($row[0], "UTF-8");
$data = $data . $tmp . "@#KT@25#@";
}
}

// 結果格納
echo $data;

// 切断
$mysqli->close();
?>