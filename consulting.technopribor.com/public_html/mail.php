<?php

require_once('_params.php');


/**
 * [sendEmail description]
 * @param  [type] $from    [description]
 * @param  [type] $to      [description]
 * @param  [type] $subject [description]
 * @param  [type] $message [description]
 * @return [type]          [description]
 */
function sendEmail($from_name, $from_email, $to, $subject, $message)
{
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers = "From:". $from_email ;

    if (is_array($to)) {
        $to = implode(',', $to);
    }

    return mail($to,
        $subject,
        'From: ' . $from_name . '(' . $from_email . ')' . "\r\n" .
        "\n\n" . $message,
    $headers );
}

$message = '';

$checkit = "/(content-type|bcc:|cc:|to:)/i";
foreach ( $_POST as $key => $val ) {
    if ( preg_match( $checkit, $val ) ) {
        exit;
    }
}

if ( (isset($_POST)) && (!empty($_POST)) ) {

    $subject = 'С лендинга ' . $site . ' поступила заявка';

    $dump = [];
    if (isset($_POST['phone'])) {
        $dump['phone'] = [
            'label' => 'Телефон',
            'value' => $_POST['phone'],
        ];
    }
    if (isset($_POST['name'])) {
        $dump['name'] = [
            'label' => 'Имя',
            'value' => $_POST['name'],
        ];
    }
    if (isset($_POST['message'])) {
        $dump['message'] = [
            'label' => 'Сообщение',
            'value' => $_POST['message'],
        ];
    }
    if (isset($_POST['info'])) {
        $dump['info'] = [
            'label' => 'Что за заявка',
            'value' => $_POST['info'],
        ];
    }
    if (isset($_POST['target'])) {
        $dump['target'] = [
            'label' => 'Расположение формы',
            'value' => $_POST['target'],
        ];
    }
    if (isset($_POST['city'])) {
        $dump['city'] = [
            'label' => 'Город',
            'value' => $_POST['city'],
        ];
    }

    $message .= 'С лендинга ' . $site . ' поступила заявка:<br><br>';

    foreach ($dump as $value) {
        $message .= '<b>' . htmlspecialchars($value['label']) . ':</b> ' . htmlspecialchars($value['value']) . '<br>';
    }

    if (sendEmail($from_name, $from_email, $to, $subject, $message)) {
        exit('Спасибо за заявку!');
    } else {
        exit('Ошибка отправки сообщения!');
    }
} else {
    exit('Ошибка отправки сообщения!');
}

?>