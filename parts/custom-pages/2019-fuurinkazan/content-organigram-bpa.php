<?php wp_enqueue_script('js-organigram', get_bloginfo('template_directory').'/app.organigram.js', array(), false, true); // add script ?>
<?php wp_enqueue_style('css-font-futuramdbtbold', get_bloginfo('template_directory').'/font_FuturaMdBTBold.css'); ?>
<article class="page-content organigram k2019-tendou" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="slider">
        <div class="slide">
            <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bpa/landing.jpg"></center>
        </div>
    </div>
    <div class="organigram-slider" id="slider-head">
        <div class="switcher-head">
            Departemen Parlemen Tendō
        </div>
        <div class="switcher">
            <a href="javascript:;" data-slide-id="pimpinan" id="switcher-pimpinan">Inti</a>
            <a href="javascript:;" data-slide-id="aspirasi" id="switcher-aspirasi">Aspirasi</a>
            <a href="javascript:;" data-slide-id="adkem" id="switcher-adkem">Adkem</a>
            <a href="javascript:;" data-slide-id="medfo" id="switcher-medfo">Medfo</a>
            <a href="javascript:;" data-slide-id="bakmi" id="switcher-bakmi">Bakmi</a>
            <a href="javascript:;" data-slide-id="psdmo" id="switcher-psdmo">PSDMO</a>
            <a href="javascript:;" data-slide-id="soskem" id="switcher-soskem">Soskem</a>
            <a href="javascript:;" data-slide-id="dpo" id="switcher-dpo">DPO</a>
        </div>
        <div class="slider">
            <div class="slide" id="slide-pimpinan">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bpa/inti.jpg"></center>
            </div>
            <div class="slide" id="slide-aspirasi">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bpa/aspirasi.jpg"></center>
            </div>
            <div class="slide" id="slide-adkem">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bpa/adkem.jpg"></center>
            </div>
            <div class="slide" id="slide-medfo">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bpa/medfo.jpg"></center>
            </div>
            <div class="slide" id="slide-bakmi">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bpa/bakmi.jpg"></center>
            </div>
            <div class="slide" id="slide-psdmo">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bpa/psdmo.jpg"></center>
            </div>
            <div class="slide" id="slide-soskem">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bpa/soskem.jpg"></center>
            </div>
            <div class="slide" id="slide-dpo">
                <center><img class="max-width-90" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/2019-fuurinkazan/bpa/dpo.jpg"></center>
            </div>
        </div>
    </div>
</article>
