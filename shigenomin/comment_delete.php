<?php
require("../mysql.php");
$sql = "DELETE FROM user_comment";
$result = $mysqli->query($sql);
$mysqli->close();

header("Location: https://shigenomin.work/", true, 307);
exit();
?>