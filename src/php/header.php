<!DOCTYPE html>
<html lang="en">
<?php
// Объявляю сразу все важные поля
$phone_num = get_field('phone_num', 'option');
$apply_text = get_field('apply_text');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/images/content/favicon.png' ?>"
        type="image/x-icon">
    <title>Tadam</title>
</head>

<body>
    <header class="header">
        <div class="header__logo-container">
            <div class="logo">
                <a href="<?php echo home_url(); ?>"> <img
                        src="<?php echo get_template_directory_uri() . '/assets/images/content/logo.svg' ?>"
                        alt="Company Logo"></a>
            </div>
            <div class="logo-caption">Tadam</div>
        </div>
        <nav class="header__navigation"><a class="navigation-link" href="<?php echo home_url() . '#toAbout' ?>">О
                проекте</a><a class="navigation-link" href="<?php echo home_url() . '#toProcess' ?>">Как работает</a><a
                class="navigation-link" href="<?php echo home_url() . '#toAbilities' ?>">Возможности</a><a
                class="navigation-link" href="<?php echo home_url() . '#toHelp' ?>">FAQ</a></nav>
        <div class="header__phone">
            <a href="tel:<?=$phone_num?>"><?=$phone_num?></a>
        </div>
        <div class="header__apply apply-btn"><?=$apply_text?></div>
    </header>
    <div class="mobile-header">
        <div class="logo-container">
            <a href="<?php echo home_url(); ?>"> <img class="logo" id="toMain"
                    src="<?php echo get_template_directory_uri() . '/assets/images/content/logo.svg' ?>"
                    alt="Company Logo"></a><span class="logo-caption">Tadam</span>
        </div>
        <div class="mobile-header__burger-menu"><span class="cross-one--mobile"> </span><span
                class="cross-two--mobile"></span><span class="cross-left"></span></div>
    </div>
    <div class="mobile-menu">
        <div class="navigation" id="mobileNavigation"><a class="navigation-link"
                href="<?php echo home_url() . '#toGreeting' ?>">О системе</a><a class="navigation-link"
                href="<?php echo home_url() . '#toProcess' ?>">Как работает</a><a class="navigation-link"
                href="<?php echo home_url() . '#toAbilities' ?>">Возможности</a><a class="navigation-link"
                href="<?php echo home_url() . '#toHelp' ?>">Помощь</a></div>
        <div class="contacts"><a href="tel:+<?=$phone_num?>"><?=$phone_num?></a></div>
        <div class="apply">
            <div class="apply-btn" id="headerApply"><?=$apply_text?></div>
        </div>
    </div>