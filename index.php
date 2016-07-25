<meta charset="utf-8">
<?php
echo "<h3>Task 1</h3>";
/*
Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
По желанию можете сделать проверку на корректность введения данных пользователем.
*/

$number = "135874169";
$result = 0;
for ($i=0; $i <= strlen($number); $i++) {
	if (isset($number[$i])) {
		$result += $number[$i];	
	} 
	
}

echo $result;


echo "<h3>Task 2</h3>";
/*
Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза
*/

$randomNumber = "1578945678915655";
$number = 1;
$result = 0;
for ($i=0; $i <= strlen($randomNumber); $i++) {
	if ((isset($randomNumber[$i])) && ($randomNumber[$i] == $number)) {
		++$result;
	} 
}

echo $result;

echo "<h3>Task 3</h3>";

/*
echo 'Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5 и найдите сумму этих чисел. Рекомендую использовать функцию fmod для определения "делится число" или "не делится".'
*/

$start = 20;
$end = 45;
$divider = 5;
$result = 0;

for ($i=$start; $i <= $end; $i++) { 
	if (fmod($i, $divider) == 0) {
		$result += $i;
	}
}

echo $result;

echo "<h3>Task 4</h3>";

/*
Ваше задание создать массив, наполнить его случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.
*/ 

$qlArray = 45;

for ($i=0; $i <= $qlArray; $i++) { 
	$random[] = rand(0,100);
}

$min = min($random);
$max = max($random);


$keyMin = array_search(min($random), $random);
$keyMax = array_search(max($random), $random);

echo "Ключ минимального числа: " . $keyMin . " = Значению " . $min . "<br>";
echo "Ключ максимального числа: " . $keyMax . " = Значению " . $max . "<br>";

$random[$keyMin] = $max;
$random[$keyMax] = $min;

echo "Теперь ключ: " . $keyMin . " = Значению " . $random[$keyMin] . "<br>";
echo "Теперь ключ: " . $keyMax . " = Значению " . $random[$keyMax] . "<br>";

echo "<h3>Task 5</h3>";
?>
