<div class="bleed-image"><?php
                            $image = get_sub_field('top_image');
                            if (!empty($image)) : ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
</div>
<section class="testimonial-slider">

    <div class="row">
        <div class="quote-mark"><?php
                            $image = get_field('quote_left', 'options');
                            if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="owl-carousel owl-theme testimonial-carousel">

            <?php if (have_rows('short_testimonial', 'options')) : ?>
            <?php while (have_rows('short_testimonial', 'options')) : the_row(); ?>

            <div class="quote">
                <div class="copy"><?php the_sub_field('testimonial'); ?></div>
                <!-- <div class="centre-line">
                    <div class="line"></div>
                    <div></div>
                </div> -->
                <p class="quote-cite"><?php the_sub_field('name'); ?></p>

            </div>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <?php $moreButton = get_sub_field('hide_button');
        if ($moreButton == false) : ?>
        <?php
            $link = get_field('testimonial_link', 'options');
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
        <a class="button" href="<?php echo esc_url($link_url); ?>"
            target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
        <?php endif; ?>
        <div class="quote-mark"><?php
                            $image = get_field('quote_right', 'options');
                            if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>


</section>
<div class="bleed-image"><?php
                            $image = get_sub_field('bottom_image');
                            if (!empty($image)) : ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
</div>