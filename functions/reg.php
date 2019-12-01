<?php
  include_once "../db.php";

  $data = $_POST;
  if(isset($data['do_signup']))
   {
     // reg
    $errors = array ();
    if (trim($data['email']) == '' ) {
      $errors[] = 'Введите адрес электронной почты!';
    }

    if (R::count('users', "email = ?", array($data['email'])) > 0 ) {
      $errors[] = 'Пользователь с такой почтой уже зарегистрирован!';
    }

    if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
      // email valid
      }
        else {
      $errors[] = 'Электронная почта указана не правильно!';
    }

    if (trim($data['password']) == '' ) {
      $errors[] = 'Введите пароль!';
    }

    if ($data['password_2'] != $data['password']) {
      $errors[] = 'Повторный пароль введен неверно!';
    }

    if (strlen($data['password']) < 4) { //проверка на количество символов
      $errors[] = 'Пароль должен состоять минимум из 4х символов!';
    }

    if (strlen($data['password']) > 20) { //проверка на количество символов
      $errors[] = 'Пароль должен состоять максимум из 20 символов!';
    }

    if (empty($errors)) {
      // ok, reg
      $user = R::dispense('users');
      $user-> mail = $data['email'];
      $user-> password = password_hash($data['password'], PASSWORD_DEFAULT);
      $user-> join_date = date("Y-m-d H:i:s");
      R::store($user);
      $reg = '<div style="color: green;">Регистрация прошла успешно!</div>';
    } else {
      $errors_code = '<div style="color: #F95959;">'.array_shift($errors).'</div>';
    }
   }
 ?>
