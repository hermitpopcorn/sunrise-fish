<nav class="navbar d-lg-block">
    <div class="navbar-header row m-0">
        <div class="col-8 col-lg-6 header-left h-100">
        </div>
        <div class="col-4 col-lg-6 header-right h-100">
            <div class="bottom d-none d-lg-block">
                <?php wp_nav_menu([
                    'menu' => 'main-menu',
                    'container' => 'div',
                    'container_class' => 'links d-none d-lg-block'
                ]) ?>
            </div>
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
