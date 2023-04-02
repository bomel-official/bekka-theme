<?php

$name = '';
$phone = '';
$email = '';

if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
}
if (isset($_COOKIE['phone'])) {
    $phone = $_COOKIE['phone'];
}
if (isset($_COOKIE['email'])) {
    $email = $_COOKIE['email'];
}

get_header(); ?>

<div class="main">
    <div class="main_wrapper">
        <div class="head_wrapper">
            <header>
                <nav class="mobile-menu">
                    <img style="position: absolute; left: 0; scale: 0.8;" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="">
                    <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
                    <label for="checkbox" class="mobile-menu__btn">
                        <div class="mobile-menu__icon"></div>
                    </label>
                    <div class="mobile-menu__container">
                        <ul class="mobile-menu__list">
                            <li class="mobile-menu__item"><a href="<?php echo get_home_url('/') ?>#about" class="mobile-menu__link">Про
                                    курс</a>
                            </li>
                            <li class="mobile-menu__item"><a href="<?php echo get_home_url('/') ?>#programma"
                                    class="mobile-menu__link">Программа</a></li>
                            <li class="mobile-menu__item"><a href="#help" class="mobile-menu__link">С чем помогает</a>
                            </li>
                            <li class="mobile-menu__item"><a href="<?php echo get_home_url('/') ?>#callback"
                                    class="mobile-menu__link">Отзывы</a>
                            </li>
                            <li class="mobile-menu__item"><a href="<?php echo get_home_url('/') ?>#question" class="mobile-menu__link">Вопрос -
                                    ответ</a></li>
                            <li class="mobile-menu__item"><a href="<?php echo get_home_url('/') ?>#contact"
                                    class="mobile-menu__link">Контакты</a>
                            </li>
                            <li class="mobile-menu__item"><a href="<?php echo get_home_url('/') ?>#cost"
                                    class="mobile-menu__link">Записаться</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <img class="logo_desk" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="">
                <nav class="dest">
                    <div class="ul_cont">
                        <ul>
                            <li><a href="<?php echo get_home_url('/') ?>#about">Про курс</a></li>
                            <li><a href="<?php echo get_home_url('/') ?>#programma">Программа</a></li>
                            <li><a href="<?php echo get_home_url('/') ?>#help">С чем помогает</a></li>
                            <li><a href="<?php echo get_home_url('/') ?>#callback">Отзывы</a></li>
                            <li><a href="<?php echo get_home_url('/') ?>#question">Вопрос - ответ</a></li>
                            <li><a href="<?php echo get_home_url('/') ?>#contact">Контакты</a></li>
                            <li class="circle"><a href="<?php echo get_home_url('/') ?>#cost">Записаться</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>
    </div>
</div>
<section class="block_5" id="author">
    <div class="block_5_wrapper">
        <h2><?php the_title() ?></h2>
        <div class="about_wrapper">
            <div class="textabout">
                <p><?php the_content() ?></p>
            </div>
            <!-- <div class="button_left"><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/but-left.png" alt=""></a></div>
            <div class="button_right"><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/but-right.png" alt=""></a></div> -->
        </div>
    </div>
</section>

<style>
    .main {
        background-color: #fff;
        background-image: none;
    }
    .main_wrapper {
        padding-bottom: 5px;
    }
    .block_5 {
        min-height: 100vh;
        padding: 100px 0;
    }
    .block_5 .textabout ul {
        padding: 15px 0 15px 30px;
    }
    .block_5 .textabout li::before {
        content: '- ';
    }
    .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea {
        border-bottom: 1px solid #aaa;
    }
    .woocommerce-notices-wrapper {
        display: none;
    }
</style>


<?php get_footer(); ?>

<script>
    $('.mobile-menu__item').on('click', function(){ 
            if($('.mobile-menu__btn').css('display') !='none'){
                $(".mobile-menu__btn").trigger( "click" );
            }
    });
    $('#billing_first_name').val('<?php echo $name ?>');
    $('#billing_phone').val('<?php echo $phone ?>');
    $('#billing_email').val('<?php echo $email ?>');
</script>

</html>