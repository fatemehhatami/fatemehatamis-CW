<?php

$to = 'username <fatemehatami1381@gmail.com>';


$subject = 'ایمیل ساده';


$body = 'سلام، این ایمیل جهت تست ارسال شده است!';


$headers = 'From: yourname <youraccount@example.com>' . "\r\n" .
    'Reply-To: yourname <youraccount@example.com>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


if(mail($to, $subject, $body, $headers)) {
    echo 'ایمیل شما با موفقیت ارسال شد';
} else {
    echo 'خطا در ارسال ایمیل! تنظیمات سرور شما از این امکان پشتیبانی نمی کند';
}
?>