<?php $pageTitle = 'Партнерская программа';
$pageDescription = '';
include_once('../tpl/header.php'); ?>

<main class="main">
	<section class="partners">
		<div class="wrap">
			<h2 class="section-title">Партнерская программа</h2>
			<div class="partners-content">
				<h3>Реферальная программа</h3>
				<p>Мы готовы делиться частью своей прибыли на условиях партнерства. Для этого вам необходимо заполнить простую форму, расположенную ниже и в поле "Промокод" указать слово Партнер. В ответ вам придет реферальная ссылка. От всех платежей совершенных
					клиентами, которые зарегистрируются по этой ссылке вы будете получать 20%</p>
				<h3>Программа для реселлеров</h3>
				<p>Для партнеров, желающих построить самостоятельный бизнес на продаже программы FreeSender мы готовы предоставить полный или частичный пакет решений "под ключ":</p>
				<ul>
					<li><span>—</span> отдельный сайт для продажи программы FreeSender с многоязычной поддержкой</li>
					<li><span>—</span> возможность подключать своих рефералов</li>
					<li><span>—</span> специальная цена на программу FreeSender для возможности реализации собственной ценовой политики</li>
					<li><span>—</span> настройка корпоративной почты</li>
					<li><span>—</span> настройка корпоративной виртуальной телефонии</li>
					<li><span>—</span> настройка аккаунта в системе amoCRM для лидогенерации и обслуживания заявок</li>
					<li><span>—</span> настройка HelpDesk для поддержки клиентов</li>
					<li><span>—</span> настройка аккаунтов в соц-сетях</li>
					<li><span>—</span> настройка чат-ботов в мессенджерах</li>
					<li><span>—</span> настройка рекламных и пр. компаний по привлечению новых клиентов</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="try">
		<div class="wrap">
			<h2 class="section-title">Попробовать бесплатно</h2>
			<p class="section-text">Заполните форму регистрации и вы сможете пользоваться
				<br>сервисом бесплатной рассылки Freesender!</p>
			<div class="try-form">
				<form class="registration">
					<input class="registration__input" type="text" placeholder="Имя" name="username" required>
					<input class="registration__input input-phone" type="text" name="phone" placeholder="+7 (___) ___ - __ - __" required>
					<input class="registration__input" type="email" name="email" placeholder="E-mail" required>
					<input class="registration__input" type="text" name="promo" placeholder="Промокод">
					<div class="registration-info"><a class="registration-info__login" href="#">Войти</a><a class="registration-info__forget" href="#">Забыли пароль?</a>
					</div>
					<div class="checkbox">
						<label class="toggleButton">
							<input type="checkbox" name="policy" required>
							<div>
								<svg viewBox="0 0 44 44">
									<path d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758" transform="translate(-2.000000, -2.000000)"></path>
								</svg>
							</div>
							<p>Я ознакомился с <a href="#">пользовательским соглашением</a>
							</p>
						</label>
					</div>
					<div class="registration__btn">
						<input class="registration__button" type="submit" value="Зарегистрироваться">
					</div>
				</form>
			</div>
		</div>
		<div class="figures">
			<img class="figures__item" src="assets/images/figures.svg">
			<img class="figures__item" src="assets/images/figures.svg">
		</div>
	</section>
</main>

<?php include_once('../tpl/footer.php');
