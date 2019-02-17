<nav class="navbar d-lg-block">
    <div class="navbar-header row m-0">
        <div class="col-8 col-lg-6 header-left h-100"></div>
        <div class="col-4 col-lg-6 header-right h-100"></div>
    </div>
    <div class="navbar-menu row m-0">
        <div class="d-none d-lg-block align-items-center w-100">
            <?php wp_nav_menu([
                'menu' => 'main-menu',
                'container' => 'div',
                'container_class' => 'links d-none d-lg-block'
            ]) ?>
        </div>
    </div>
    <a class="toggler d-lg-none" href="javascript:;" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
        Menu
    </a>
    <div class="collapse navbar-collapse d-lg-none" id="navbarToggle">
        <?php wp_nav_menu([
            'menu' => 'mobile-menu',
            'container' => 'div',
            'container_class' => 'mobile-links'
        ]) ?>
    </div>
</nav>
