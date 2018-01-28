<?php


require 'predis-1.1.1/autoload.php';                 // 설치방식에 따라 적절한 파일을 포함한다.




$redis = new Predis\Client('tcp://localhost:6379');
//$redis = new Predis\Client();  // Redis 서버에 접속.



$redis->set('foo', 'tests');     // 'foo'에 'bar'를 저장.

$value = $redis->get('foo');   // 'bar'가 리턴됨.


?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Example</title>
</head>
<body>
<?php
echo "Hi, I'm a PHP script!";
?>

redis result : <?=$value?>

</body>
</html>