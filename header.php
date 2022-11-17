<?php

/**
 * Header
 *
 * @package Rad Propulsion
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $excerpt; ?>">
    <meta name="keywords" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo the_title(); ?></title>
    <script src="https://kit.fontawesome.com/fbafb66f14.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/wjg4qgd.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="nav-right visible-xs">
        <div class="navbutton" id="btn">
            <div class="bar top"></div>
            <div class="bar middle"></div>
            <div class="bar bottom"></div>
        </div>
    </div>

    <main>

        <div class="logo-mobile"><a
                href="<?php echo site_url(); ?>"><?php get_template_part("inc/img/radlogoblack"); ?></a>
        </div>



        <nav>
            <!-- nav-right -->

            <div class="nav-right hidden-xs">
                <div class="navbutton" id="btn">
                    <div class="bar top"></div>
                    <div class="bar middle"></div>
                    <div class="bar bottom"></div>
                </div>
            </div>


        </nav>
        <div class="top-navbar">

            <div class="logo"><a
                    href="<?php echo site_url(); ?>"><?php get_template_part("inc/img/radlogoblack"); ?></a>
            </div>

            <div class="nav-area">
                <? wp_nav_menu(array(
                    'theme_location' => 'type-menu',
                    'menu_class' => 'cust-switch',
                )); ?>
                <menu>
                    <? wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                    )); ?>
                </menu>
            </div>
            <div class="contacts">
                <ul>
                    <li>
                        <?php
                        $link = get_field('contact_number', 'options');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url($link_url); ?>"
                            target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php
                        $link = get_field('email_address', 'options');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url($link_url); ?>"
                            target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                    </li>
                </ul>

            </div>
        </div>

        <header class="header <?php the_field('hero_section_size'); ?>">

            <?php if (is_single()) : ?>
            <?php get_template_part('template-parts/posthero'); ?>
            <?php else : ?>
            <?php get_template_part('template-parts/hero'); ?>
            <?php endif; ?>
        </header>

        <!--closes in footer.php-->