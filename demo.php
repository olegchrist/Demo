

<?php


$json = file_get_contents('https://api.vk.com/api.php?oauth=1&method=users.get&uids=312041848&fields=online'); // ������� ������ {"response":[{"uid":1111111,"first_name":"���","last_name":"�������"}]}
$obj = json_decode($json, 1);
echo $obj['response'][0]['first_name'];
?>
