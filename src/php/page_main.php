<?php /* Template Name: Main Page */?>
<?php get_header()?>
<?php
// Объявляю сразу все важные поля
$main_header = get_field('main_header');
$advert_header = get_field('advert_header');
$advert_content = get_field('advert_content');
$advert_image = get_field('advert_image');
$ability_header = get_field('ability_header');
$every_header = get_field('every_header');
$level_header = get_field('level_header');
$now_header = get_field('now_header');
$now_content = get_field('now_content');
$now_image = get_field('now_image');
$question_image = get_field('question_image');
$question_header = get_field('question_header');
$question_content = get_field('question_content');
$apply_text = get_field('apply_text');
$stats_main_header = get_field('stats_main_header');

?>
<main class="main">
    <section class="section main--greeting">
        <div class="blue-circle blue-circle--left"> </div>
        <div class="blue-circle blue-circle--right"> </div>
        <div class="section-container">
            <div class="greeting-container">
                <div class="greeting-header"><?=$main_header?></div>
                <div class="greeting-subheader"> Управляйте рекламой без рутины и лишних расходов<div> Уже <a
                        class="greeting-subheader__link" href="#">более 1 000 активных пользователей</a> в Москве</div></div>
                <div class="greeting-button apply-btn"><?=$apply_text?></div>
            </div>
            <div class="greeting-image"> <img
                    src=<?php echo get_template_directory_uri() . '/assets/images/content/main__greeting.svg' ?>
                    alt="Main Greeting">
            </div>
        </div>
        <div class="stats-container">
            <div class="stats-container__header"><?=$stats_main_header?></div>

            <div class="stats-container__cards">
                <?php
if (have_rows('stats_repeater')):

    while (have_rows('stats_repeater')): the_row();?>

                <?php
        $stats_image = get_sub_field('stats_image');
        $stats_header = get_sub_field('stats_header');
        $stats_content = get_sub_field('stats_content');
        ?>
                <div class="stats-container__card">
                    <div class="card-image"> <img src="<?=$stats_image?>" alt=""></div>
                    <div class="card-header"><?=$stats_header?></div>
                    <div class="card-content"><?=$stats_content?></div>
                </div>

                <?php
    endwhile;
endif;
?>
            </div>
        </div>
    </section>
    <section class="section main--advert" id="toAbout">
        <div class="adverter-container">
            <div class="content">
                <div class="adverter-container__header"><?=$advert_header?></div>
                <div class="adverter-container__subheader"><?=$advert_content?></div>
                <div class="adverter-container__download">
                    <?php
$apple_link = get_field('link_apple');
$google_link = get_field('link_google');

?>
                    <a class="download-link download-link--google" href="<?=$apple_link?>"> </a>
                    <a class="download-link download-link--apple" href="<?=$google_link?>"></a>
                </div>
            </div>
            <div class="adverter-container__image"> <img src="<?=$advert_image?>" alt="Advert Image"></div>
        </div>
    </section>
    <section class="section main--ability" id="toAbilities">
        <div class="section-header"><?=$ability_header?></div>
        <?php
if (have_rows('ability_row')):

    while (have_rows('ability_row')): the_row();
        ?>
        <div class="ability-container">

            <?php if (have_rows('ability_repeater')):

            while (have_rows('ability_repeater')): the_row();?>


            <?php
                $ability_image = get_sub_field('ability_image');
                $ability_header = get_sub_field('ability_header');
                $ability_content = get_sub_field('ability_content');
                ?>
            <div class="ability-container__card">
                <div class="card-image"><img src="<?=$ability_image?>" alt="Ability"></div>
                <div class="card-header"><?=$ability_header?></div>
                <div class="card-content"><?=$ability_content?></div>
            </div>

            <?php
            endwhile;
        endif;?>
        </div>
        <?php
    endwhile;
endif;
?>
    </section>
    <section class="section main--everybody" id="toProcess">
        <div class="section-header"><?=$every_header?></div>
        <?php if (have_rows('every_repeater')):

    while (have_rows('every_repeater')): the_row();?>

        <?php
        $every_image = get_sub_field('every_image');
        $every_header = get_sub_field('every_header');
        $every_content = get_sub_field('every_content');
        $every_color = get_sub_field('every_color');
        $every_number = get_sub_field('every_number');
        ?>
        <div class="everybody-container everybody-container--<?=$every_color?>">
            <div class="everybody-container__box">
                <div class="everybody-container__counter"><?=$every_number?></div>
                <div class="everybody-container__header"><?=$every_header?>
                </div>
                <div class="everybody-container__content">
                    <div class="everybody-container__paragraph"><?=$every_content?></div>
                </div>
            </div>
            <div class="everybody-container__image"> <img src="<?=$every_image?>" alt="Main Evetybody 1"></div>
        </div>

        <?php
    endwhile;
endif;
?>
    </section>
    <section class="section main--level">
        <div class="section-header"><?=$level_header?></div>
        <div class="level-container">
            
            <?php if (have_rows('level_repeater')):

while (have_rows('level_repeater')): the_row();?>

    <?php
    $level_image = get_sub_field('level_image');
    $level_header = get_sub_field('level_header');
    $level_content = get_sub_field('level_content');
    ?>
    <div class="level-container__card">
                <div class="card-image"
                    style="background: url(<?=$level_image?>)"
                    alt="Level">
                </div>
                <div class="card-content">
                    <div class="card-content__header"><?=$level_header?></div>
                    <div class="card-content__content"><?=$level_content?></div>
                </div>
            </div>

    <?php
endwhile;
endif?>
        </div>
    </section>
    <section class="section main--now">
        <div class="now-header"><?=$now_header?></div>
        <div class="now-subheader"><?=$now_content?></div>
        <div class="now-container">
            <div class="now-container__button apply-btn"><?=$apply_text?></div>
            <div class="now-container__image"> <img
                    src="<?=$now_image?>" alt="Now">
            </div>
        </div>
    </section>
    <section class="section main--help" id="toHelp">
        <div class="section-header">Часто задаваемые вопросы</div>
        <div class="help-container">
            <div class="faq-container">
                <?php
if (have_rows('faq_repeater')):

    while (have_rows('faq_repeater')): the_row();?>

                <?php
        $faq_question = get_sub_field('faq_question');
        $faq_answer = get_sub_field('faq_answer');
        $faq_link = get_sub_field('faq_link');
        ?>
                <div class="faq-block">
                    <div class="faq-question">
                        <div class="faq-question__content"><?=$faq_question?></div>
                        <div class="question-indicator"> <span class="cross-one"> </span><span class="cross-two"></span>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer__content"><?=$faq_answer?></div><a class="faq-answer__link"
                            href="<?=$faq_link?>">Подробнее</a>
                    </div>
                </div>
                <?php
    endwhile;
endif;
?>
            </div>
            <div class="faq-questionary">
                <div class="blue-circle"> </div>
                <div class="faq-questionary__image"> <img
                        src="<?=$question_image?>"
                        alt="Question Logo"></div>
                <div class="faq-questionary__header"><?=$question_header?></div>
                <div class="faq-questionary__subheader"><?=$question_content?></div>
                <div class="faq-questionary__button apply-btn">Оставить заявку</div>
            </div>
        </div>
    </section>
</main>


<?php get_footer()?>