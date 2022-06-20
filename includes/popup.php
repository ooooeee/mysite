<div id="popup" class="popup">
			<div class="popup_body">
				<div class="popup_content">
					<a href="#header" class="popup__close close-popup">X</a>
					<div class="popup_title">Оставьте заявку</div>
					<!-- <form action="/feedback/processing.php" class="popup_form" method="post"> -->
					<form action="handle_form.php" class="popup_form" method="post" enctype="multipart.form-data" novalidate>
						<fieldset>
							<label> Ваше имя: <input name="name" type="text" class="popup_input" placeholder="Введите ваше имя" required></label>
							<label> Ваш email:<input name="email" type="email" class="popup_mail" placeholder="Введите ваш email" required></label>
							<label> текст сообщения:</label>
							<label><textarea name="message" id="app_area" cols="60" rows="10" placeholder="Введите описание вашего проекта" required></textarea></label>
							<div id="checkbox" class="checkbox">
								<input if="formAgreemen" checked type="checkbox" type="checkbox" name="agreement" type="checkbox_input _req">
								<label for="formAgreemen" class="form_label"><span>Я даю своё согласие на обработку персональных жанных в соответствии с <a href="">Условиями</a>*</span></label>
							</div>
							<button type="submit" class="grow_skew_forward">Отправить</button>
							<button type="reset" class="grow_skew_forward">Очистить</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>