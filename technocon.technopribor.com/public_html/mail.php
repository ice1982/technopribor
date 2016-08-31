<?php

require_once('_params.php');
//require_once('/src/lib/PHPMailer-master/class.phpmailer.php');

/**
 * [sendEmail description]
 * @param  [type] $from    [description]
 * @param  [type] $to      [description]
 * @param  [type] $subject [description]
 * @param  [type] $message [description]
 * @return [type]          [description]
 */

function sendEmail($from, $to, $subject, $message)
{
    if (is_array($to)) {
        $to = implode(',', $to);
    }


    return mail($to, $subject, $message, "Content-Type: text/html; charset=utf-8;\nFrom: $from");
}
$uploaddir = 'formFiles/';

$devider = end(explode('.', $_FILES['zayavka']['name']));

$FileName = date('YmdHis').'.'.$devider;

move_uploaded_file($_FILES['zayavka']['tmp_name'], $uploaddir . $FileName);


$message = '';
//$path = '/Users/citrusplus01/Sites/technopribor02.citrus-plus.ru/src/';
//$tmpPath = $_FILES['formFile']['tmp_name'];
//$fileName = $_FILES['formFile']['name'];

if ( (isset($_POST)) && (!empty($_POST)) ) {

    
//move_uploaded_file($tmpPath, $path . $fileName);


    $subject = 'С лендинга ' . $site . ' поступила заявка'; 

    $dump = array(
        'name' => false,
        'email' => false,
        'name' => false,
        'target' => false,
        'info' => false,
        'message' => false,
        'download' => false,
        'download_name' => false,
        'phone' => false,
        'description' => $subject,
    );
    

    if (isset($_POST['name']) && (!empty($_POST['name']))) {
        $dump['name'] = $_POST['name'];
    }

    if (isset($_POST['phone']) && (!empty($_POST['phone']))) {
        $dump['phone'] = $_POST['phone'];
    }
  
    if (isset($_POST['email']) && (!empty($_POST['email']))) {
        $dump['email'] = $_POST['email'];
    }
    
    if (isset($_POST['message']) && (!empty($_POST['message']))) {
        $dump['message'] = $_POST['message'];
    }
    
    if (isset($_POST['info']) && (!empty($_POST['info']))) {
        $dump['info'] = $_POST['info'];
    }
    
    if (isset($_POST['target']) && (!empty($_POST['target']))) {
        $dump['target'] = $_POST['target'];
    }
    
    if (isset($_POST['download_name']) && (!empty($_POST['download_name']))) {
        $dump['download_name'] = $_POST['download_name'];
    }
    
    if (isset($_POST['download']) && (!empty($_POST['download']))) {
        $dump['download'] = $_POST['download'];
    }

    $message .= 'С лендинга ' . $site . ' поступила заявка:<br><br>';

    foreach (array_filter($dump) as $key => $value) {
        $message .= '<b>' . htmlspecialchars($key) . ':</b> ' . htmlspecialchars($value) . '<br>';
    }

    if(!empty($_FILES['zayavka']['name'])){
        $message .= 'Ссылка на файл техзадания: <a href="' . $site . $uploaddir . $FileName .'">'. $FileName .'</a><br>';
    }

    if (sendEmail($from, $to, $subject, $message)) {
//        $counter = new YaMetrika($metrika_id); // Номер счётчика Метрики
//        $counter->hit(); // Вызов метода необходим для корректной привязки цели к визиту
//        $counter->reachGoal('FORM_SUBMIT');
        
        echo('Спасибо за заявку!');
        echo '<br>';
        if(isset($dump['download'], $dump['download_name'])){
            echo ' ' . '<a style="color:rgb(163, 212, 255);border-bottom:1px dotted;font-size:18px;" href="/files/' . $dump['download'] . '">' . $dump['download_name'] . '</a>';
        }
        die();
    } else {
        echo('Ошибка отправки сообщения!');
        die();
    }
} else {
    echo('Ошибка отправки сообщения2!');
}

die();

?>