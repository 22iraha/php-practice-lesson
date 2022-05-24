<form action="ifE.php" method="GET">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <br>
    <button type="submit" name="button">送信</button>   
</form>

<?php
//条件分岐(数値比較)

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

$num3 = "";

if (is_numeric($num1) == false) {//数値では無いときの処理文
    $num3 .= "num1 ";
} 
if (is_numeric($num2) == false) {//数値では無いときの処理文
    $num3 .= "num2 ";
}

if ($num3 != "") {
   echo $num3."は数値ではありません";
   exit; 
}


if ($num1 > $num2) {
    $strAnswer = "大きい";
} elseif ($num1 < $num2) {
    $strAnswer = "小さい";
} else {
    $strAnswer = "等しい";
} 
echo  "num1 は num2より".$strAnswer;
?>