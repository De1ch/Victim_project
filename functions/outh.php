<?php
  include_once "../db.php";

  $data = $_POST;
  if(isset($data['do_signin']))
   {
     $errors = array();
    $user = R::findOne('users', 'email = ?', array($data['email']));
    if ($user) {
      // ok
      if(password_verify($data['password'], $user->password)) {
          // all good, login
          $_SESSION['logged_user'] = $user;
          $successfully = '<div style="color: green;">Вы успешно вошли!</div>';
      } else {
          $errors[] = 'Пароль введен неверно!';
      }
    } else {
      $errors[] = 'Пользователь не найден!';
    }

    if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
          // -
        } else {
          $errors[] = 'Электронная почта указана не правильно!';
            }

    if ( !empty($errors)) {
      $errors_code = '<div style="color: #F95959;">'.array_shift($errors).'</div>';
   } if (isset  ($_SESSION['logged_user'])) {
     echo "string";
   }
}
 ?>
