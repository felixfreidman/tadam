<?php
// Объявляю сразу все важные поля
$phone_num = get_field('phone_num', 'option');
$email_to = get_field('email_to', 'option');
$instagram = get_field('instagram', 'option');
$form_header = get_field('form_header');
$apply_text = get_field('apply_text');
$form_subheader = get_field('form_subheader');
?>
<footer class="footer">
    <div class="footer-row">
        <div class="logo-container">
            <div class="logo"> <img src=<?php echo get_template_directory_uri() . '/assets/images/content/logo.svg' ?>
                    alt="Company Logo"></div>
            <div class="logo-caption">Tadam</div>
        </div>
        <div class="navigation"> <a class="navigation-link" href="#toAbout">О проекте</a><a class="navigation-link"
                href="#toProcess">Как работает</a><a class="navigation-link" href="#toAbilities">Возможности</a><a
                class="navigation-link" href="#toHelp">FAQ</a></div>
        <div class="contacts"> <a class="phone" href="tel:<?=$phone_num?>"><?=$phone_num?></a><a class="mail"
                href="mailto:<?=$email_to?>"><?=$email_to?></a>
            <a class="social" href="https://instagram.com/<?=$instagram?>">
                <div class="social-icon"> <img
                        src=<?php echo get_template_directory_uri() . '/assets/images/content/Instagram.svg' ?>
                        alt="Instagram logo"></div>
                <div class="social-link">@<?=$instagram?></div>
            </a>
        </div>
        <div class="footer__apply apply-btn"><?=$apply_text?></div>
    </div>
    <div class="footer-row--smalled">
        <div class="company-name">©2022 Tadam</div><a class="company-privacy" href="/privacy">Политика
            конфиденциальности</a><a class="company-agreement" href="/agreement">Пользовательское соглашение</a><a
            class="company-developer" href="https://yurin.biz" target="_blank">Сделано в Студии Юрина</a>
    </div>
</footer>
<div class="dark-layer js--hidden">
    <form class="form apply-form" id="applyForm">
        <div class="form-close" id="closeForm"><span class="cross-one"> </span><span class="cross-two"></span></div>
        <div class="form-header"><?=$form_header?></div>
        <div class="form-subheader"><?=$form_subheader?></div><label for="userName">
            <input class="form-input" id="userName" type="text" name="userName" placeholder="ФИО"></label>
        <label for="userMail">
            <input class="form-input" id="userMail" type="text" name="userMail" placeholder="E-mail">
        </label>
        <label for="userPhone">
            <input class="form-input" id="userPhone" type="text" name="userPhone" placeholder="Телефон"
                data-inputmask="'mask' : '+7(999) 999-99-99'" inputmode="text">
        </label>
        <button class="form-button" type="submit"><?=$apply_text?></button>
        <div class="form-caption">Нажимая на кнопку, вы автоматически соглашаетесь с нашей политикой конфиденциальности
        </div>
    </form>
</div>
<script src=<?php echo get_template_directory_uri() . '/assets/js/jquery.min.js' ?>>
</script>
<script src=<?php echo get_template_directory_uri() . '/assets/js/plugins.min.js' ?>>
</script>
<script src=<?php echo get_template_directory_uri() . '/assets/js/main.min.js' ?>>
</script>
</body>

</html>