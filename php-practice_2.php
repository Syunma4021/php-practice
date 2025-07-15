<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
    if ($i % 20 == 0) {
        echo "tic-tac";
        echo PHP_EOL;
    } elseif ($i % 4 == 0) {
        echo "tic";
        echo PHP_EOL;
    } elseif ($i % 5 == 0) {
        echo "tac";
        echo PHP_EOL;
    } else {
        echo $i;
        echo PHP_EOL;
    }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

// 問題1
echo 
    $personalInfos[1]['name'] . "の電話番号は" . 
    $personalInfos[1]['tel'] . "です。" . 
    PHP_EOL;

foreach ($personalInfos as $info) {
    echo 
        $info['name'] . "のメールアドレスは" . 
        $info['mail'] . "で、電話番号は" . 
        $info['tel'] . "です。" . 
        PHP_EOL;
};

// 問題2
foreach ($personalInfos as $index => $info) {
    echo 
        $index + 1 . "番目の" . 
        $info['name'] . "のメールアドレスは" . 
        $info['mail'] . "で、電話番号は" . 
        $info['tel'] . "です。" . 
        PHP_EOL;
};

// 問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $info) {
    $personalInfos[$index]["age"] = $ageList[$index];
};

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
    
    public function getId() {
        return $this->studentId;
    }
    
    public function getName() {
        return $this->studentName;
    }
}

$student = new Student(2, "尾崎");
echo "学籍番号" . $student->getId() . "番の生徒は" . $student->getName() . "です。"; 

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class)
    {
        echo $this->studentName . 'は' . $class . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
    
    public function getId() {
        return $this->studentId;
    }
    
    public function getName() {
        return $this->studentName;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('JAVA');

// Q5 定義済みクラス

// 問題1
$date = new DateTime();
echo $date->modify('-1 month')->format('Y-m-d');

// 問題2
$now = new DateTime();
$target = new DateTime('1992-04-25');

$diff = $now->diff($target);
echo $diff->format('あの日から%a日経過しました。');

?>
