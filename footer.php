            <footer>
                <div class="container">
                    <div class="d-flex flex-wrap">
                        <div class="col-md-2 col-sm-3 col-6 my-auto text-right">
                            <img src="<?php echo get_bloginfo('template_directory');?>/images/logo-himade.png" class="logo">
                        </div>
                        <div class="col-md-2 col-sm-3 col-6 my-auto text-left">
                            <img src="<?php echo get_bloginfo('template_directory');?>/images/logo-kabinet.png" class="logo">
                        </div>
                        <div class="col-md-8 col-sm-6 col-12 my-auto text-left links">
                            <div class="row p-2">
                                <div class="col-md-4 col-sm-6 text-left mt-2 mb-2">
                                    <b class="d-block">Sitemap</b>
                                    <?php $menu_items = wp_get_nav_menu_items("Main Menu"); $parentID = null; ?>
                                    <?php foreach($menu_items as $a) { ?>
                                        <?php if($a->menu_item_parent == $parentID) { ?>
                                            <a class="d-block" href="<?php echo $a->url ?>">&nbsp; <?php echo $a->title ?></a>
                                        <?php } else { ?>
                                            <a class="d-block" href="<?php echo $a->url ?>"><?php echo $a->title ?></a>
                                        <?php $parentID = $a->ID; } ?>
                                    <?php } ?>
                                </div>
                                <div class="col-md-4 col-sm-6 text-left mt-2 mb-2">
                                    <b class="d-block">Social Media</b>
                                    <a class="d-block" href="https://instagram.com/himadeunpad">Instagram</a>
                                    <a class="d-block" href="https://page.line.me/himadeunpad">Line OA</a>
                                </div>
                                <div class="col-md-4 col-sm-6 text-left mt-2 mb-2">
                                    <b class="d-block">Kontak</b>
                                    <a class="d-block" href="mailto:unpadhimade@gmail.com">Email</a>
                                    <br>
                                    <b class="d-block">Alamat</b>
                                    <span class="d-block">Student Center FIB Lantai 1 (depan Gedung D)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container mb-4">
                    <div class="text-center">
                        <span class="copyright">&copy; HIMADE S1 UNPAD 2018</span>
                    </div>
                </div>
            </footer>

            <script src="<?php echo get_bloginfo('template_directory');?>/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo get_bloginfo('template_directory');?>/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="<?php echo get_bloginfo('template_directory');?>/vendor/slick-carousel/slick.min.js"></script>
            <?php wp_footer(); ?>
        </div> <!-- /.container -->
    </body>
</html>
