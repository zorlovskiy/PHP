<?php
//Куки и сессия в PHP
$user_name = "Alex";
setcookie("user_name", $user_name, time() +5);
print_r($_COOKIE);

$title = "Главная страница";
//работа с датой
//echo date('t F');
/*echo date('m-l H:i:s', time() + 10800).'<br>';*/
//echo  time();
// echo date('m-d H:i:s', strtotime("+1 Hour"));
//require "blocks/footer.php";
$lis = [5, 7, 3, 4, 6, 8];
unset($lis[1]);
// $lis = array_values($lis);
//сортирует в обратном порядке
//rsort($lis);
//обрезает элемнты по массиву
$arr = array_slice($lis, 0, count($lis));
/*var_dump($arr);*/
echo '<br>';

//объединение массивов
$arr_1 = [5, 7];
$arr_2 = [6, 8, 9];
$arr_3 = array_merge($arr_1, $arr_2);
/*print_r($arr_3);*/
echo '<br>';
//ищет элемент по массиву
/*if (in_array(3, $lis) == "")
    echo "Not found";
else "Found";*/

//разбрасывает элементы рандомно по массиву
//shuffle($lis);
//выводит массив
/*print_r($lis);*/
echo '<br>';

//получение типа данных
$x = "10";
/*echo gettype($x);*/
echo '<br>';
//проверка на число
/* echo is_numeric($x);*/
echo '<br>';

//поиск символа в строке
$str = "Example";
/* echo strpos($str, "am").'<br>';*/

//разбивает строку на массив по элементу
$words = "jhon,bob,alex";
$arr_words = explode(",", $words);
/*print_r($arr_words);*/
//объединяет массив в строку по символу
/*echo '<br>'.implode(" | ", $arr_words);*/



//фугкция phpinfo() и массив $_SERVER
/*phpinfo();*/

/*echo '<pre>';
print_r($_SERVER);
echo '</pre>';*/

/*echo $_SERVER['HTTPS'];*/
/*echo $_SERVER['HTTP_HOST'].' - '.$_SERVER['REQUEST_URI'];*/
/*echo  $_SERVER['HTTP_USER_AGENT'];*/
/*if ($_GET['source'] != "") {
    $_link = explode("?source=", $_SERVER['REQUEST_URI']);
    $_redirect = "http://".$_SERVER['HTTP_HOST'].$_link[0];

    header('HTTP/1.1 301 Moved Permanently');
    header('Location: '.$_redirect);
    exit();
}*/

//Отправка почты с сайта
$message = "Сообщение";
$to = "oreol1234yandex.ru@mail.ru";
$from = "zo@kvando.tech";
$subject = "Тема сообщениея";

$subject = "=?utf-8?B?".base64_encode($subject)."?=";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

/* mail($to, $subject, $message, $headers);*/
require "blocks/header.php";
?>
<h1>Главная страница</h1>
<?php
require "blocks/footer.php";
?>