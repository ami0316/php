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

?>

<?php
$age = rand(15,25); // 何才かを$ageに15~25から数値をランダムに選んで代入
echo "ageの中身:".$age."\n";
if($age >= 20){
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

<?php
// 平成何年か計算
$year = date("Y");
echo "西暦".$year."年は";

$hesei = $year - 1988;
echo "平成".$hesei."年です";
?>

<?php
// Here your code !
$input = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));
echo "標準入力値：".$input."\n";
echo "標準入力値2：".$input2."\n";
echo $input+$input2;
?>

<?php
echo fgets(STDIN);

?>

<?php
// Here your code !
$name_1 = "勇者２";
$name_2 = "魔法使い";

$team = array("勇者", "魔法使い", $name_1);
print_r($name_1);
?>

<?php
// 関数を作ろう
say_hello();
function say_hello() {
    echo "hello paiza";
}
say_hello();
?>

<?php
// クラスを作成する
class Player {
    public function walk() {
        $message = "勇者は荒野を歩いていた。";
        echo $message;
    }
}

$player1 = new Player();
$player1->walk();
?>

<?php
// クラスを継承する
class Box {
    public $myItem;
    
    public function __construct() {
        $this ->myItem = "新しいアイテム";
    }
    
    public function open() {
        echo "宝箱を開いた。".$this->myItem."を手に入れた。\n";
    }
}
?>

<?php
echo "start\n";
try {
    $date = new DateTime("199x-01-01");
    echo $date->format('Y/m/d'). "\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
} finally {
    echo "end\n";
}    
?>

<?php
// 例外処理を定義しよう

echo "start\n";
$date = new DateTime("199x-01-01");
echo $date->format('Y/m/d') . "\n";
echo "end\n";
?>

<?php
// クラスにメソッドを定義しよう
class Greeting {
    public $msg;
    public $target;

    public function __construct() {
        $this->msg = "hello";
        $this->target = "paiza";
    }
    public function sayHello() {
        echo $this->msg." ".$this->target;
    }
}

class Hello extends Greeting {
}

$hello = new Hello();
// 続けて、sayHelloメソッドを呼び出す

?>

<?php
// 間違い探し
class Greeting {
    public $msg;
    public $target;

    public function __construct() {
        $this->msg = "hello";
        $this->target = "paiza";
    }
}

class Hello extends Greeting {
    public function sayHello() {
        echo $msg." ".$target;
    }
}

$player = new Hello();
$player->sayHello();
?>

<?php
// インスタンスを実体化しよう
class Greeting {
    public function sayHello() {
        echo "hello paiza";
    }
}



?>

<?php
// クラスにメソッドを定義しよう
class Greeting {
    // この下に、sayHelloメソッドを記述する



}

$paiza = new Greeting();
$paiza->sayHello();
?>

<?php
// インスタンスを実体化しよう
class Greeting {
    public function sayHello() {
        echo "hello paiza";
    }
}

?>

<?php
// クラスにメソッドを定義しよう
class Greeting {
    // この下に、sayHelloメソッドを記述する
}

$paiza = new Greeting();
$paiza->sayHello();
?>

<?php
// 関数を呼び出してみよう

function say_hello(){
    echo "hello paiza";
}

// この下に関数呼び出しを記述する
?>

<?php
// 関数を作成してみよう

function say_hello(){
    // この下に関数内の処理を記述する

}

say_hello();
?>

<?php
// 間違い探し

say_hello();

function sayHello(){
    echo "hello paiza";
}
 ?>
 
 <?php
// 2次元配列を作成してみよう
$item1 = ["木の棒", "こん棒"];
$item2 = ["おにぎり", "おにぎり"];
$item3 = ["毒消し", "薬草"];

// item1 ~ 3を、$basket配列に代入してください。
$basket = [];

echo $basket[0][0]."\n";
echo $basket[0][1]."\n";
echo $basket[1][0]."\n";
echo $basket[1][1]."\n";
echo $basket[2][0]."\n";
echo $basket[2][1]."\n";
?>

<?php
// 配列の中身を出力してみよう
$members = [["勇者", "忍者"], ["武士", "戦士"], ["僧侶", "魔法使い"]];

// この下で、$members配列の全ての要素を出力してみよう
echo($members[0][0])."\n";
echo($members[0][0])."\n";
echo($members[0][0])."\n";
echo($members[0][0])."\n";
echo($members[0][0])."\n";
echo($members[0][0])."\n";
?>

<?php
// ■連想配列代入する値
// ショートソードを12個
// 銅の盾を4個
// 布の服を7個
$item =
print_r($item);

?>

<?php
// 標準入力を３行取得
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	// 入力値を/で分割
	$key_value =explode("/", $input);
	// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;

}
// ここから下に記述　
// $team のkeyが戦士のvalueを出力


?>

<?php
// 標準入力を３行取得
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	// 入力値を/で分割
	$key_value =explode("/", $input);
	// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;

}
// ここから下に記述　
// 配列 $team にkeyが「狩人」、valueが「鳥獣をとる猟師」という要素を追加

print_r($team);

?>

<?php
// 標準入力を３行取得
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	// 入力値を/で分割
	$key_value =explode("/", $input);
	// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;

}
// ここから下に記述　
// $team のkeyが「木こり」のvalueを「木を切る職業」で上書きして、
//print_rで $team の内容を出力してみよう。

print_r($team);

?>

<?php
// 標準入力を３行取得
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	// 入力値を/で分割
	$key_value =explode("/", $input);
	// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;

}
// ここから下に記述　
// $team のkeyが「スライム」の要素を削除して
// print_rで $team の内容を出力してみよう。

print_r($team);

?>

<?php
$array = array("戦士","侍","僧侶","魔法使い");
// この下で$arrayを出力してみよう

?>

<?php
$item = array("回復薬", "布の服", "革の盾");
echo $item;

?>

<?php
$item =

?>