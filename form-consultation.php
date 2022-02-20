<?
if (!isset($_GET['ajax'])) {
    echo 'Произошла неизвестная ошибка';
    die();
}
?>
<noindex>
<div class="col-md-12 s-modal">
    <div class="s-modal__row row">
        <h3>Получить консультацию эксперта</h3>
        <div class="s-modal__descr">
            Оставьте заявку и получите консультацию <br>уже сегодня
        </div>
    </div>
    <div class="row">
    <form class="s-form__form" action="" method="POST" id="sofyno-bottom-form">
            <form class="s-form__form" action="" method="POST" id="sofyno-bottom-form">
                <div class="s-form__row">
                    <input class="s-form__input" type="text" placeholder="Ваше имя" name="NAME">
                </div>
                <div class="s-form__row">
                    <input class="s-form__input" name="PHONE" type="tel" placeholder="*Ваш телефон" required>
                    <input class="s-form__input" name="EMAIL" type="email" placeholder="Ваш email">
                </div>
                <div class="s-form__row ">
                    <div class="s-form__file s-form__file--modal">
                        <div class="s-form__file-annotation">Есть проект? <br>Рассчитаем смету!</div>
                        <label class="s-form__label s-button s-button--dark s-button--file s-button--wide" for="s-form__file2">Приложить файл</label>
                    </div>
                </div>
                <div class="s-form__row">
                    <button type="submit" name="submit" class="s-form__submit s-button is-blicked" title="Отправить" value="Отправить">Отправить</button>
                </div>
                <div class="s-form__row">
                    <div class="s-form__policy s-form__policy--center">
                        Нажимая на кнопку, вы соглашаетесь с Политикой обработки персональных данных.
                    </div>
                </div>
                <div class="s-form__empty">
                    <input type="hidden" value="Получить консультацию специалиста" name="TYPE">
                    <input type="file" class="s-form__input s-form__file-button" id="s-form__file2" placeholder="Ваш email" title="Приложить файл" name="FILE">
                </div>

            </form>
        </div>
</div>
<script>
    $("input[type='tel']").inputmask("+7(999)999-99-99",{
	    oncomplete: function(){ },
	    onincomplete: function(){ $(this).val(""); },
	    oncleared: function(){ $(this).val(""); },
    });
</script>
</noindex>
