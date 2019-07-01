<?php $pageTitle = 'Массовая рассылка WhatsApp сообщений и SMS через сервис';
$pageDescription = '';
include_once('tpl/header.php'); ?>

	<main class="main">
		<section class="welcome" style="background-image: url('assets/images/welcome-bg.jpg');">
			<div class="wrap">
				<div class="welcome-content">
					<h1 class="welcome-title">Что такое APISender</h1>
					<p>Программный комплекс APISender для рассылок WhatsApp и SMS позволяет отправлять сообщения через собственные сим-карты и аккаунты WhatsApp.</p>
					<p>Также вы можете подключить свой сайт или другое ПО и отправлять сообщения по API.</p>
					<p>Для этого вам нужно зарегистрироваться на нашей платформе и скачать программу для Windows или Android.</p>
				</div>
				<div class="welcome-form">
					<?php include_once('tpl/form_top.php'); ?>
				</div>
			</div>
		</section>
		<section class="features">
			<div class="wrap">
				<h2 class="section-title">Преимущества программы APISender</h2>
				<p class="section-text">Скачайте бесплатно программу APISender и получите
					<br>следующие возможности:</p>
				<div class="features-body">
					<div class="features-item">
						<div class="features-item__container">
							<div class="features-item__icon">
								<img src="assets/images/icon-message.svg">
							</div>
							<p class="features-item__text">Бесплатно рассылать SMS и WhatsApp сообщения</p>
						</div>
					</div>
					<div class="features-item">
						<div class="features-item__container">
							<div class="features-item__icon">
								<img src="assets/images/icon-chat.svg">
							</div>
							<p class="features-item__text">Получать ответные сообщения от абонентов</p>
						</div>
					</div>
					<div class="features-item">
						<div class="features-item__container">
							<div class="features-item__icon">
								<img src="assets/images/icon-bd.svg">
							</div>
							<p class="features-item__text">Безопасно хранить и пополнять базу клиентов</p>
						</div>
					</div>
					<div class="features-item">
						<div class="features-item__container">
							<div class="features-item__icon">
								<img src="assets/images/icon-profile.svg">
							</div>
							<p class="features-item__text">Использовать несколько собственных аккаунтов WhatsApp одновременно</p>
						</div>
					</div>
					<div class="features-item">
						<div class="features-item__container">
							<div class="features-item__icon">
								<img src="assets/images/icon-desktop.svg">
							</div>
							<p class="features-item__text">Подключить несколько usb-модемов и отправлять SMS с компьютера</p>
						</div>
					</div>
				</div>
			</div>
			<div class="figures">
				<img class="figures__item" src="assets/images/figures.svg">
				<img class="figures__item" src="assets/images/figures.svg">
			</div>
		</section>

		<section class="programs">
			<div class="wrap">
				<h2 class="section-title">Программа для рассылки на <br>Android и Windows</h2>
				<p class="section-text">Выполните три простых шага, чтобы начать пользоваться сервисом бесплатной рассылки Freesender!</p>
				<div class="programs-body">
					<div class="programs-item">
						<h3 class="programs-item__title">Программа для рассылки SMS и WhatsApp на Windows</h3>
						<div class="programs-content">
							<ul>
								<li>- использовать несколько собственных аккаунтов WhatsApp одновременно</li>
								<li>- подключить несколько usb-модемов к компьютеру и отправлять через них SMS</li>
							</ul>
						</div>
						<img src="assets/images/program-desk.jpg">
					</div>
					<div class="programs-item">
						<h3 class="programs-item__title">Приложение для рассылки SMS на Android</h3>
						<div class="programs-content">
							<p>Приложение для рассылки SMS на Android не требует подключения к компьютеру, т.к. взаимодействует с платформой напрямую.</p>
							<ul>
								<li>- отправить только SMS через один или несколько подключенных смартфонов на Android</li>
								<li>- разослать СМС через смартфоны, поддерживающие 2 сим-карты</li>
							</ul>
						</div>
						<img src="assets/images/program-mob.jpg">
					</div>
				</div>
				<div class="registration__btn">
					<div class="registration__button">Зарегистрироваться</div>
				</div>
			</div>
		</section>

		<?php include_once('tpl/block_3_steps.php'); ?>

		<section class="tariffs">
			<div class="wrap">
				<h2 class="section-title">Тарифы</h2>
				<p class="section-text">Выполните три простых шага, чтобы начать пользоваться
					<br>сервисом бесплатной рассылки APIsender!</p>
				<table class="tariffs-table">
					<tr>
						<th></th>
						<th>WhatsApp</th>
						<th>SMS</th>
					</tr>
					<tr>
						<td>Скачивание и установка программы</td>
						<td>Бесплатно</td>
						<td>Бесплатно</td>
					</tr>
					<tr>
						<td>Абонентская плата</td>
						<td class="bold">790 руб.</td>
						<td class="bold">240 руб.</td>
					</tr>
					<tr>
						<td>Стоимость за 1 отправленное сообщение</td>
						<td>-</td>
						<td>-</td>
					</tr>
					<tr>
						<td>1-2999</td>
						<td>0,49 руб.</td>
						<td>0,29 руб.</td>
					</tr>
					<tr>
						<td>3000-9999</td>
						<td>0,39 руб.</td>
						<td>0,25 руб.</td>
					</tr>
					<tr>
						<td>10000-100000</td>
						<td>0,34 руб.</td>
						<td>0,22 руб.</td>
					</tr>
					<tr>
						<td>Свыше 100000</td>
						<td>0,22 руб.</td>
						<td>0,19 руб.</td>
					</tr>
					<tr>
						<td>Подключение ПО заказчика к ПО по API</td>
						<td>Бесплатно</td>
						<td>Бесплатно</td>
					</tr>
				</table>
				<div class="registration__btn">
					<div class="registration__button">Зарегистрироваться</div>
				</div>
			</div>
		</section>

		<section class="try" id="tryForm">
			<div class="wrap">
				<h2 class="section-title">Попробовать бесплатно</h2>
				<p class="section-text">Заполните форму регистрации и вы сможете пользоваться
					<br>сервисом бесплатной рассылки Freesender!</p>
				<div class="try-form">
					<?php include_once('tpl/form_bottom.php'); ?>
				</div>
			</div>
			<div class="figures">
				<img class="figures__item" src="assets/images/figures.svg">
				<img class="figures__item" src="assets/images/figures.svg">
			</div>
		</section>
	</main>
<?php include_once('tpl/footer.php');
