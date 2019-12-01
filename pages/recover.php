<?php $title = "Регистрация пользователя"; $page = 'signup'; include('../includes/header.php'); ?>

<?php

    include_once "../db.php";



if(isset($_POST['do_recover'])){
    $email = $_POST['email'];
    //Если email существует, то проверяем есть ли он в нашей базе
    if(emailValid($_POST['email'])){
        //Запрос на выборку аккаунта для восстановления
        $check = $pdo->prepare("SELECT * FROM `users` WHERE `email` = '".$email."'");
        if( $check->execute()){
            $rows = $check->fetchAll(PDO::FETCH_ASSOC);

            if(!empty($rows)){
                /*функция находится в другом файле, взял с оф сайта, для генерации hash*/
                $hash = RandomToken();
                /*вставляю в таблицу данные если все хорошо*/
                $otp = $pdo->prepare("INSERT INTO `do_recover` SET email = :email, hash = '".$hash."'");
                $otp->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
                $otp->execute(); /*Забыл запрос выполнить, и за этого была запара, если бы не это, уже давно получилось бы сделать)))*/
        //Отправляем письмо на почту для восстановления
                $title = 'Вы запросили восстановление пароля на site.ru';
                $message = '
               Здравствуйте, Чтобы сменить ваш пароль, пройдите по этой ссылке:
               '.$host.'?go=restore_new_pass&key='.$hash.'';
                sendMessageMail($email, $mail_autor, $title, $message);
                echo 'отправлено письмо '.$_POST['email'];
            }else{
                echo 'no_email';
            }
        }else{
            echo 'что то не так';
        }
    }else{
        echo 'не коректен email';
    }
}



 ?>

<div class="signin"><br><br>
  <div id="content" class="full-width sign-in-page">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="signin-form">
            <div class="heading">
              <h1><span>Восстановление пароля</span></h1>
              <p class="info">Уже есть аккаунт? <a href="signin.php">Войти</a></p>
            </div>
            <form action="../../../pages/recover.php" method="POST">
              <div class="form-group">
                <label>Ваш Email</label>
                <input type="email" name="email" placeholder="you@example.com" class="form-control" value="<?php echo @$data['email'] ?>">
              </div>
              <div class="form-group submit"><?php echo "$errors_code"; echo "$reg"; ?><br>
                <button type="submit" class="btn btn-primary" name="do_recover">Восстановить пароль →</button> <br><br>
              </div>
            </form>
            <div class="social-logins-up">
              <p>Быстрый вход!</p><a href="#" class="btn via-vk"><em class="fa fa-vk"></em></a><a href="#" class="btn via-fb"><em class="fa fa-facebook"></em></a><a href="#" class="btn via-tw"><em class="fa fa-twitter"></em></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<? include_once "../includes/footer.php"; ?>
