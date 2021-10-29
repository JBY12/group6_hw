<?
$str = "Привет, мир";
$result=substr_count($str, 'и');
echo "'и' встречается " . $result . " раза";
echo "<br>";

$str="html css php";
echo mb_substr($str,0,4), ' ', mb_substr($str,5,3), ' ', mb_substr($str,9,3);

$arr=["image.png","image.jpg"];
foreach ($arr as $word) {
	$temp=explode('.', $word);
	echo "<br>";
	
	if ($temp[1]=="png"){
		echo "+<br>";
	}
else echo "-<br>";}
?>