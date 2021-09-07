<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function nibai($number){
    $result = 2* $number ;
    return $result;
   }
   echo nibai(3); " \n " ;
//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function tashizan($a,$b){
    $result = $a + $b ;
    return $result;
}
echo tashizan(144,169);


　//参考）引数は下記のように指定すると、複数の仮引数を使うことができます。
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください

function kakezan($arr){
    $result = $arr[0]; 
    foreach ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo kakezan(array(1, 3, 5 ,7, 9));" \n " ;

//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_number < $a)
         $max_number = $a;
     }
     return $max_number;
    }
    echo max_array(array(1,3,5,7,9)). "\n";

//5.次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください
$array1 = (1,2,3);
$array2 = (10,20,30);
$array3 = (100,200,300);

$array = array_merge($array1,array2,array3);

print_r($array);
    
?>