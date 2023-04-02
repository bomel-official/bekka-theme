
        <footer>
            <div class="footer_wrapp">
                <div class="foot_logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt=""></div>
                <div class="foot_links">
                    <div class="links">
                        <a href="<?php the_field('vk_l') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/vk_foot.png" alt=""></a>
                        <a href="<?php the_field('tg_l') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/tel_foot.png" alt=""></a>
                        <a href="<?php the_field('yxd_l') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/nn_foot.png" alt=""></a>
                        <a href="<?php the_field('yt_l') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/yt_foot.png" alt=""></a>
                    </div>
                </div>
                <div class="foot_nav">
                    <ul>
                        <li><a href="<?php echo get_home_url('/') ?>#about">Про курс</a></li>
                        <li><a href="<?php echo get_home_url('/') ?>#programma">Программа</a></li>
                        <li><a href="<?php echo get_home_url('/') ?>#author">Авторы</a></li>
                    </ul>
                </div>
                <div class="foot_nav">
                    <ul>
                        <li><a href="<?php echo get_home_url('/') ?>#callback">Отзывы</a></li>
                        <li><a href="<?php echo get_home_url('/') ?>#question">Вопрос - ответ</a></li>
                        <li><a href="<?php echo get_home_url('/') ?>#contact">Контакты</a></li>
                    </ul>
                </div>
                <div class="foot_dan">
                    <ul>
                        <li><a href="<?php echo site_url('обработка-персональных-данных') ?>" style="text-decoration: underline;">Обработка персональных данных</a></li>
                        <li><a href="<?php echo site_url('пользовательское-соглашение') ?>" style="text-decoration: underline;">Пользовательское соглашение</a></li>
                        <li><a href="<?php echo site_url('юридические-документы') ?>" style="text-decoration: underline;">Юридические документы</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>