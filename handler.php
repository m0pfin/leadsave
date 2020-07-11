<?php
/**
 * Created by PhpStorm.
 * User: m0pfin
 * Date: 11.07.2020
 * Time: 19:22
 */
include 'include/db.php';

if(isset($_POST['name'])){

    //принимаем данные из POST
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $partners = $_POST['partners'];
    $subid = $_POST['subid'];

    // записываем в БД
    $db->execute("INSERT INTO `lead`(`name`, `phone`, `partners`, `status`, `dates`, `subid`) VALUES ('$name', '$phone', '$partners', '1', NOW(), '$subid')");
}
