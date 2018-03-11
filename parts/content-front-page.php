<?php wp_enqueue_script('js-organigram', get_bloginfo('template_directory').'/app.front-page.js', array(), false, true); // add script ?>
<div class="p-4">
    <?php get_template_part('parts/main-slider'); ?>
    <div class="front-page-articles">
        <div class="row row-eq-height">
        <?php
        $query = new WP_Query('category_name=berita');
        if($query->have_posts()) {
            $i = -1;
            while($query->have_posts() && $i < 5) {
                $i++;
                $query->the_post();
                if($i < 2) {
                    ?>
                    <div class="col-md-4 mb-3">
                        <a href="<?php echo get_permalink() ?>">
                            <div class="article-box" <?php if($thumbnail = get_the_post_thumbnail_url()) { ?>style="background-image:url('<?php echo esc_url($thumbnail) ?>')"<?php } ?>>
                                <div class="overlay">
                                    <div class="info">
                                        <h2 class="title"><?php the_title(); ?></h2>
                                        <h5 class="date"><?php echo get_the_date(); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                } else {
                    ?>
                    <?php if($i == 2) { ?><div class="col-md-4 mb-3"><?php } ?>
                        <a href="<?php echo get_permalink() ?>">
                            <div class="news-minor">
                                <p class="title"><?php the_title(); ?></p>
                                <p class="date"><?php echo get_the_date(); ?></p>
                            </div>
                        </a>
                    <?php
                }
            }
            if($i >= 2) { ?><div style="text-align:right">
                <a class="jump-to-category-list btn btn-info" href="<?php echo get_site_url() ?>/category/berita">Semua berita</a>
            </div><?php }
        }
        ?>
        </div>
    </div>
</div>
