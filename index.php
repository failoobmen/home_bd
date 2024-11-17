<?php
// Подключение файла соединения с БД
include_once 'db.class.php';

// хост БД
define('db_host','127.0.0.1');

// Имя БД
define('db_name','matsievskij');

// Пользователь БД
define('db_user','admin');

// Пароль БД
define('db_pass','admin_password');

// Обявление класса для подключения к бд
$db = new DB_class(db_host,db_name,db_user,db_pass);

$query = $db->select(true,"*","matsievskij");
print_r($query);
?>
