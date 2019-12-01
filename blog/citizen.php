<?php $title = "Victim - Гражданам"; $page = 'blog'; include('../includes/header.php'); $news = getNews; ?>

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(../images/img_bg_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner desc">
		   					<h2 class="heading-section">Полезная информация для граждан Республики Казахстан</h2>
		   					<p class="fh5co-lead">Непрерывный процесс воспитания и обучения, осуществляемый в целях нравственного, интеллектуального, культурного, физического развития и формирования профессиональной компетентности.</p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="citizen/Gosudarstvennaya-molodezhnaya-politika-Razvitiye-molodezhi.php"><img class="img-responsive" src="../images/young.jfif" alt=""></a>
						<div class="blog-text">
							<span class="posted_on">21 сентября 2019</span>
							<h3><a href="citizen/Gosudarstvennaya-molodezhnaya-politika-Razvitiye-molodezhi.php">Государственная молодежная политика. Развитие молодежи.</a></h3>
							<p>Сегодня молодежь – это одно из самых организованных социально-активных слоев населения, она объективно является генератором...</p>
							<a href="citizen/Gosudarstvennaya-molodezhnaya-politika-Razvitiye-molodezhi.php" class="btn btn-primary">Читать далее..</a>
						</div>
					</div>
				</div>
						<?php
							for ($i=0; $i < count($news); $i++) {
								echo '<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="citizen/Gosudarstvennaya-molodezhnaya-politika-Razvitiye-molodezhi.php"><img class="img-responsive" src="../images/'.$news[$i]["id"].'.jfif" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">21 сентября 2019</span>
								<h3><a href="citizen/Gosudarstvennaya-molodezhnaya-politika-Razvitiye-molodezhi.php">'.$news[$i]["id"].'</a></h3>
								<p>Сегодня молодежь – это одно из самых организованных социально-активных слоев населения, она объективно является генератором...</p>
								<a href="citizen/Gosudarstvennaya-molodezhnaya-politika-Razvitiye-molodezhi.php" class="btn btn-primary">Читать далее..</a>
						 </div>
						</div>
					</div>';
							}
						 ?>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="../images/project-3.jpg" alt=""></a>
						<div class="blog-text">
							<span class="posted_on">Nov. 15th</span>
							<h3><a href="#">Business Law</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="theme1/text_stati.php" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="../images/project-1.jpg" alt=""></a>
						<div class="blog-text">
							<span class="posted_on">Nov. 15th</span>
							<h3><a href="#">Legal Consultation</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="../images/project-7.jpg" alt=""></a>
						<div class="blog-text">
							<span class="posted_on">Nov. 15th</span>
							<h3><a href="#">Criminal Case</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="../images/project-6.jpg" alt=""></a>
						<div class="blog-text">
							<span class="posted_on">Nov. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<h3><a href="#">Business Law</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<? include_once "../includes/advice.php"; ?>

	<? include_once "../includes/footer.php"; ?>
