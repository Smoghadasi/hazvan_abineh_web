<?php

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['services']);
    $message = htmlspecialchars($_POST['message']);
   
    // Prepare the data to be saved
    $data = "نام: $name \n  ایمیل: $email \n تلفن: $phone \n  خدمات: $service \n  متن پیام: $message \n -------------- \n";

    // Save to a text file
    if (file_put_contents('contactform.txt', $data, FILE_APPEND)) {
        echo "پیام شما با موفقیت ارسال شد";
    } else {
        echo "مشکلی رخ داده است";
    }
} else {
    echo 'درخواست شما معتبر نیست';
} 
?>
