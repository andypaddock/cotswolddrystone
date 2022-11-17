<section class="section-project-block" id="<?php the_sub_field('section_id'); ?>">
    <div class="row w70">

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
                    <div class="single-image">
                        <span></span>
                        <a data-fslightbox="gallery" href="<?php echo esc_url($singleImage['url']); ?>"
                            title="<?php echo esc_attr($singleImage['caption']); ?>">
                            <img src="<?php echo esc_url($singleImage['sizes']['large']); ?>"
                                alt="<?php echo esc_attr($singleImage['alt']); ?>" />
                        </a>
                        <span></span>
                    </div>
                </div>
                <?php endif; ?>
                <?php if ($projectType == 'before') : ?>
                <div class="before-after">
                    <h2 class="heading-tertiary">
                        <?php the_sub_field('content_title'); ?></h2>
                    <div class="double-images">
                        <div class="before">
                            <a data-fslightbox="gallery" href="<?php echo esc_url($beforeImage['url']); ?>"
                                title="<?php echo esc_attr($beforeImage['caption']); ?>">
                                <img src="<?php echo esc_url($beforeImage['sizes']['large']); ?>"
                                    alt="<?php echo esc_attr($beforeImage['alt']); ?>" />
                            </a>
                            <h2 class="heading-tertiary__sub">
                                Before</h2>
                        </div>
                        <div class="after">
                            <a data-fslightbox="gallery" href="<?php echo esc_url($afterImage['url']); ?>"
                                title="<?php echo esc_attr($afterImage['caption']); ?>">
                                <img src="<?php echo esc_url($afterImage['sizes']['large']); ?>"
                                    alt="<?php echo esc_attr($afterImage['alt']); ?>" />
                            </a>
                            <h2 class="heading-tertiary__sub">
                                After</h2>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>



    </div>
</section>