<?php $pageTitle = 'Бесплатная СМС рассылка от';
$pageDescription = '';
include_once('../tpl/header.php'); ?>

	<main class="main">
		<section class="welcome" style="background-image: url('/assets/images/welcome-bg.jpg');">
			<div class="wrap">
				<div class="welcome-content">
					<h1 class="welcome-title">Рассылка СМС сообщений бесплатно</h1>
					<p>Рассылка SMS сообщений возможна через программу для Windows или приложение для Android.</p>
					<p>Подключение и настройка обоих версий программ не требует специальных знаний.</p>
					<p>Скачайте бесплатно и начинайте отправлять СМС сразу после подключения.</p>
				</div>
				<div class="welcome-form">
					<?php include_once('../tpl/form_top.php'); ?>
				</div>
			</div>
		</section>

		<section class="sms">
			<div class="wrap">
				<h2 class="section-title">Преимущества СМС рассылки</h2>
				<ul class="sms-list">
					<li>Рассылки WhatsApp - это возможность массово отравлять мультимедийные сообщения клиентам вашего бизнеса.</li>
					<li>В России насчитывается более 40 млн активных пользователей мессенджера - это более 60% от абонентов сотовой связи.</li>
					<li>В отличии от традиционных SMS, вы можете отправлять вместе с текстом: картинки, видео и аудио-файлы, ссылки, гео-метки и прочие вложения. В одном сообщении вы можете уместить 1000 символов текста, включая имодзи.</li>
				</ul>
			</div>
			<div class="figures">
				<img class="figures__item" src="assets/images/figures.svg">
				<img class="figures__item" src="assets/images/figures.svg">
			</div>
		</section>

		<?php include_once('../tpl/block_3_steps.php'); ?>

		<section class="try">
			<div class="wrap">
				<h2 class="section-title">Попробовать бесплатно</h2>
				<p class="section-text">Заполните форму регистрации и вы сможете пользоваться
					<br>сервисом бесплатной рассылки Freesender!</p>
				<div class="try-form">
					<?php include_once('../tpl/form_bottom.php'); ?>
				</div>
			</div>
			<div class="figures">
				<img class="figures__item" src="assets/images/figures.svg">
				<img class="figures__item" src="assets/images/figures.svg">
			</div>
		</section>
	</main>

<?php include_once('../tpl/footer.php');
