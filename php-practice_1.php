s<?php
// Q1 変数と文字列
$name = "尾崎";
echo "私の名前は「" . $name . "」です。";

// Q2 四則演算
$num = 5 * 4;
echo $num;

echo PHP_EOL;

$div_num = $num / 2; //divided number
echo $div_num;

// Q3 日付操作
echo "現在時刻は、" . date("Y年m月d日 H時i分s秒") . "です。";

// Q4 条件分岐-1 if文
$device = "linux";

if ($device == "windows" or $device == "mac") {
    echo "使用OSは、" . $device . "です。";
} else {
    echo "どちらでもありません。";
}

// Q5 条件分岐-2 三項演算子
$age = 17;
$result = ($age >= 18) ? "成人です。" : "未成年です。";
echo $result;

// Q6 配列
$pref_array = ["東京都", "千葉県", "埼玉県", "神奈川県", "栃木県", "群馬県"];
echo $pref_array[2] . "と" . $pref_array[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$pref_cap_array = ["東京都"=>"新宿区",
                    "千葉県"=>"千葉市",
                    "埼玉県"=>"さいたま市",
                    "神奈川県"=>"横浜市",
                    "栃木県"=>"宇都宮市",
                    "群馬県"=>"前橋市"];

foreach ($pref_cap_array as $cap) {
    echo $cap;
    echo PHP_EOL;
}

// Q8 連想配列-2
foreach ($pref_cap_array as $pref => $cap) {
    if ($pref === "埼玉県") {
        echo $pref . "の県庁所在地は、" . $cap . "です。";
    }
}

// Q9 連想配列-3
$pref_cap_array['愛知県'] = '名古屋市'; //中部
$pref_cap_array['大阪府'] = '大阪市'; //近畿

foreach ($pref_cap_array as $pref => $cap) {
    if ($pref === '愛知県' or $pref === '大阪府') {
        echo $pref . "は関東地方ではありません。";
        echo PHP_EOL;
    } else {
        echo $pref . "の県庁所在地は、" . $cap . "です。";
        echo PHP_EOL;
    }
}

// Q10 関数-1
function hello($name)
{
    echo $name . "さん、こんにちは。";
    echo PHP_EOL;
}

hello("金谷");
hello("安藤");

// Q11 関数-2
function calcTaxInPrice($price)
{
    $taxInPrice = $price * 1.1;
    return $taxInPrice;
}

$price = 1000;

echo $price . "円の商品の税込価格は" . calcTaxInPrice($price) . "円です。";

// Q12 関数とif文
function distinguishNum ($num)
{
    if ($num % 2 == 1) {
        echo $num . "は奇数です。";
    } else {
        echo $num . "は偶数です。";
    }
}

$num = 2;

distinguishNum($num);

// Q13 関数とswitch文
function evaluateGrade($result)
{
    switch ($result) {
        case 'A':
        case 'B':
            return "合格です。\n";

        case 'C':
            return "合格ですが追加課題があります。\n";

        case 'D':
            return "不合格です。\n";

        default:
            return "判定不明です。講師に問い合わせてください。\n";
    }
}

echo evaluateGrade("A");
echo evaluateGrade("D");

?>
