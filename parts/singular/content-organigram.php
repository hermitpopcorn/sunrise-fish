<?php wp_enqueue_script('js-organigram', get_bloginfo('template_directory').'/app.organigram.js', array(), false, true); // add script ?>
<?php wp_enqueue_style('css-font-futuramdbtbold', get_bloginfo('template_directory').'/font_FuturaMdBTBold.css'); ?>
<article class="page-content organigram pt-3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="title pl-1 pr-1">PROFIL KABINET KOIYA</h1>
    <div class="organigram-slider" id="slider-head">
        <div class="switcher">
            <a href="javascript:;" data-slide-id="pimpinan" id="switcher-pimpinan">Pimpinan</a>
            <a href="javascript:;" data-slide-id="kestari" id="switcher-kestari">Kestari</a>
            <a href="javascript:;" data-slide-id="keuangan" id="switcher-keuangan">Keuangan</a>
            <a href="javascript:;" data-slide-id="adkem" id="switcher-adkem">Adkem</a>
            <a href="javascript:;" data-slide-id="medfo" id="switcher-medfo">Medfo</a>
            <a href="javascript:;" data-slide-id="bakmi" id="switcher-bakmi">Bakmi</a>
            <a href="javascript:;" data-slide-id="psdmo" id="switcher-psdmo">PSDMO</a>
            <a href="javascript:;" data-slide-id="soskem" id="switcher-soskem">Soskem</a>
        </div>
        <div class="slider">
            <div class="slide" id="slide-pimpinan">
                <img src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/pimpinan.jpg">
            </div>
            <div class="slide" id="slide-kestari">
                <img src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/kestari.jpg">
            </div>
            <div class="slide" id="slide-keuangan">
                <img src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/keuangan.jpg">
            </div>
            <div class="slide" id="slide-adkem">
                <img src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/adkem.jpg">
            </div>
            <div class="slide" id="slide-medfo">
                <img src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/medfo.jpg">
            </div>
            <div class="slide" id="slide-bakmi">
                <img src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/bakmi.jpg">
            </div>
            <div class="slide" id="slide-psdmo">
                <img src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/psdmo.jpg">
            </div>
            <div class="slide" id="slide-soskem">
                <img src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/soskem.jpg">
            </div>
        </div>
    </div>
</article>
