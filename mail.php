<?php
    $to = 'aheichyk@tut.by';
    
    $firstname = $_POST["name"];
    
    $phone= $_POST["phone"];

    $subject = "Новая заявка с сайта minik.by";

    $headers = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    $message ='<table style="width:100%">
        <tr>
            <td>name: '.$firstname.'  '.$laststname.' </td>
        </tr>
        <tr><td>phone: '.$phone.' </td></tr>
        
    </table>';

    if (@mail($to, $subject, $message, $headers))
    {
        echo 'Ваше сообщение отправлено.';
    }else{
        echo 'Ошибка!';
    }

?>
