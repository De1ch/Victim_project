<?php
//Установка счетчика - ставится в начале страницы
//Для настроек - указать путь, где будет создаваться файл счетчика
if ( !file_exists($files) ) {file_put_contents($files, date('d.m.Y').":0,0%%%0,0"); } //создаем и записываем данные по умолчанию, если файла нет
else {
$rez = file_get_contents($files);
$rez = explode("%%%", $rez);
//В массиве $rez[0]: 19.05.2014: 0, 0 - т.е. дата, кол просм, кол посет.
//В массиве $rez[1]: 0, 0 - кол просм, кол посет. за все время
$rezall = explode(",", $rez[1]);
//echo $rezall[0]; //Просмотры за все врем
//echo $rezall[1]; //Посетители за все время
$rezdata = preg_replace('/:.*/', '', $rez[0]); //В $rezdata только дата типа 19.05.2014
$rezpr = preg_replace('/.*:/', '', $rez[0]); //В $rezpr только данные типа 0,0
$rezpr = explode(",", $rezpr); //В $rezpr[0] - просмотры, $rezpr[1] - посетители
if (strtotime(date('d.m.Y')) == strtotime($rezdata)) {
$rezpr[0] = $rezpr[0] + 1; //просмотры +1
if (!isset($_COOKIE['visitors'])) {

$rezpr[1] = $rezpr[1] + 1; } //посетитель +1
file_put_contents($files, date('d.m.Y').":".$rezpr[0].",".$rezpr[1]."%%%".$rezall[0].",".$rezall[1].""); //записываем результат в файл
}
else { //Дата устаревшая Обнуляем счетчик за сегодня, а старые данные добавляем к за все время
$rezall[0] = $rezpr[0] + $rezall[0]; //сохраняем все просмотры
$rezall[1] = $rezpr[1] + $rezall[1]; //сохраняем всех посетителей
if (!isset($_COOKIE['visitors'])) {
setcookie("visitors", "yes", time()+3600*24); //уникальный посетитель на 24 часа
$ynikuser = 1; } //посетитель +1
else $ynikuser = 0;
file_put_contents($files, date('d.m.Y').":1,".$ynikuser."%%%".$rezall[0].",".$rezall[1].""); //записываем результат в файл
}
}

//Вывод данных счетчика
$rezview = file_get_contents($files);
$rezview = explode("%%%", $rezview);
$rezview = preg_replace('/.*:/', '', $rezview[0]);
$rezview = explode(",", $rezview);
echo "".$rezview[0];
?>
