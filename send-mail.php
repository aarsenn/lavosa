<?php
$subject = 'Покупка клею';

$text = 'Ім\'я: ' . $_POST['firstname'] . '/n Прізвище: ' . $_POST['lastname'] . '/n Телефон: ' . $_POST['phone'] . '/n Пошта: '
 . $_POST['email'] . '/n Кількість мішків: ' . $_POST['bag_count'] . '/n Спосіб доставки: ' . $_POST['post'] . '/n Адрес доставки та відділення: '
 . $_POST['address'] . '/n Спосіб оплати: ' . $_POST['payment'];

mail('satusfeksion@gmail.com', $subject, $text);
mail('davidson@mail.ru', $subject, $text);

echo ('{ "status": 200 }');
?> 
