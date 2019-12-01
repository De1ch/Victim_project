<?php $title = "Victim - Государственная молодежная политика."; $page = 'blog'; include('../../includes/header.php'); $files = $_SERVER['DOCUMENT_ROOT']."../../Gosudarstvennaya-molodezhnaya-politika-Razvitiye-molodezhi.txt"; ?>



<div id="fh5co-started" style="background-image:url(../../images/img_bg_2.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row animate-box">
      <div class="col-md-8 col-md-offset-2 text-center fh5co-heading-blog">
        <h2>Государственная молодежная политика. Развитие молодежи. </h2>
        <p>Сегодня молодежь – это одно из самых организованных, социально-активных слоев населения, она объективно является генератором новых идей, жизненной силой и энергией общества. Молодежь не просто будущее страны, это ее настоящее.</p>
        <div class="description-blog">
        <i class="fa fa-calendar-o" aria-hidden="true"> 21.09.2019</i> <br> <i class="post-views-icon icon-eye"> <?php include_once "../../includes/views.php"; ?></i>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  $news = getNews(1);
 ?>

 <?php  ?>

	<?php include_once "../../includes/advice.php"; ?>

	<?php include_once "../../includes/footer.php"; ?>
