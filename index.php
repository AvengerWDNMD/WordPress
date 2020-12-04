<!DOCTYPE html>
<html>
<body>

<h1>11班网站暂时关闭</h1>

<?php
echo "11班网站将于12月6日全部关闭,";
echo "将在2021年7月重新开放。";
$time1 = time();

$time2 = strtotime("2021-6-7");

$time3 = strtotime("2021-6-7");

$sub = ceil(($time2 - $time1)/3600);

$sub2 = ceil(($time3 - $time1)/86400);

 



echo "距离高考还有$sub2" . "天！" . '<br>';
?>

</body>
</html>
