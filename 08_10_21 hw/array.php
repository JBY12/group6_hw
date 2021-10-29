<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="html, git, php, bitrix">
    <meta name="description" content="курсы для начинающих web-разработчиков">
    <meta name="viewport"
    content="width=device-width", user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
	<link rel="stylesheet" href="styles/array.css">
    <title>8.10.21</title>
</head>
<body>
<div class="start"><b><i>8.10.21</i></b></div>
<?
echo "<pre>";
echo "<b>Задача №1.</b>" . "<br>";
echo "<pre>";
echo "<u>Посчитать количество членов семьи Ivanovs, Petrovs, Smith. Посчитать количество Ivan(1), Kate(2), Tom(1) и т.д.</u>";
echo "<pre>";
echo "<pre>";
echo "<u>Решение:</u>" . "<br>";
echo "<pre>";
$arr=array(
'Ivanovs'=>array("Ivan", "Kate", "Tom"),
'Petrovs'=>array("Bob", "Ann", "Tanya"),
'Smith'=>array("Kate", "Sam"),
);
echo "Количество членов каждой семьи:" . "<br>";
echo "Ivanovs" . " " . - count($arr['Ivanovs'], COUNT_RECURSIVE ) . "человека." . "<br>";
echo "Petrovs" . " " . - count($arr['Petrovs'], COUNT_RECURSIVE ) . "человека." . "<br>";
echo "Smith" . " " . - count($arr['Smith'], COUNT_RECURSIVE ) . "человека." . "<br>";
echo "Количество повторений имён" . "<br>";
$in_string1=implode(",", $arr['Ivanovs']);
$in_string2=implode(",", $arr['Petrovs']);
$in_string3=implode(",", $arr['Smith']);
$sum_of_string = $in_string1 . $in_string2 . $in_string3;
echo "Имя Ivan повторяется" . " " . substr_count($sum_of_string, 'Ivan') . " раз" . "<br>";
echo "Имя Kate повторяется" . " " . substr_count($sum_of_string, 'Kate') . " раз" . "<br>";
echo "Имя Tom повторяется" . " " . substr_count($sum_of_string, 'Tom') . " раз" . "<br>";
echo "Имя Ann повторяется" . " " . substr_count($sum_of_string, 'Ann') . " раз" . "<br>";
echo "Имя Tanya повторяется" . " " . substr_count($sum_of_string, 'Tanya') . " раз" . "<br>";
echo "Имя Sam повторяется" . " " . substr_count($sum_of_string, 'Sam') . " раз" . "<br>";
echo "<pre>";
echo "<b>Задача №2.</b>" . "<br>";
echo "</pre>";
echo "<pre>";
echo "<u>Создать массив размера n, заполненный случайными числами. Вывести каждый элемент массива с новой строки. Все чётные элементы массива необходимо вывести жирным шрифтом.</u>";
echo "</pre>";
echo "<pre>";
echo "<u>Решение:</u>" . "<br>";
echo "<pre>";
$arr=array(5,8,20,43,44,50,66);
foreach ($arr as $value){
	if ($value%2==0){
		echo "<b>" . $value . "</b>" . "<br>";
	}
	elseif ($value%2!=0){
		echo $value . "<br>";
	}
}
echo "<pre>";
echo "<b>Задача №3.</b>" . "<br>";
echo "</pre>";
echo "<pre>";
echo "<u>Создать двумерный массив произвольной длины, содержащий строковые значения. Необходимо вывести все элементы массива, начинающиеся на А.</u>";
echo "<pre>";
echo "<u>Решение:</u>" . "<br>";
echo "<pre>";
$arr1=array(
'SevEig'=>array('Aerosmith','Young','ABBA','Sade'),
'Ninet'=>array('Yorke','Amos','Aaliyah','Guru'),
);
echo "<pre>";
print_r($arr1);
echo "</pre>";
foreach ($arr1['SevEig'] as $value)
{
	if (mb_substr($value,0,1)==="A")
	{
		echo "$value" . "<br>";
	}
}
foreach ($arr1['Ninet'] as $value)
{
	if (mb_substr($value,0,1)==="A")
	{
		echo "$value" . "<br>";
	}
}
echo "<pre>";
echo "<b>Задача №4.</b>" . "<br>";
echo "</pre>";
echo "<pre>";
echo "<u>Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива и количество элементов массива для каддого измерения.</u>";
echo "</pre>";
echo "<pre>";
echo "<u>Решение:</u>" . "<br>";
echo "<pre>";
$arr2=array(
"One"=>[55,78,115,28,59,98],
"Two"=>[88,558,66,39],
);
echo "Общее количество элементов в массиве = " . count($arr2, COUNT_RECURSIVE) . "." . "<br>";
echo "Количество элементов в массиве \"One\" = " . count($arr2["One"], COUNT_RECURSIVE) . "." . "<br>";
echo "Количество элементов в массиве \"Two\" = " . count($arr2["One"], COUNT_RECURSIVE) . "." . "<br>";
?>
</body>
</html>