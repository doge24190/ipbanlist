<html>
<body>

<form action="index.php" method="post">
ip: <input type="text" name="ip"><br>
<input type="submit">
</form>

</body>
</html>

<?php
//要查询的IP地址
$IP = $_POST["ip"];  
//拼接url
$url = "https://api.vore.top/api/IPdata?ip=".$IP;
//请求数据并解码
$result = json_decode(file_get_contents($url),true); 
//输出IP归属地信息
print_r($result);
echo "<br>";
echo "ipv4/ipv6:" . $ipinfo['type'];
echo "<br>";
echo "ip地址:" . $ipinfo['text'];
echo "<br>";
echo "物理地址：" . $ipdata['info1'] . $ipdata['info2'] . $ipdata['info2'];
echo "<br>";
echo $ipdat['isp'];
echo "耗时：$time";
?>
    
