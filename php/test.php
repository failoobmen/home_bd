<?php

$name = $_GET['name'];
$second_name = $_GET['second_name'];
$group = $_GET['group'];
$birthday = $_GET['birthday'];
$git = $_GET['git'];


echo "Ваше имя: ".$name."<br>Ваша фамилия: ".$second_name."<br>Ваша группа: ".$group."<br>Ваша дата рождения: ".$birthday."<br>Ссылка на ваш гит: <a href='".$git."' target='_blank'>".$git."</a>";
?>