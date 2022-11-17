<div class="bleed-image"><?php
                            $image = get_sub_field('top_image');
                            if (!empty($image)) : ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
</div>
<section id="<?php the_sub_field('section_id'); ?>" class="section-specialblock">
    <div class="row heading-block">
        <h2 class="heading-secondary"><?php the_sub_field('main_title'); ?></h2>
    </div>
    <div class="row">
        <?php
        if (have_rows('advertboxes')) : ?>

        <?php while (have_rows('advertboxes')) : the_row(); ?>
        <?php $image = get_sub_field('content_image'); ?>
        <div class="col-1-of-3">
            <div class="card  <?php the_sub_field('enter_point'); ?>">
                <div class="card__side card__side--front">
                    <div class="card__picture card__picture--1"
                        style="background-image: url(<?php echo $image['sizes']['large']; ?>)">
                        &nbsp;
                    </div>
                    <div class="content-title no-mob">
                        <h2 class="heading-tertiary"><?php the_sub_field('content_title'); ?></h2>
                    </div>
                    <div class="card__details">

                    </div>
                </div>
                <div class="card__side card__side--back card__side--back-1">
                    <div class="card__cta">

                        <div class="content-text">
                            <?php the_sub_field('content_text'); ?><?php
                                                                                                    $image = get_sub_field('text_icon');
                                                                                                    if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>

                        </div>
                        <div class="content-button">
                            <?php
                                    $link = get_sub_field('content_link');
                                    if ($link) :
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                            <a class="button" href="<?php echo esc_url($link_url); ?>"
                                target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;
        endif; ?>
    </div>

</section>
<div class="bleed-image"><?php
                            $image = get_sub_field('bottom_image');
                            if (!empty($image)) : ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
</div>