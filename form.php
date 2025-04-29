<?php
// Обработка формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    echo "Спасибо, $name! Ваше сообщение: $message";
}
?>
