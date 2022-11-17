<?php
$var1 = 15;
$var2 = 4;
$sum = $var1 + $var2;
$sub = $var1 - $var2;
$div = $var1 / $var2;
$remDiv = $var1 % $var2;
$degree = $var1 ** $var2;
$str1 = "Привет ";
$str2 = "мир!";
$str3 = $str1 . $str2;

echo 'Арифметические операции: <br>';
echo "$var1 + $var2 =  $sum<br>";
echo "$var1 - $var2 = $sub<br>";
echo "$var1 / $var2 = $div<br>";
echo "$var1 % $var2 = $remDiv<br>";
echo "$var1 ** $var2 = $degree<br>";

echo '<br>Конкатенация строк: <br>';
echo "Строка 1 - $str1<br>";
echo "Строка 2 - $str2<br>";
echo "Результат - $str3<br>";

echo '<br>Цикл от 0 до 9: <br>';
for($i = 0; $i < 10; $i++){
	echo $i . ' ';
}

echo '<br>А еще условие!<br>';
echo "$var1 > $var2?<br>";

if($var1 > $var2){
	echo 'ДА!';
}
else{
	echo 'Категорически НЕТ!';
}

?>