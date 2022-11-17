<section class="section-project-block">
    <div class="row">

        <div class="project-block owl-carousel owl-theme">

            <?php if (have_rows('projectboxes')) : ?>

            <?php while (have_rows('projectboxes')) : the_row();
                    $projectType = get_sub_field('project_type');
                    $singleImage = get_sub_field('single_image');
                    $beforeImage = get_sub_field('before_image');
                    $afterImage = get_sub_field('after_image');
                ?>
            <div class="project-block__item">
                <?php if ($projectType == 'single') : ?>
                <div class="single-project">
                    <h2 class="heading-tertiary"><?php the_sub_field('content_title'); ?></h2>
                    <a data-fslightbox="gallery" href="<?php echo esc_url($singleImage['url']); ?>"
                        title="<?php echo esc_attr($singleImage['caption']); ?>">
                        <img src="<?php echo esc_url($singleImage['sizes']['large']); ?>"
                            alt="<?php echo esc_attr($singleImage['alt']); ?>" />
                    </a>
                </div>
                <?php endif; ?>
                <?php if ($projectType == 'before') : ?>
                <div class="before-after">
                    <h2 class="heading-tertiary">
                        <?php the_sub_field('content_title'); ?></h2>
                    <div class="double-images">
                        <a data-fslightbox="gallery" href="<?php echo esc_url($beforeImage['url']); ?>"
                            title="<?php echo esc_attr($beforeImage['caption']); ?>">
                            <img src="<?php echo esc_url($beforeImage['sizes']['large']); ?>"
                                alt="<?php echo esc_attr($beforeImage['alt']); ?>" />
                        </a>
                        <a data-fslightbox="gallery" href="<?php echo esc_url($afterImage['url']); ?>"
                            title="<?php echo esc_attr($afterImage['caption']); ?>">
                            <img src="<?php echo esc_url($afterImage['sizes']['large']); ?>"
                                alt="<?php echo esc_attr($afterImage['alt']); ?>" />
                        </a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>



    </div>
</section>