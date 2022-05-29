<?php
/*
Template Name: home
*/

?>

<!-- <?php bloginfo('template_url');?>/assets/images/ -->

<?php get_header(); ?>
    <section class="welcome">
        <div class="container">
            <div class="welcome_slider-wrapper">

            <?php
            global $post;

            $myposts = get_posts([ 
                'numberposts' => -1,
                'offset'      => 1,
                'category_name'    => 'slider'
            ]);

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                    <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                        <div class="slider-item">
                            <div class="slider-item__text">
                                <div class="slider-item__text-title">
                                    <?php the_title();?>
                                </div>
                                <div class="slider-item__text-desc">
                                    <?php the_content();?>
                                </div>
                            </div>
                            <div class="slider-item__image">
                                <img src="<? the_post_thumbnail_url(); ?>" alt="gsm" class="slider-item__img">
                            </div>
                        </div>

                    <?php 
                }
            }

            wp_reset_postdata(); // Сбрасываем $post?>

            </div>
            <div class="product-benefits__inner">
                <div class="product-benefits__title">
                    <h3>
                    <? the_field('utp_title');?>
                    </h3>
                </div>
                <div class="product-benefits__items">
                    <div class="product-benefits__item">
                        <div class="product-benefits__cart-head">
                            <div class="product-benefits__images">
                                <div class="product-benefits__number-box">
                                    <span>1</span>
                                </div>
                                <div class="product-benefits__image-1 product-benefits__general">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/num-img-1.png" alt="">
                                </div>
                                <div class="product-benefits__image-2 product-benefits__general">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/num-img-1-2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product-benefits__text">
                            <div class="product-benefits__item-desc"><? the_field('utp_text_1');?></div>
                        </div>
                    </div>
                    <div class="product-benefits__item">
                        <div class="product-benefits__cart-head">
                            <div class="product-benefits__images">
                                <div class="product-benefits__number-box">
                                    <span>2</span>
                                </div>
                                <div class="product-benefits__image-1 product-benefits__general">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/num-img-2.png" alt="">
                                </div>
                                <div class="product-benefits__image-2 product-benefits__general">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/num-img-2-2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product-benefits__text">
                            <div class="product-benefits__item-desc"><? the_field('utp_text_2');?></div>
                        </div>
                    </div>
                    <div class="product-benefits__item">
                        <div class="product-benefits__cart-head">
                            <div class="product-benefits__images">
                                <div class="product-benefits__number-box">
                                    <span>3</span>
                                </div>
                                <div class="product-benefits__image-1 product-benefits__general">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/num-img-3.png" alt="">
                                </div>
                                <div class="product-benefits__image-2 product-benefits__general">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/num-img-3-2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product-benefits__text">
                            <div class="product-benefits__item-desc"><? the_field('utp_text_3');?></div>
                        </div>
                    </div>
                    <div class="product-benefits__item">
                        <div class="product-benefits__cart-head">
                            <div class="product-benefits__images">
                                <div class="product-benefits__number-box">
                                    <span>4</span>
                                </div>
                                <div class="product-benefits__image-1 product-benefits__general">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/num-img-4.png" alt="">
                                </div>
                                <div class="product-benefits__image-2 product-benefits__general">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/num-img-4-2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product-benefits__text">
                            <div class="product-benefits__item-desc"><? the_field('utp_text_4');?></div>
                        </div>
                    </div>
                    <div class="product-benefits__item">
                        <div class="product-benefits__cart-head">
                            <div class="product-benefits__images">
                                <div class="product-benefits__number-box">
                                    <span>5</span>
                                </div>
                                <div class="product-benefits__image-1 product-benefits__general">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/num-img-5.png" alt="">
                                </div>
                                <div class="product-benefits__image-2 product-benefits__general">
                                    <img src="<?php bloginfo('template_url');?>/assets/images/num-img-5-2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product-benefits__text">
                            <div class="product-benefits__item-desc"><? the_field('utp_text_5');?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="products">
        <div class="container">
            <div class="products__title" id="gsm">
                Доступные модели GSM модулей
            </div>
            <div class="products__items-box">
<!-- Цикл по товарам -->
                <?php
                    global $post;
                    
                    $myposts = get_posts([ 
                        'numberposts' => -1,
                        'offset'      => 1,
                        'category_name'    => 'modules'
                    ]);
                    
                    if( $myposts ){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );
                            ?>
                            <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                            <div class="products__item-wrapper">
                                <div class="products__item-imagebox">
                                    <img src="<? the_post_thumbnail_url(); ?>" alt="" class="products__item-img">
                                </div>
                                <div class="products__item-textinfo">
                                    <? the_content(); ?>
                                </div>

                                <div class="products__item-btnbox">
                                    <a href="#popup_form" class="products__item-btn">Заказать</a>
                                </div>
                            </div>
                            <?php 
                        }
                    }

                    wp_reset_postdata(); // Сбрасываем $post?>
                    
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <div class="about__title" >
                О нас
            </div>
            <div class="about__desc">
            <? the_field('about_text');?>
            </div>
            <div class="about__title-clients">
                Наши клиенты
            </div>
            <div class="about__images about__images-cliens">
                <div class="about__image-box about__marquee-item1"><img src="<?php bloginfo('template_url');?>/assets/images/about1.png" alt=""></div>
                <div class="about__image-box about__marquee-item2"><img src="<?php bloginfo('template_url');?>/assets/images/about4.png" alt=""></div>
                <div class="about__image-box about__marquee-item3"><img src="<?php bloginfo('template_url');?>/assets/images/about5.png" alt=""></div>
                <div class="about__image-box about__marquee-item4"><img src="<?php bloginfo('template_url');?>/assets/images/about16.png" alt=""></div>
                <div class="about__image-box about__marquee-item5"><img src="<?php bloginfo('template_url');?>/assets/images/about15.png" alt=""></div>
                <div class="about__image-box about__marquee-item6"><img src="<?php bloginfo('template_url');?>/assets/images/about7.png" alt=""></div>
                <div class="about__image-box about__marquee-item7"><img src="<?php bloginfo('template_url');?>/assets/images/about9.png" alt=""></div>
                <div class="about__image-box about__marquee-item8"><img src="<?php bloginfo('template_url');?>/assets/images/about10.png" alt=""></div>
                <div class="about__image-box about__marquee-item9"><img src="<?php bloginfo('template_url');?>/assets/images/about13.png" alt=""></div>
                <div class="about__image-box about__marquee-item10"><img src="<?php bloginfo('template_url');?>/assets/images/about14.png" alt=""></div>
                <div class="about__image-box about__marquee-item11"><img src="<?php bloginfo('template_url');?>/assets/images/about12.png" alt=""></div>
                <div class="about__image-box about__marquee-item12"><img src="<?php bloginfo('template_url');?>/assets/images/about11.png" alt=""></div>
                <div class="about__image-box about__marquee-item13"><img src="<?php bloginfo('template_url');?>/assets/images/about8.png" alt=""></div>
                <div class="about__image-box about__marquee-item14"><img src="<?php bloginfo('template_url');?>/assets/images/about6.png" alt=""></div>
                <div class="about__image-box about__marquee-item15"><img src="<?php bloginfo('template_url');?>/assets/images/about2.png" alt=""></div>
            </div>
            <div class="about__title-sert">
                <p class="about__title-serttext">
                    Сертификаты
                </p>
            </div>
            <div class="about__images about__images-serf">
                <div class="about__images-serfwrap">
                <?php
            global $post;

            $myposts = get_posts([ 
                'numberposts' => -1,
                'offset'      => 1,
                'category_name'    => 'certificates'
            ]);

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                    <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                    <a href="<? the_post_thumbnail_url(); ?>" class="about__image-box-serf"><img src="<? the_post_thumbnail_url(); ?>" alt=""></a>
                    <?php 
                }
            }

            wp_reset_postdata(); // Сбрасываем $post?>

                </div>
            </div>
        </div>
<?php get_footer(); ?>