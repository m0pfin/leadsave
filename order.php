<?php

// $url -  изменить на URL куда установлен скрипт
// 43 - строка изменить на ВАШ API ТОКЕН

$url = 'https://ВАШ_САЙТ.РУ/lead/handler.php';


if(isset($_POST['name'])){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => array('name' => $_POST['name'],'phone' => $_POST['phone'],'partners' => $_POST['partners']),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
}

function getIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $arIp = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $ip = $arIp[0];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function apiWebvorkV1NewLead($post, $ip, $offerId, $counter = 0)
{
    $token = 'ВАШ_API_KEY'; // Заменяем на свой из кабинета WEBVORK

    $url = 'http://api.webvork.com/v1/new-lead?token=' . rawurlencode($token)
        . '&ip=' . rawurlencode($ip)
        . '&offer_id=' . rawurlencode($offerId)
        . '&name=' . rawurlencode($post['name'])
        . '&phone=' . rawurlencode($post['phone'])
        . '&country=' . rawurlencode($post['country'])
        . '&utm_medium=' . rawurlencode($post['utm_medium'])
        . '&utm_campaign=' . rawurlencode($post['utm_campaign'])
        . '&utm_content=' . rawurlencode($post['utm_content'])
        . '&utm_term=' . rawurlencode($post['utm_term']);


    $json = file_get_contents($url);
    $data = json_decode($json, 1);

    if ($data['status'] != 'ok') {
        if ($counter < 5) {
            sleep(1);
            return apiWebvorkV1NewLead($post, $ip, $offerId, ++$counter);
        } else {
            return false;
        }
    }

    if ($data['status'] == 'ok') {
        return true;
    }
}

apiWebvorkV1NewLead($_POST, getIp(), 4);// offerId Заменяем на оффер лендинга

header("Location: success.php");
