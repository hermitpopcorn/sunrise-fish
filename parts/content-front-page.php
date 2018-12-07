<?php wp_enqueue_script('js-organigram', get_bloginfo('template_directory').'/app.front-page.js', array(), false, true); // add script ?>
<?php
    $srfOptions = get_option('srf-options');
    $newsStyle = !empty($srfOptions['news-style']) ? $srfOptions['news-style'] : '2b+l';
?>
<div class="p-4">
    <?php get_template_part('parts/main-slider'); ?>
    <div class="front-page-articles">
        <div class="row row-eq-height">
        <?php
        $query = new WP_Query('category_name=berita');
        $i = -1;
        if($query->have_posts()) {
            while($query->have_posts() && $i < 5) {
                $i++;
                $query->the_post();
                if(
                    ($i < 2 && $newsStyle == '2b+l') // two blocks plus list
                    ||
                    ($i < 3 && $newsStyle == '3b') // three blocks
                ) {
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
                } else if($newsStyle == '2b+l') {
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
            if($i >= 2 && $newsStyle == '2b+l') { ?>
                <div style="text-align:right">
                    <a class="jump-to-category-list btn btn-info" href="<?php echo get_site_url() ?>/category/berita">Semua berita</a>
                </div></div>
            <?php }
        }

        while($i < 2) {
            $i++; ?>
            <div class="col-md-4 mb-3 d-none d-md-block">
                <div class="article-box no-article">
                </div>
            </div>
            <?php
        }
        ?>
        </div>
        <?php if($i >= 3 && $newsStyle == '3b') { ?>
            <div class="text-right">
                <a class="jump-to-category-list btn btn-info" href="<?php echo get_site_url() ?>/category/berita">Semua berita</a>
            </div>
        <?php } ?>
    </div>
</div>
<?php // link OA  ?>
<div class="banner-oa container">
    <div class="row">
        <a href="https://instagram.com/himadeunpad" class="col-md-6 text-center" id="banner-instagram">
            <img class="banner-image" src="<?php echo get_bloginfo('template_directory');?>/images/banner-oa/instagram_ed5366.png">
        </a>
        <a href="https://page.line.me/himadeunpad" class="col-md-6 text-center" id="banner-line">
            <img class="banner-image" src="<?php echo get_bloginfo('template_directory');?>/images/banner-oa/line_00ba00.png">
        </a>
    </div>
</div>
<?php
    $srfOptions = get_option('srf-options');

    $parser = function($input) {
        $input = str_replace("<SITE_URL>", get_site_url(), $input);
        $input = str_replace("<TEMPLATE_DIR>", get_bloginfo('template_directory'), $input);
        return $input;
    };

    echo (!empty($srfOptions['fp-body-extra']) ? $parser($srfOptions['fp-body-extra']) : '');
