<?php $title = "Регистрация пользователя"; $page = 'signup'; include('../includes/header.php'); include_once ('../functions/reg.php'); ?>

<div class="signin">
  <div id="content" class="full-width sign-in-page">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="signin-form">
            <div class="heading">
              <h1><span>Регистрация</span></h1>
              <p class="info">Уже есть аккаунт? <a href="signin.php">Войти</a></p>
            </div>
            <form action="../../../pages/signup.php" method="POST">
              <div class="form-group">
                <label>Ваш Email</label>
                <input type="email" name="email" placeholder="you@example.com" class="form-control" value="<?php echo @$data['email'] ?>">
              </div>
              <div class="form-group">
                <label>Придумайте пароль</label>
                <div class="input-group">
                <input id="password" type="password" name="password" placeholder="Пароль" class="form-control" value="<?php echo @$data['password'] ?>"><div class="input-group-addon" id="s-h-pass"><span class="glyphicon glyphicon-eye-open" title="Показать пароль"></span></div>
              </div>
              </div>
              <div class="form-group">
                <label>Повторите пароль</label>
                <input id="password_2" type="password" name="password_2" placeholder="Повторите пароль" class="form-control">
              </div>
              <div class="form-group submit"><?php echo "$errors_code"; echo "$reg"; ?><br>
                <button type="submit" class="btn btn-primary" name="do_signup">Создать аккаунт и Войти →</button><label class="toggle">
             <input class="toggle__input" type="checkbox">
             <span class="toggle__label">
            <span class="toggle__text">Запомнить пароль</span>
           </span>
          </label><br><br><small>Нажимая на кнопку «Зарегистрироваться», я соглашаюсь с <a href="#">правилами сайта.</a></small>
              </div>
            </form>
            <div class="social-logins-up">
              <p>Быстрая регистрация!</p><a href="#" class="btn via-vk"><em class="fa fa-vk"></em></a><a href="#" class="btn via-fb"><em class="fa fa-facebook"></em></a><a href="#" class="btn via-tw"><em class="fa fa-twitter"></em></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<? include_once "../includes/footer.php"; ?>
