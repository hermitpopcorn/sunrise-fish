<nav class="navbar d-lg-block">
    <h1 class="logo">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/logo-himade.png">
        </a>
    </h1>
    <button type="button" class="toggler btn btn-sm d-lg-none" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
        Menu
    </button>
    <div class="bottom">
        <?php wp_nav_menu([
            'menu' => 'main-menu',
            'container' => 'div',
            'container_class' => 'links d-none d-lg-block'
        ]) ?>
    </div>
    <div class="collapse navbar-collapse d-lg-none" id="navbarToggle">
        <?php wp_nav_menu([
            'menu' => 'mobile-menu',
            'container' => 'div',
            'container_class' => 'mobile-links'
        ]) ?>
    </div>
</nav>
<!--
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggle">
            <a class="navbar-brand" href="#">Hidden brand</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
-->
