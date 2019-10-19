<?php wp_enqueue_script('js-organigram', get_bloginfo('template_directory').'/app.organigram.js', array(), false, true); // add script ?>
<?php wp_enqueue_style('css-font-futuramdbtbold', get_bloginfo('template_directory').'/font_FuturaMdBTBold.css'); ?>
<article class="page-content organigram k2019-fuurinkazan" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="slider">
        <div class="slide">
            <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bph/landing.jpg"></center>
        </div>
    </div>
    <div class="organigram-slider" id="slider-head">
        <div class="switcher-head">
            Departemen Kabinet Fūrinkazan
        </div>
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
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bph/pimpinan.jpg"></center>
            </div>
            <div class="slide" id="slide-kestari">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bph/kestari.jpg"></center>
            </div>
            <div class="slide" id="slide-keuangan">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bph/keuangan.jpg"></center>
            </div>
            <div class="slide" id="slide-adkem">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bph/adkem.jpg"></center>
            </div>
            <div class="slide" id="slide-medfo">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bph/medfo.jpg"></center>
            </div>
            <div class="slide" id="slide-bakmi">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bph/bakmi.jpg"></center>
            </div>
            <div class="slide" id="slide-psdmo">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bph/psdmo.jpg"></center>
            </div>
            <div class="slide" id="slide-soskem">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bph/soskem.jpg"></center>
            </div>
        </div>
    </div>
</article>
