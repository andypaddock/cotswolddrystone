<section class="section-singleimage">
    <div class="row <?php the_sub_field('column_size'); ?>">
        <?php
        $image = get_sub_field('single_image');
        if (!empty($image)) : ?>
        <img class="<?php the_sub_field('image_size'); ?>" src="<?php echo esc_url($image['url']); ?>"
            alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

    </div>
</section>