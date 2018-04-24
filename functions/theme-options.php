<?php
/**
* Custom theme options
*/
class SrfThemeOptions
{
    /**
    * Holds the values to be used in the fields callbacks
    */
    private $options;

    /**
    * Start up
    */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    /**
    * Add options page
    */
    public function add_plugin_page()
    {
        // This page will be under "Settings"
        add_options_page(
            'Theme Settings',
            'Sunrise Fish Options',
            'manage_options',
            'sunrisefish-options',
            array( $this, 'create_admin_page' )
        );
    }

    /**
    * Options page callback
    */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option('srf-options');
        ?>
        <div class="wrap">
            <h1>Sunrise Fish Theme Options</h1>
            <form method="post" action="options.php">
                <?php
                settings_fields( 'srf-option-group' );
                do_settings_sections( 'sunrisefish-options' );
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }

    /**
    * Register and add settings
    */
    public function page_init()
    {
        register_setting(
            'srf-option-group',
            'srf-options',
            array( $this, 'sanitize' )
        );

        add_settings_section(
            'slider-settings',
            'Front Page Slider Settings',
            array($this),
            'sunrisefish-options' // Page
        );

        add_settings_field(
            'slider-content', // ID
            'Content Body', // Title
            array($this, 'slider_content_callback'), // Callback
            'sunrisefish-options', // Page
            'slider-settings' // Section
        );
    }

    public function sanitize($input)
    {
        // none for now
        return $input;
    }

    public function slider_content_callback() {
        printf(
            '<textarea id="slider-content" name="srf-options[slider-content]" rows="10" style="width: 100%%">%s</textarea>',
            isset( $this->options['slider-content'] ) ? $this->options['slider-content'] : ''
        );
    }
}

if(is_admin()) {
    $my_settings_page = new SrfThemeOptions();
}
