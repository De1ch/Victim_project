<?php include_once"functions/send.php" ?>

<div id="fh5co-consult">
  <div class="video fh5co-video" style="background-image: url(images/video.jpg);">
  </div>
  <div class="choose animate-box">
    <div class="fh5co-heading">
      <h2>Бесплатная консультация</h2>
    </div>
    <form action="functions/send.php" method="post">
      <div class="row form-group">
        <div class="col-md-6">
          <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Ваше имя">
        </div>
        <div class="col-md-6">
          <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Ваша фамилия">
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <input type="text" id="email" name="email" class="form-control" placeholder="Адрес электронной почты">
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <input type="text" id="subject" name="subject" class="form-control" placeholder="Тема сообщения">
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <textarea name="message" id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Введите сообщение"></textarea>
        </div>
      </div>
      <div class="form-group"><?php echo "$error"; ?>
        <input type="submit" name="submit" value="Отправить сообщение" class="btn btn-primary">
      </div>

    </form>
  </div>
</div>
