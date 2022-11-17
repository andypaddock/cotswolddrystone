<?php

/**
 * The template for displaying the footer
 * @package Rad Propulsion
 */
?>
<footer class="footer">
    <?php $footerImage = get_field('footer_image', 'options'); ?> <div class="gradient-footer">
        <div class="footer-hero" style="background-image: url(<?php echo $footerImage['url']; ?>)">
            <div class="footer-text-container">

                <div class="row">
                    <div class="footer-contact" id="contact">

                        <div class="footer-newsletter">

                            <h3 class="heading-tertiary">
                                <?php the_field('footer_main_text', 'options'); ?>
                            </h3>
                            <?php
                            if (get_field('footer_shortcode', 'options')) {
                                echo do_shortcode(get_field('footer_shortcode', 'options'));
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-link-container">
                <div class="row footer-links">
                    <div class="members"> <?php
                                            $image = get_field('membership_logo', 'options');
                                            if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="logo"> <?php
                                        $image = get_field('footer_logo', 'options');
                                        if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
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


                <div class="row footer-privacy">
                    <div class="copyright"><?php the_field('copy_text', 'options'); ?></div>
                    <div class="silverless">

                        <a href="https://silverless.co.uk">

                            <?php get_template_part('inc/img/silverless', 'logo'); ?>

                        </a>

                    </div>
                    <div class="privacy-links">
                        <menu>
                            <? wp_nav_menu(array(
                                'theme_location' => 'footer-menu',
                            )); ?>
                        </menu>
                    </div>
                </div>
            </div>
        </div>
    </div>


</footer>
</main>
<div class="sidebar">
    <? wp_nav_menu(array(
        'theme_location' => 'mobile-menu',
        'container' => false,
        'menu_class' => 'sidebar-list',
        'list_item_class'  => 'sidebar-item',
        'link_class'   => 'sidebar-anchor'
    )); ?>
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


<?php wp_footer(); ?>
</body>

</html>