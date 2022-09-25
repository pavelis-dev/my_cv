<?php

    // получаем данные с элементов формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];

    // обрабатываем полученные данные
    $name = htmlspecialchars($name);  //преобразование символов с сущности (мнемоники)
    $email = htmlspecialchars($email);
    $text = htmlspecialchars($text);

    $name = urldecode($name);  // декодирование URL
    $email = urldecode($email);
    $text = urldecode($text);

    $name = trim($name);  // удаление пробельных символов с обеих сторон
    $email = trim($email);
    $text = trim($text);

    // отправляем данные на почту
    if (mail("pavelis_dev@mail.ru",
             "Новое письмо с сайта",
             "Имя: ".$name."\n".
             "Email: ".$email."\n".
             "Текст: ".$text,
             "From: no-reply@mydomain.ru \r\n")
    
    ) {
        echo ('Письмо успешно отправлено!');
    }

    else {
        echo ('Есть ошибка, проверьте данные...');
    }

?>