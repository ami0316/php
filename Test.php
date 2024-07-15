<?php
$damage = 12;
echo "スライムの攻撃。".$damage."のダメージを受けた";

?>

<?php
$rand_num = rand(50,99);
echo "スライムに".$rand_num."のダメージを与えた。";
?>

<?php
$n = 2;
if($n == 1){
    echo "好き";
}else{
    echo "嫌い";
}
?>

<?php
$place = rand(1,5); 
echo "placeの中身:".$place."\n";
if($place == 1){
    echo "金賞";
    // 1位だったときの処理
}elseif($place == 2){
    echo "銀賞";
}elseif($place == 3){
    echo "銅賞";
 // code...
    
}else{
    echo $place."位";
}

?>

<?php
$age = rand(18,22); // 何才かを$ageに18~22をランダムで代入
echo "ageの中身:".$age." \n";
if($age < 20 ){
    echo $age."才は飲酒不可";
}else{
    echo $age."才は飲酒可能";
}

    // それ以外だったときの処理

?>

<?php
$age = rand(15,25); // 何才かを$ageに15~25から数値をランダムに選んで代入
echo "ageの中身:".$age."\n";
if($age >= 20){
    // 条件が成り立ったときの処理
    echo $age."才成人です";
}else{
    // それ以外だったときの処理
    echo $age."才未成年です";
}

?>

<?php
$omikuji = rand(1,100);
if($omikuji >= 30){
    echo "omikujiの中身は".$omikuji."なので大吉";
}else{
    echo "omikujiの中身は".$omikuji."なので大凶";
}
?>

<?php

$dice = rand(1,6);
echo "サイコロは".$dice."\n";
if ($dice >= 4 && $dice <= 6) {
    echo "スライムの攻撃をかわした";
}else{
    echo "スライムから10のダメージを受けた";
}    
?>
