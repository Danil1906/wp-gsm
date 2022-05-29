<div class="contacts" id="contacts">
            <div class="container">
                <div class="contacts__wrapper">
                    <div class="contacts__company">
                    <? the_field('legal_info');?>
                    </div>
                    <div class="contacts__info">
                        <div class="contacts__address contacts__info-item">
                            <img src="<?php bloginfo('template_url');?>/assets/images/address.svg" alt="">
                            <span><? the_field('header_address');?></span>
                        </div>
                        <a href="mailto:<? the_field('email');?>" class="contacts__email contacts__info-item">
                            <img src="<?php bloginfo('template_url');?>/assets/images/email.svg" alt="">
                            <span><? the_field('email');?></span>
                        </a>
                        <a href="tel:<? the_field('header_phone_code');?>" class="contacts__phone contacts__info-item">
                            <img src="<?php bloginfo('template_url');?>/assets/images/phone.svg" alt="">
                            <span><? the_field('header_phone_site');?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="text_for_form"><? the_field('form_text');?> $</div>

    <div class="popup-form mfp-hide" id="popup_form">
        <form class="popup-form__form" action="">
            <!-- <input class="popup-form__email-input" type="email" name="email" placeholder="Ваш email">
            <textarea class="popup-form__textarea" name="" id="" cols="30" rows="5" name="textarea" placeholder="текст сообщения"></textarea>
            <button type="submit" class="popup-form__btn">Отправить</button> -->
            <? echo do_shortcode('[contact-form-7 id="24" title="Контактная форма"]'); ?>
        </form>
    </div>
    
    <?php wp_footer(); ?>
 
</body>

</html>