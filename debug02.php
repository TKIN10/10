<?php

// デバック練習
// 氏名入力時に入力内容が表示されるようにプログラムを完成させてください。

$createAgeGroup = function () {
    $maxAge = 70;
    $minAge = 18;
    $ageGroup = array();
    for ($i = $minAge; $i <= $maxAge; $i++) {
        array_push($ageGroup, $i);
    }
    return $ageGroup;
};

class SelfIntroduction
{
    private string $lastName;
    private string $firstName;
    private int $age;
    private string $hobby;

    public function __construct($lastName,$firstName,$age,$hobby){
        $this->lastName     = $lastName;
        $this->firstName    = $firstName;
        $this->age          = $age;
        $this->hobby        = $hobby;
    }

    public function getFullName()
    {
        return $this->lastName.$this->firstName;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getHobby()
    {
        return $this->hobby;
    }
}

$selfIntroduction = new SelfIntroduction($lastName = $_POST['last_name'],$firstName = $_POST['first_name'],$age = $_POST['age'],$hobby = $_POST['hobby']);

if (! empty($_POST)) {
    $lastName         = $_POST['last_name'];
    $firstName        = $_POST['first_name'];
    $age              = $_POST['age'];
    $hobby            = $_POST['hobby'];
    if ($selfIntroduction) {
        echo '私の名前は'.$selfIntroduction->getFullName().'年齢は'.$selfIntroduction->getAge().'です。';
        echo '<br>';
        echo '趣味は'. $selfIntroduction->getHobby().'です。';
    }
}

?>