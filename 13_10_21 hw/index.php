<?
$name='Айдар';
$age=25;
const PI=3.14;
echo $name . '<br>' . $age . '<br>' . PI . '<br>';
//date_default_timezone_set('Asia/Tokyo');
date_default_timezone_set('Russia/Moscow');

function style_of_time(){
$t=date("H:i:s");
echo "$t";
if(($t>="08:00") && ($t<="23:59"))
{
	echo "<link rel='stylesheet' href='styles/style_new.css'>";
}
else{
	echo "<link rel='stylesheet' href='styles/style_night.css'>";
}
}
style_of_time();
$t=date("H:i:s");
echo "$t";
/*if(($t>="08:00") && ($t<="23:59"))
{
	echo "<link rel='stylesheet' href='styles/style_new.css'>";
}
else{
	echo "<link rel='stylesheet' href='styles/style_night.css'>";
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="html, git, php, bitrix">
    <meta name="description" content="курсы для начинающих web-разработчиков">
    <meta name="viewport"
    content="width=device-width", user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
	<link rel="stylesheet" href="styles/style_flex.css">
    <title>О себе</title>
</head>
<body>
<header class="header"><nav class="one">
  <ul>
    <li><a href="index.html"><img src="images/fact.png" alt="OK, computer, I want full manual control now" title="OK, computer, I want full manual control now."></a></li>
    <li><a href="tablemend.html">Таблица Менделеева</a></li>
	<li><a href="array.php">Массивы</a></li>
  </ul>
</nav>

</header>


<div class="pict" align=center></div>
<div class="nmsrnm" align=center><h1>
<?php
$name1="Айдар Газизов";
echo $name1;
?>
<h1></div>
<div class="abms" align=center><p>
<?php

$about="Слушаю музыку, в основном, зарубежный рэп. Rakim, Sean Price, Slick Rick, Gang Starr, Nas, MF DOOM, Madlib, Kendrick Lamar и др. Также слушаю виниловые и шеллаковые пластинки.";
function first_sent($about){
$aboutArr=explode('. ', $about);
$aboutArr[0]="<span style='color: deeppink'>$aboutArr[0]</span>";
$aboutColor=implode('. ', $aboutArr);
echo $aboutColor;
}
first_sent($about);
?>
</p> Работаю в МБОУ ДО НИМЦ.<br> Учусь в Башкирском государственном университете.<br></div>
<div class="lkdslk" align=center>
<?php

$opinion="Первое занятие... Я в это время готовил программы, установил почти все. Зашёл к концу занятия, чтобы отметиться, хотя позже узнал, что я был отмечен как нб. Заранее не получилось установить, поскольку был в отъезде. Сам же болел в это время. Досмотрел видео во время второго занятия. Перематывал моменты, особенно где у кого-то не получалось, а у меня - да. Сделал почти всё, ибо была проблема с подключением к аккаунту, т.е. с запушиванием. Хочется не отставать. Что не нравится на занятиях - быстрый темп.";
function evenuneven($opinion){
$opinionArr=explode(' ', $opinion);
foreach ($opinionArr as $pos=>$word){
	if ($pos%2!==0){
		$opinionArr[$pos]="<span style='color: deeppink'>$word</span>";
	} else $opinionArr[$pos]="<span style='color: brown'>$word</span>";
}
$opinionColor=implode(' ', $opinionArr);
echo $opinionColor;
}
evenuneven($opinion);
?>
</div>

<div class="container">
   <div class="Rakim" align=center><img src="images\A-22877-1557401414-9858.jpg" width=250 height=300><br>Rakim</div>
   <div class="Lamar" align=center><img src="images\https___specials-images.forbesimg.com_imageserve_5d1d0c01142c500008c82ff7_0x0.jpg" width=250 height=300><br>Kendrick Lamar</div>
   <div class="DOOM" align=center><img src="images\images.jpg" width=250 height=300><br>MF DOOM</div>
   <div class="Madlib" align=center><img src="images\Madlib_Electronic-Beats.jpg" width=250 height=300><br>Madlib</div>
</div>

<div class="grid">
   <div class="McCartney" align=center><img src="images\7568.jpg" width=300 height=300><br>Paul McCartney</div>
   <div class="Davis" align=center><img src="images\MilesDavis1986.jpg" width=200 height=300><br>Miles Davis</div>
   <div class="Yorke" align=center><img src="images\ThomYorke3.jpg" width=300 height=300><br>Thom Yorke</div>
   <div class="BfL" align=center><img src="images\1329251194_a574060719_c.jpg" width=400 height=300><br>Bat for Lashes</div>
</div>

<div class="container">
   <div class="ZI" align=center><img src="images\16082501.jpg" width=250 height=300><br>Загир Исмагилов</div>
   <div class="MJU" align=center><img src="images\maxresdefault.jpg" width=250 height=300><br>Марат Юлдыбаев</div>
   <div class="RG" align=center><img src="images\x_2b90fe6f.jpg" width=250 height=300><br>Радик Гареев</div>
   <div class="FS" align=center><img src="images\i.jpg" width=250 height=300><br>Фануна Сиражетдинова</div>
</div>

<footer>
<div>
<?php
echo "Текущее время: $timeDisplayed";
$allText=$about.$opinion.$name1;
$wordCount=str_word_count($allText);
echo "<br>Количество слов на странице = $wordCount<br>";
$vowelCount=preg_match_all('/aeiouаеёиоуыэюя]/iu',$allText);
echo "<br>Количество гласных на странице = $vowelCount<br>";
function dayscounted(){
$date1 = date_create_from_format('Y-m-d', '1996-01-20');
$date2 = date_create_from_format('Y-m-d', date('Y-m-d'));
$diff = (array) date_diff($date1, $date2);
//echo '<pre>'.print_r($diff,1).'</pre>';
$daysPassed=$diff['days'];
//echo $diff['days'];
echo 'Мне '.$daysPassed . ' дней';
}
dayscounted();
?>
</div>
</footer>

</body>
</html>