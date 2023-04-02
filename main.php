<?php

/*
Template Name: Шаблон главной страницы
Template Post Type: page
*/

if (isset($_GET['name'])) {
    setcookie('name', $_GET['name'], time()+31556926);
}
if (isset($_GET['phone'])) {
    setcookie('phone', $_GET['phone'], time()+31556926);
}
if (isset($_GET['email'])) {
    setcookie('email', $_GET['email'], time()+31556926);
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
                            <li class="mobile-menu__item"><a href="<?php echo get_home_url('/') ?>#help" class="mobile-menu__link">С чем помогает</a>
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
        <div class="main_container">
            <div class="left_section">
                <h1>Бекка - твой <br> карманный психолог</h1>
                <p>Начни курс прямо сейчас</p>
                <a href="#cost"><button>Записаться</button></a>
            </div>
            <div class="center_section">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/bekka_main.png" alt="">
            </div>
            <div class="right_section">
                <p class="purple">Дешевле лекарств</p>
                <p class="blue">Быстрее скорой помощи</p>
                <p class="red">Стресс и тревога остануться в прошлом</p>
            </div>
        </div>
    </div>
</div>
<section class="block_2" id="about">
    <div>
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/bekka_bl2.png" alt="">
    </div>
    <div>
        <h2>Курс от Бэкки это:</h2>
        <ul>
            <li>
                <p>Проверенные рабочие техники с научно доказанной эффективностью</p>
            </li>
            <li>
                <p>Понятный и разнообразный формат курса</p>
            </li>
            <li>
                <p>Поможет выработать полезные привычки и дисциплину</p>
            </li>
            <li>
                <p>Всегда под рукой, занимайтесь где и когда вам удобно</p>
            </li>
            <li>
                <p>Достаточно всего 10-15 минут в день</p>
            </li>
        </ul>
    </div>
</section>
<section class="block_3">
    <div class="block_3_wrapper">
        <div>
            <h2 id="help">С чем помогает Бекка?</h2>
        </div>
        <div class="cards owl-carousel" id="bekka-help-cards">
            <?php for ($i = 1; $i <= 14; $i++) { 
                $el = get_field('bh_' . $i); ?>
                <div class="card one">
                    <img src="<?php echo get_img_url($el['img']) ?>" alt="">
                    <p><?php echo $el['text'] ?></p>
                </div>
            <?php } ?>
        </div>
        <div class="linejs-wrapper">
            <div class="linejs" id="linejs"></div>
        </div>
        <div class="button">
            <a href="#cost"><button>Записаться на курс</button></a>
        </div>
    </div>
</section>
<section class="block_4" id="programma">
    <div class="block_4_wrapper">
        <h2>Описание программы курса</h2>
        <table class="stokes">
            <tr>
                <td class="text">
                    <h3>1 Неделя</h3>
                    <p><?php the_field('week_1') ?></p>
                </td>
                <td class="img"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow/arr1.png" alt=""></td>
                <td class="space"></td>
            </tr>
            <tr>
                <td class="space"> </td>
                <td class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow/arr2.png" alt=""></td>
                <td class="text">
                    <h3>2 неделя</h3>
                    <p><?php the_field('week_2') ?></p>
                </td>
            </tr>
            <tr>
                <td class="text">
                    <h3>3 неделя</h3>
                    <p><?php the_field('week_3') ?></p>
                </td>
                <td class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow/arr3.png" alt=""></td>
                <td class="space"> </td>
            </tr>
            <tr>
                <td class="space"></td>
                <td class="img"></td>
                <td class="text">
                    <h3>4 неделя</h3>
                    <p><?php the_field('week_4') ?></p>
                </td>
            </tr>
            <tr>
                <td class="text">
                    <h3>5 неделя</h3>
                    <p><?php the_field('week_5') ?></p>
                </td>
                <td class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow/arr4.png" alt=""></td>
                <td class="space"></td>
            </tr>
            <tr>
                <td class="space"></td>
                <td class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow/arr5.png" alt=""></td>
                <td class="text">
                    <h3>6 неделя</h3>
                    <p><?php the_field('week_6') ?></p>
                </td>
            </tr>
            <tr>
                <td class="text">
                    <h3>7 неделя</h3>
                    <p><?php the_field('week_7') ?></p>
                </td>
                <td class="img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow/arr6.png" alt=""></td>
                <td class="space"></td>
            </tr>
            <tr>
                <td class="space"></td>
                <td class="space"></td>
                <td class="text">
                    <h3>8 неделя</h3>
                    <p><?php the_field('week_8') ?></p>
                </td>
            </tr>
        </table>
        <div class="button"><a href="#cost"><button>Записаться на курс</button></a></div>
    </div>
</section>
<section class="block_5" id="author">
    <div class="block_5_wrapper">
        <h2>Информация о нашем психологе</h2>
        <div class="about_wrapper">
            <div class="imgreno"><img src="<?php echo get_img_url(get_field('ps_photo')) ?>" alt=""></div>
            <div class="textabout">
                <h3><?php the_field('ps_header') ?></h3>
                <p><?php the_field('ps_text') ?></p>
                <div class="from">
                    <p style="font-weight: bold;">Автор методики: Жильбер Рен</p>
                    <div class="canada">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/kanad.png" alt="">
                        <p>Доктор наук (Канада)</p>
                    </div>
                </div>
            </div>
            <!-- <div class="button_left"><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/but-left.png" alt=""></a></div>
            <div class="button_right"><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/but-right.png" alt=""></a></div> -->
        </div>
    </div>
</section>
<section class="block_6" id="cost">
    <div class="cost_wrapper">
        <div class="cost">
            <h2>Стоимость курса</h2>
            <div class="rubl">
                <p>1 990 <sup>₽</sup></p>
                <p>3 990 <sup>₽</sup></p>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/cost_img.png" alt="">
        </div>
        <div class="form">
            <h3>Выберите вариант оплаты</h3>
            <div class="visa">
                <p>Оплатить всю сумму со скидкой 1 990 ₽</p>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/visa.png" alt="">
            </div>
            <h3>Заполните контактные данные</h3>
            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                <input type="hidden" name="action" value="callback">
                <input type="text" placeholder="Имя" name="name">
                <input type="tel" name="phone" placeholder="Телефон">
                <input type="email" name="email" placeholder="Электронная почта">
                <div class="checkbox"><input type="checkbox" name="is_ur"><label for="is_ur">Я юридическое лицо</label></div>
                <div class="cost_button"><button>Записаться на курс</button></div>
            </form>
            <p style="font-size: 12px;">
                Нажимая на кнопку, я соглашаюся на <a href="">обработку персональных данных</a> и <a href="">с
                    правилами пользования Платформой</a></p>
        </div>
    </div>
</section>
<section class="block_7" id="callback">
    <div class="callback_wrapper">
        <div class="screen">
            <h2>Отзывы</h2>
            <div class="otziv_img owl-carousel owl-theme">
                <?php for ($i = 1; $i <= 20; $i++) { 
                    $el = get_field('fb_' . $i);
                    if ($el) { ?>
                        <img src="<?php echo get_img_url($el) ?>" alt="">
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

        <div class="video">
            <video controls height="100%" poster="<?php echo get_img_url(get_field('fb_vid_prev')) ?>" preload="none">
                <source src="<?php echo get_img_url(get_field('video_fb')) ?>" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="askforbekka">
        <div class="askforbekka_wrapper">
            <h2 id="question">Спроси у Бэкки</h2>
            <div class="questions">
                <?php for($i = 1; $i <= 10; $i++) { 
                    $el = get_field('question_' . $i);
                    if ($el['question']) { ?>
                        <div class="question <?php echo $i ?>">
                            <div class="spoiler_wrap">
                                <div class="spoiler_title">
                                    <div class="quote">
                                        <h3 class="title"><?php echo $el['question'] ?></h3>
                                        <img class="toggle" src="<?php echo get_template_directory_uri() ?>/assets/img/plus.png" alt="">
                                    </div>
                                </div>
                                <div class="spoiler_content">
                                    <p><?php echo $el['answer'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="block_8" id="contact">
    <div class="write_wrapper">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/footer_up_img.png" alt="">
        <div class="write_text">
            <p>По любым вопросам вы можете писать моим<br>менеджерам и разработчикам</p>
            <div class="buttons_write">
                <div class="left_button">
                    <a class="left_link" href="<?php the_field('mail_l') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/email.png" alt=""><button>Написать на
                            почту</button></a>
                </div>
                <div class="right_button">
                    <a href="<?php the_field('vk_l') ?>" class="right_link"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/vk.png" alt=""><button>Написать в
                            VK</button></a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

<script>
    const anchors = document.querySelectorAll('a[href*="#"]')

    for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault()
        
        const blockID = anchor.getAttribute('href').substr(1)
        
        document.getElementById(blockID).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
        })
    })
    }
    $('.spoiler_title').click(function() {
        $(this).find('.plus-minus-toggle').toggleClass('collapsed');
        $(this).parent().toggleClass('active');
    });

    $(function() {
        // Owl Carousel
        var owl = $(".owl-carousel.otziv_img");
        owl.owlCarousel({
            items: 2,
            margin: 2,
            loop: true,
            nav: false,
            dots: true,
            dotsEach: true,
            dotsContainer: '#carousel-custom-dots',
            responsive : {
                0 : {
                    items: 1,
                    margin: 0
                },
                480 : {
                    items: 2,
                    margin: 2
                },
            }
        });

        var help_cards = $('#bekka-help-cards')
        help_cards.owlCarousel({
            items: 4,
            margin: 30,
            loop: false,
            nav: false,
            dots: false,
            responsive : {
                0 : {
                    items: 1,
                    margin: 0
                },
                480 : {
                    items: 2,
                    margin: 30
                },
                768 : {
                    items: 4,
                    margin: 30
                }
            }
        });
        help_cards.on('changed.owl.carousel', function(event) {
            $('#linejs').width((event.item.index / 10 * 100) + '%');
        })
    });


    $('.mobile-menu__item').on('click', function(){ 
            if($('.mobile-menu__btn').css('display') !='none'){
                $(".mobile-menu__btn").trigger( "click" );
            }
    });
</script>

</html>