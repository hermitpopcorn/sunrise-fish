<div class="wrap">
    <h1>Sunrise Fish Options</h1>

    <form method="post" action="options.php">
        <?php settings_fields('srf_options'); ?>
        <?php do_settings_sections('srf_options'); ?>
        <?php submit_button(); ?>
    </form>
</div>
