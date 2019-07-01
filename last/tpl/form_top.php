<form class="registration" id="regform">
	<input class="registration__input" type="text" placeholder="Имя" name="first_name">
	<input class="registration__input input-phone" type="text" name="phone" placeholder="+7 (___) ___ - __ - __" required="">
	<input class="registration__input" type="email" name="email" placeholder="E-mail" required="">
	<input class="registration__input" type="text" name="login" value="" style="display: none;">
	<input type="hidden" name="password" value="">
	<input class="registration__input" type="text" name="promo" placeholder="Промокод">
	<div class="checkbox">
		<label class="toggleButton">
			<input type="checkbox" name="policy">
			<div>
				<svg viewBox="0 0 44 44">
					<path d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758" transform="translate(-2.000000, -2.000000)"></path>
				</svg>
			</div>
			<p>Я ознакомился с <a href="/policy/">пользовательским соглашением</a>
			</p>
		</label>
	</div>
	<div class="registration__btn">
		<input class="registration__button" type="submit" value="Зарегистрироваться">
	</div>
</form>
