<?php wp_enqueue_script('js-organigram', get_bloginfo('template_directory').'/app.front-page.js', array(), false, true); // add script ?>
<?php
    $srfOptions = get_option('srf-options');
    $newsStyle = !empty($srfOptions['news-style']) ? $srfOptions['news-style'] : '2b+l';
?>
<?php // News ?>
<section id="news">
    <div class="p-4">
        <?php // Headline Slider ?>
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
                    <div class="text-right">
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
</section>

<?php // artikel non-news
$c_artikel = get_category_by_slug('artikel');
if($c_artikel) {
    $subc_artikel = get_categories(array('parent' => $c_artikel->cat_ID, 'hide_empty' => false));
}
?>
<?php if($subc_artikel) { ?>
    <section id="articles">
        <div class="pb-4">
            <div class="section-header">Rubrik Mahasiswa</div>
            <div class="row no-gutters">
                <?php $colsize = floor(12 / count($subc_artikel)); ?>
                <?php foreach($subc_artikel as $i) { ?>
                    <div class="col-md-<?php echo $colsize ?>">
                        <h1 class="article-category">
                            <?php echo $i->name ?>
                        </h1>
                        <?php
                            $query = new WP_Query('category_name='.$i->slug);
                            $ii = 0;
                        ?>
                        <div class="row pl-4 pr-4">
                            <?php while($query->have_posts()) { ?>
                                <div class="col-12">
                                <?php if($ii >= 3) { ?>
                                    <div class="text-right">
                                        <a class="jump-to-category-list btn btn-info" href="<?php echo get_site_url() ?>/category/<?php echo $i->slug ?>">Arsip <?php echo $i->name ?></a>
                                    </div>
                                    <?php } else { $ii++; ?>
                                        <?php $query->the_post(); ?>
                                        <a href="<?php echo get_permalink() ?>">
                                            <div class="news-minor">
                                                <p class="title"><?php the_title(); ?></p>
                                                <p class="date"><?php echo get_the_date(); ?></p>
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php // link OA  ?>
<section id="official-accounts">
    <div class="section-header">Official Account Himade</div>
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
</section>
<?php
    $srfOptions = get_option('srf-options');

    $parser = function($input) {
        $input = str_replace("<SITE_URL>", get_site_url(), $input);
        $input = str_replace("<TEMPLATE_DIR>", get_bloginfo('template_directory'), $input);
        return $input;
    };

    echo (!empty($srfOptions['fp-body-extra']) ? $parser($srfOptions['fp-body-extra']) : '');
