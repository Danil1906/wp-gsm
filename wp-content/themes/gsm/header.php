<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="description" content="Продажа GSM модулей для шлагбаумов и ворот">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GSM</title>

    <?php wp_head(); ?>
</head>

<body>

    
    <header class="header">
        <div class="header-mobile">
            <div class="header-mobile__wrapper">
                <nav class="header-mobile__links">
                    <ul>
                        <li class="header-mobile__link header-mobile__link-gsm"><a href="#gsm"><? the_field('link_name_1');?></a></li>
                        <li class="header-mobile__link header-mobile__link-about"><a href="#about"><? the_field('link_name_2');?></a></li>
                        <li class="header-mobile__link header-mobile__link-contacts"><a href="#contacts"><? the_field('link_name_3');?></a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-mobile__info">
                <div class="header-mobile__info-address">
                <? the_field('header_address');?>
                </div>
                <div class="header-mobile__info-phone">
                    Звонить: <a href="tel:<? the_field('header_phone_code');?>"><? the_field('header_phone_site');?></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <img src="<?php bloginfo('template_url');?>/assets/images/logo.png" alt="" class="header__logo-img">
                </div>
                <nav class="header__links">
                    <ul>
                        <li class="header__link header__link-gsm"><a href="#gsm"><? the_field('link_name_1');?></a></li>
                        <li class="header__link header__link-about"><a href="#about"><? the_field('link_name_2');?></a></li>
                        <li class="header__link header__link-contacts"><a href="#contacts"><? the_field('link_name_3');?></a></li>
                    </ul>
                </nav>
                <div class="header__info">
                    <div class="header__info-address">
                    <? the_field('header_address');?>
                    </div>
                    <div class="header__info-phone">
                        Звонить: <a href="tel:<? the_field('header_phone_code');?>"><? the_field('header_phone_site');?></a>
                    </div>
                    <!-- mobile phone  -->
                </div>
                <div class="header__info-phoneicon">
                    <a href="tel:79911199091"><img src="<?php bloginfo('template_url');?>/assets/images/phonesvg.svg" alt=""></a>
                </div>

                <div class="header__burger-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
            </div>
        </div>
    </header>