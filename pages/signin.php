<?php $title = "Авторизация пользователя"; $page = 'signin'; include('../includes/header.php'); include_once ('../functions/outh.php'); ?>

<div class="signin">
<div id="content" class="sign-in-page">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="login-form">
          <div class="heading">
            <h1>Войти</h1>
            <p>Нет аккаунта? <a href="signup.php">Создать</a></p>
          </div>
          <form action="../../../pages/signin.php" method="POST">
            <div class="form-group">
              <label>Ваш Email</label>
              <input type="text" placeholder="Email" name="email" class="form-control" value="<?php echo @$data['email'] ?>">
            </div>
            <div class="form-group">
              <label>Ваш пароль</label>
              <div class="input-group">
              <input id="password" type="password" name="password" placeholder="Пароль" class="form-control" value="<?php echo @$data['password'] ?>"><div class="input-group-addon" id="s-h-pass"><span class="glyphicon glyphicon-eye-open" title="Показать пароль"></span></div>
            </div>
            </div>
            <div class="form-group submit"><?php echo "$errors_code"; echo "$successfully"; ?><br>
              <button type="submit" class="btn btn-primary" name="do_signin">Войти →</button><label class="toggle">
           <input class="toggle__input" type="checkbox">
           <span class="toggle__label">
          <span class="toggle__text">Запомнить пароль</span>
         </span>
        </label>
            </div>
          </form>
          <div class="links"><a href="recover.php">Забыли пароль?</a></div>
          <div class="social-logins">
            <p>Быстрый вход!</p><a href="<?php echo 'https://oauth.vk.com/authorize?client_id='.$id_app.'&redirect_uri='.$url_script.'&response_type=code'; ?>" target="_blank" class="btn via-vk" title="Вконтакте"><em class="fa fa-vk"></em></a><a href="#" class="btn via-fb" title="Facebook"><em class="fa fa-facebook"></em></a><a href="#" class="btn via-tw" title="Twitter"><em class="fa fa-twitter"></em></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<? include_once "../includes/footer.php"; ?>
