<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>وبگو | ارسال ایمیل با کلاس PHPMailer و سایت گوگل</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- http://webgoo.ir -->
</head>
<body>
<?php
require_once('class.phpmailer.php');
$mail = new PHPMailer(true);
$mail->IsSMTP();
try {
  $mail->Host       = "smtp.gmail.com"; // آدرس SMTP سایت گوگل        
  $mail->SMTPAuth   = true;                  // استفاده از SMTP authentication
  $mail->SMTPSecure = "tls";                 // استفاده از پروتکل امن    
  $mail->Port       = 587;                   // درگاه خروجی سرویس ایمیل گوگل  
  $mail->Username   = "sajjadhosaini1"; // نام کاربری حساب گوگل
  $mail->Password   = "!&%)$))))";        // کلمه عبور حساب گوگل
  $mail->AddReplyTo('sajjadhosaini1@gmail.com', 'Dear Sajjad'); // افزودن پاسخ به ارسال کننده
  $mail->AddAddress('sajjadhosaini@gmail.com', 'sajjadhosaini'); // تنظیم آدرس گیرنده ایمیل
  $mail->SetFrom('sajjadhosaini1@gmail.com', 'Sajjad Hosaini'); // تنظیم قسمت ارسال کننده ایمیل
  $mail->Subject = 'PHPMailer تست'; // موضوع ایمیل
  $mail->AltBody = 'برنامه شما از این ایمیل پشتیبانی نمی کند، برای دیدن آن، لطفا از برنامه دیگری استفاده نمائید'; // متنی برای کاربرانی که نمی توانند ایمیل را به درستی مشاهده کنند
  $mail->CharSet = 'UTF-8'; // یونیکد برای زبان فارسی
  $mail->ContentType = 'text/html'; // استفاده از html  
  $mail->MsgHTML('<html>
<body>
این یک <font color="#CC0000"><a href="http://deira.technation.af/execute/confirm_email.php?key=">برای فعال سازی کلیک کنید</a><?php $key\n\n ?></font> است!
</body>
</html>'); // متن پیام به صورت html
  //$mail->AddAttachment('images/phpmailer.gif'); // ضمیمه کردن فایل
  $mail->Send(); // ارسال
  echo "پیام با موفقیت ارسال شد\n";
} 
catch (phpmailerException $e) {
    echo $e->errorMessage(); // پیام خطا از phpmailer
} 
catch (Exception $e) {
    echo $e->getMessage(); // سایر خطاها
}
?>
</body>
</html>