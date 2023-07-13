<?php
// デバック練習
// 氏名入力時に入力内容が表示されるようにプログラムを完成させてください。
// プログラム内にバグが含まれているので正常に動くように修正してください。

if (!empty($_POST["submit"])) {
    $lastName = $_POST['last_name'];
    $firstName= $_POST['first_name'];
    if ($lastName != null && $firstName != null) {
        echo '私の名前は'.$lastName.$firstName.'です。';
    }
}

$lastName = $_POST['last_name'];
$firstName= $_POST['first_name'];
echo '私の名前は'.$lastName.$firstName.'です。';

?>