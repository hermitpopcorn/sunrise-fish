<div class="nav-header">
    <h1 class="logo">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/header-logo.png">
        </a>
    </h1>
    <div class="stripe">
        <?php wp_nav_menu([
            'menu' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'nav'
        ]) ?>
    </div>
</div>
