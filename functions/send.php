<?php
if(isset($_POST['submit'])){

$to = "work.deich@gmail.com"; /* кому отправляюттся сообщения */
$from = "no-reply@victim.kz";  /* от кого отправляются сообщения */

/* Указываем переменные, в которые будет записываться информация с формы */
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$error = array ();

if (strlen($_POST['subject']) > 5) { //проверка на количество символов
  $error[] = ('Укажите тему сообщения!');
}

if (strlen($_POST['message']) > 20) { //проверка на количество символов
  $error[] = ('Введите неменее 20 слов в сообщение!');
}



if (empty($error)) {
  /* Отправка сообщения, с помощью функции mail() */
  mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
  echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
  echo "<br /><br /><a href='http://victim.kz/'>Вернуться на сайт.</a>";
} else {
  echo '<div style="color: #F95959;">'.array_shift($error).'</div>';
  echo "<br /><a href='http://victim.kz/#fh5co-consult'>Вернуться к отправке сообщения.</a>";
}

$headers = "From: $from \r\n";
/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
$mail_to_myemail = "Здравствуйте!
Было отправлено сообщение с сайта!
Имя отправителя: $first_name
Фамилия отправителя: $last_name
E-mail: $email
Текст сообщения: $message
Чтобы ответить на письмо, создайте новое сообщение, скопируйте электронный адрес и вставьте в поле Кому.";
}
?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->

</script>
