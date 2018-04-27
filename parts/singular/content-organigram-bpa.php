<?php wp_enqueue_script('js-organigram', get_bloginfo('template_directory').'/app.organigram-bpa.js', array(), false, true); // add script ?>
<article class="page-content organigram pt-3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="title pl-1 pr-1">ORGANIGRAM BADAN PERWAKILAN ANGKATAN</h1>
    <div class="organigram-slider" id="slider-head">
        <div class="switcher">
            <a href="javascript:;" data-part-id="inti" id="launcher-inti">Inti</a>
            <a href="javascript:;" data-part-id="sekretaris-adkem" id="launcher-sekretaris">Sekretaris</a>
            <a href="javascript:;" data-part-id="sekretaris-adkem" id="launcher-adkem">Adkem</a>
            <a href="javascript:;" data-part-id="psdmo-soskem" id="launcher-psdmo">PSDMO</a>
            <a href="javascript:;" data-part-id="psdmo-soskem" id="launcher-soskem">Soskem</a>
            <a href="javascript:;" data-part-id="medfo-bakmi" id="launcher-medfo">Medfo</a>
            <a href="javascript:;" data-part-id="medfo-bakmi" id="launcher-bakmi">Bakmi</a>
            <a href="javascript:;" data-part-id="aspirasi-dpo" id="launcher-aspirasi">Komisi Aspirasi</a>
            <a href="javascript:;" data-part-id="aspirasi-dpo" id="launcher-dpo">DPO</a>
        </div>
        <div class="vertical">
            <img id="part-inti" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/bpa/inti.jpg">
            <img id="part-sekretaris-adkem" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/bpa/sekre-adkem.jpg">
            <img id="part-psdmo-soskem" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/bpa/psdmo-soskem.jpg">
            <img id="part-medfo-bakmi" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/bpa/medfo-bakmi.jpg">
            <img id="part-aspirasi-dpo" src="<?php echo get_bloginfo('template_directory') ?>/images/organigram/bpa/aspirasi-dpo.jpg">
        </div>
    </div>
</article>
