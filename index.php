<?php
//Сессии. Сессии надо стартовать до того, как что-либо будет выведено на страницу
session_start();

//Куки и сессия в PHP
$user_name = "Alex";
//setcookie("user_name", $user_name, time() + 180);
//print_r($_COOKIE);
//echo $_COOKIE['user_name'];

//Вывод сессии
$_SESSION['user_name'] = $user_name;
//убивает сессию
//session_destroy();

//удаление сессии по ключу
//unset($_SESSION['user_name']);

if($_SESSION['user_name'] == "Alex")
    echo "Да, сессия установлена!";

define("MY_AGE", 28, false);
echo '<br>'. MY_AGE . '<br>';

$years = '16  лет';
$company = 'ООО Моя оборона';
$number = 3;
$num = 0;
$strlen = strlen($company);

echo "Наша компания ", $company, ' уже ', $years, ' на рынке шпингалетов.';
echo "<br> Переменная: " . $number . $num;
echo "<br>" . $strlen;

if ($number == 5) {
    echo "<br>" . '$number = 5';
} else {
    echo "<br>" . 'NO';
}

switch ($number) {
    case 5:
        echo "<br>" . "Var: 5";
        break;
    case 6:
        echo "<br>" . "Var: 6";
        break;
    case 7:
        echo "<br>" . "Var: 7";
        break;
    case 8:
        echo "<br>" . "Var: 8";
        break;
    default:
        echo "<br>" . "Default work!" . "<br>";
        break;
}

//массивы

$nums = array(4, 5, 6, 2, 0, -23, 7);
$nums[1] = 45;
echo $nums[1] . "<br>";

$arr = [4, "true", 6, "8", 0.4];
echo $arr[1] . "<br>";

//ассоциативный массив
$list = ["age" => 50, "name" => "Alex", "hobby" => "Football"];
$list["name"] = "Bob";
echo $list["name"] . "<br>";

//многомерные массивы
$matrix = [[4, 6, 8], [3, 2], [1, 5, 8, "9"]];
$matrix[0][1] = 4;
echo $matrix[0][1] . "<br>";

//циклы

/*echo "<br>" . "циклы" . "<br>";
for ($i = 100; $i > 20; $i -= 5){
    echo $i . "<br>";
}*/

//Цикл While

/*echo "<br>" . "цикл While" . "<br>";
$i = 1;
while ($i <= 10) {
    echo $i . "<br>";
    $i++;
}*/

//Цикл Do While

/*echo "<br>" . "цикл Do While" . "<br>";
$i = 100;
do{
    echo $i . "<br>";
} while ($i < 10);*/

//Операторы в циклах
/*echo "<br>" . "Операторы в циклах" . "<br>";
for($el = 100; $el > 10; $el /= 2) {
    if($el < 15)
        break;

    if($el % 2 ==0)
        continue;

    echo $el . "<br>";
}*/

//Циклы и массивы

/*echo "<br>" . "Циклы и массивы" . "<br>";

$list = [5, 7, 3, 8, "some", 45.7];

for($i = 0; $i < count($list); $i++){
    echo  "Element $i: $list[$i]" . "<br>";
}*/

//циклы и ассоциативные массивы

echo "<br>" . "циклы и ассоциативные массивы" . "<br>";

$list = ["age" => 50, "name" => "Alex", "hobby" => "Football"];
$arr = [5, 6, 8, 9];

/*foreach ($list as $item => $value) {
    echo "Key: $item. Value: $value. " . "<br>";
}*/
foreach ($arr as $value) {
    echo "Value: $value. " . "<br>";
}

//функции

echo "<br>" . "Функции";
function info($sword) {
    echo "<br>$sword<br>";
}

function math($x, $y) {
    $res = $x + $y;
    return $res;
}

$res_1 = math(7, 6);
$res_2 = math(5, 6);

function summary($arr) {
    $summa = 0;
    foreach ($arr as $value) {
        $summa += $value;
    }

    return $summa;
}

$list = [5, 7, 3];
/*echo  "<br>" . summary($list). "<br>";
echo  summary([5, 2, 4]). "<br>";*/

/*info($res_1);
info($res_2);*/

//области видимости
function view() {
    global $x;
    $x = 0;
}

$x = 10;
/*view();
echo "<br>" . $x;*/

//static переменные - сохраняют свое значение при каждом вызове ф-ии
function click() {
    static  $count;
    $count++;
    echo  "<br>" . $count . "<br>";
}

click();
click();
click();