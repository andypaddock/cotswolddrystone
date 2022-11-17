<?php $heroImage = get_field('hero_image');
$heroVideo = get_field('background_video');
$heroMobile = get_field('mobile_video');
$heroPoster = get_field('video_poster'); ?>





<div class="hero" style="background-image: url(<?php echo $heroImage['url']; ?>)">
    <div class="hero__logo">
        <?php
        $image = get_field('hero_logo');
        if (!empty($image)) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>

</div>