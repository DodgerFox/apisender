<?php $pageTitle = 'Техническая поддержка для';
$pageDescription = '';
include_once('../tpl/header.php'); ?>

		<main class="main">
			<section class="support">
				<div class="wrap">
					<h2 class="section-title">Инструкции</h2>
					<div class="support-body">
						<a class="support-item" href="//wiki.freesender.net/wiki/Установка_и_обновление_программы" target="_blank">
							<img src="/assets/images/icon-gear.svg">
							<p>Установка</p>
						</a>
						<a class="support-item green" href="//wiki.freesender.net/wiki/Установка_и_обновление_программы" target="_blank">
							<img src="/assets/images/icon-up.svg">
							<p>Обновления</p>
						</a>
						<a class="support-item orange" href="//wiki.freesender.net/wiki/Оплата" target="_blank">
							<img src="/assets/images/icon-pay.svg">
							<p>Оплата</p>
						</a>
						<a class="support-item violet" href="//wiki.freesender.net/wiki/Подключение_аккаунта_WhatsApp" target="_blank">
							<img src="/assets/images/icon-whats.svg">
							<p>Подключение WhatsApp</p>
						</a>
						<a class="support-item" href="//wiki.freesender.net/wiki/%D0%9E_%D1%80%D0%B0%D1%81%D1%81%D1%8B%D0%BB%D0%BA%D0%B0%D1%85_%D0%B2_WhatsApp" target="_blank">
							<img src="/assets/images/icon-send.svg">
							<p>Отправка WhatsApp</p>
						</a>

						<a class="support-item red" href="//wiki.freesender.net/wiki/Подключение_модема_и_SIM-карты" target="_blank">
							<img src="/assets/images/icon-router.svg">
							<p>Подключение модема и SIM-карты</p>
						</a>
						<a class="support-item green" href="//wiki.freesender.net/wiki/Отправка_СМС" target="_blank">
							<img src="/assets/images/icon-mess.svg">
							<p>Отправка СМС</p>
						</a>
						<a class="support-item orange" href="//wiki.freesender.net/wiki/Отчет_о_рассылках" target="_blank">
							<img src="/assets/images/icon-list.svg">
							<p>Отчет о рассылках</p>
						</a>
					</div>
					<p class="support-text">Ответы на остальные вопросы вы можете узнать в <a href="#">нашем блоге</a>
					</p>
				</div>
			</section>

			<section class="feedback">
				<div class="wrap">
					<h2 class="section-title">Если вы не нашли ответов на вопросы, <br>обратитесь к нам, заполнив форму:</h2>
					<p class="section-text">Наши специалисты свяжутся с вами в ближайшее время</p>
					<div class="feedback-form">
						<form class="registration form-feedback">
							<input class="registration__input" type="text" name="user_name" placeholder="Имя">
							<input class="registration__input" type="text" name="email" placeholder="E-mail" required="">
							<input class="registration__input" type="text" name="platformLOGIN" placeholder="Ваш логин в системе">
							<textarea class="registration__textarea" placeholder="Текст сообщения" name="message" required=""></textarea>

							<input type="hidden" name="project_id" value="1158193">
							<input type="hidden" name="event_type_id" value="1060471">
							<input type="hidden" name="form_title" value="Техподдержка">
							<input type="hidden" name="form_url" value="">

							<div class="checkbox">
								<label class="toggleButton">
									<input type="checkbox" name="policy">
									<div>
										<svg viewBox="0 0 44 44">
											<path d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758" transform="translate(-2.000000, -2.000000)"></path>
										</svg>
									</div>
									<p>Я согласен с <a href="/policy/">условиями обработки</a> персональных данных</a></p>
								</label>
							</div>
							<div class="registration__btn">
								<input class="registration__button" type="submit" value="Зарегистрироваться">
							</div>
						</form>
					</div>
				</div>
			</section>
		</main>

<?php include_once('../tpl/footer.php');
