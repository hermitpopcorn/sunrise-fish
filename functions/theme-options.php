<?php

add_action('admin_init', 'srf_options_init');
add_action('admin_menu', 'srf_options_add_page');

function srf_options_init()
{
    register_setting('srf_options', 'srf_options', 'srf_validate');

    $sections = srf_options_form_sections();
    if(!empty($sections)) {
        foreach($sections as $id => $title) {
            add_settings_section($id, $title, null, 'srf_options');
        }
    }

    $fields = srf_options_form_fields();
    if(!empty($fields)){
        foreach($fields as $option) {
            srf_create_settings_field($option);
        }
    }
}

function srf_validate($input)
{
    return array();
}

function srf_options_add_page()
{
    add_theme_page(__('Theme Options', 'srf'), __('Theme Options', 'srf'), 'edit_theme_options', 'srf_options', 'srf_options_do_page');
}

function srf_options_do_page()
{
    require('theme-options__form.php');
}

/**
 * Define our settings sections
 *
 * array key=$id, array value=$title in: add_settings_section( $id, $title, $callback, $page );
 * @return array
 */
function srf_options_form_sections() {

    $sections = array();
    // $sections[$id]       = __($title, 'srf_textdomain');
    $sections['txt_section']    = __('Text Form Fields', 'srf_textdomain');
    $sections['txtarea_section']    = __('Textarea Form Fields', 'srf_textdomain');
    $sections['select_section']     = __('Select Form Fields', 'srf_textdomain');
    $sections['checkbox_section']   = __('Checkbox Form Fields', 'srf_textdomain');

    return $sections;
}

/**
 * Helper function for registering our form field settings
 *
 * src: http://alisothegeek.com/2011/01/wordpress-settings-api-tutorial-1/
 * @param (array) $args The array of arguments to be used in creating the field
 * @return function call
 */
function srf_create_settings_field($args = array()) {
    // default array to overwrite when calling the function
    $defaults = array(
        'id'      => 'default_field',                    // the ID of the setting in our options array, and the ID of the HTML form element
        'title'   => 'Default Field',                    // the label for the HTML form element
        'desc'    => 'This is a default description.',  // the description displayed under the HTML form element
        'std'     => '',                                 // the default value for this setting
        'type'    => 'text',                             // the HTML form element to use
        'section' => 'main_section',                     // the section this setting belongs to — must match the array key of a section in srf_options_form_sections()
        'choices' => array(),                            // (optional): the values in radio buttons or a drop-down menu
        'class'   => ''                                  // the HTML form element class. Also used for validation purposes!
    );

    // "extract" to be able to use the array keys as variables in our function output below
    extract(wp_parse_args($args, $defaults));

    // additional arguments for use in form field output in the function srf_form_field_fn!
    $field_args = array(
        'type'      => $type,
        'id'        => $id,
        'desc'      => $desc,
        'std'       => $std,
        'choices'   => $choices,
        'label_for' => $id,
        'class'     => $class
    );

    add_settings_field($id, $title, 'srf_form_field_fn', 'srf_options', $section, $field_args);
}

/**
 * Define our form fields (settings)
 *
 * @return array
 */
function srf_options_form_fields() {
    // Text Form Fields section
    $options[] = array(
        "section" => "txt_section",
        "id"      => "srf_txt_input",
        "title"   => __( 'Text Input - Some HTML OK!', 'srf_textdomain' ),
        "desc"    => __( 'A regular text input field. Some inline HTML (<a>, <b>, <em>, <i>, <strong>) is allowed.', 'srf_textdomain' ),
        "type"    => "text",
        "std"     => __('Some default value','srf_textdomain')
    );

    $options[] = array(
        "section" => "txt_section",
        "id"      => "srf_nohtml_txt_input",
        "title"   => __( 'No HTML!', 'srf_textdomain' ),
        "desc"    => __( 'A text input field where no html input is allowed.', 'srf_textdomain' ),
        "type"    => "text",
        "std"     => __('Some default value','srf_textdomain'),
        "class"   => "nohtml"
    );

    $options[] = array(
        "section" => "txt_section",
        "id"      => "srf_numeric_txt_input",
        "title"   => __( 'Numeric Input', 'srf_textdomain' ),
        "desc"    => __( 'A text input field where only numeric input is allowed.', 'srf_textdomain' ),
        "type"    => "text",
        "std"     => "123",
        "class"   => "numeric"
    );

    $options[] = array(
        "section" => "txt_section",
        "id"      => "srf_multinumeric_txt_input",
        "title"   => __( 'Multinumeric Input', 'srf_textdomain' ),
        "desc"    => __( 'A text input field where only multible numeric input (i.e. comma separated numeric values) is allowed.', 'srf_textdomain' ),
        "type"    => "text",
        "std"     => "123,234,345",
        "class"   => "multinumeric"
    );

    $options[] = array(
        "section" => "txt_section",
        "id"      => "srf_url_txt_input",
        "title"   => __( 'URL Input', 'srf_textdomain' ),
        "desc"    => __( 'A text input field which can be used for urls.', 'srf_textdomain' ),
        "type"    => "text",
        "std"     => "http://wp.tutsplus.com",
        "class"   => "url"
    );

    $options[] = array(
        "section" => "txt_section",
        "id"      => "srf_email_txt_input",
        "title"   => __( 'Email Input', 'srf_textdomain' ),
        "desc"    => __( 'A text input field which can be used for email input.', 'srf_textdomain' ),
        "type"    => "text",
        "std"     => "email@email.com",
        "class"   => "email"
    );

    $options[] = array(
        "section" => "txt_section",
        "id"      => "srf_multi_txt_input",
        "title"   => __( 'Multi-Text Inputs', 'srf_textdomain' ),
        "desc"    => __( 'A group of text input fields', 'srf_textdomain' ),
        "type"    => "multi-text",
        "choices" => array( __('Text input 1','srf_textdomain') . "|txt_input1", __('Text input 2','srf_textdomain') . "|txt_input2", __('Text input 3','srf_textdomain') . "|txt_input3", __('Text input 4','srf_textdomain') . "|txt_input4"),
        "std"     => ""
    );

    // Textarea Form Fields section
    $options[] = array(
        "section" => "txtarea_section",
        "id"      => "srf_txtarea_input",
        "title"   => __( 'Textarea - HTML OK!', 'srf_textdomain' ),
        "desc"    => __( 'A textarea for a block of text. HTML tags allowed!', 'srf_textdomain' ),
        "type"    => "textarea",
        "std"     => __('Some default value','srf_textdomain')
    );

    $options[] = array(
        "section" => "txtarea_section",
        "id"      => "srf_nohtml_txtarea_input",
        "title"   => __( 'No HTML!', 'srf_textdomain' ),
        "desc"    => __( 'A textarea for a block of text. No HTML!', 'srf_textdomain' ),
        "type"    => "textarea",
        "std"     => __('Some default value','srf_textdomain'),
        "class"   => "nohtml"
    );

    $options[] = array(
        "section" => "txtarea_section",
        "id"      => "srf_allowlinebreaks_txtarea_input",
        "title"   => __( 'No HTML! Line breaks OK!', 'srf_textdomain' ),
        "desc"    => __( 'No HTML! Line breaks allowed!', 'srf_textdomain' ),
        "type"    => "textarea",
        "std"     => __('Some default value','srf_textdomain'),
        "class"   => "allowlinebreaks"
    );

    $options[] = array(
        "section" => "txtarea_section",
        "id"      => "srf_inlinehtml_txtarea_input",
        "title"   => __( 'Some Inline HTML ONLY!', 'srf_textdomain' ),
        "desc"    => __( 'A textarea for a block of text.
            Only some inline HTML
            (<a>, <b>, <em>, <strong>, <abbr>, <acronym>, <blockquote>, <cite>, <code>, <del>, <q>, <strike>)
            is allowed!', 'srf_textdomain' ),
        "type"    => "textarea",
        "std"     => __('Some default value','srf_textdomain'),
        "class"   => "inlinehtml"
    );

    // Select Form Fields section
    $options[] = array(
        "section" => "select_section",
        "id"      => "srf_select_input",
        "title"   => __( 'Select (type one)', 'srf_textdomain' ),
        "desc"    => __( 'A regular select form field', 'srf_textdomain' ),
        "type"    => "select",
        "std"    => "3",
        "choices" => array( "1", "2", "3")
    );

    $options[] = array(
        "section" => "select_section",
        "id"      => "srf_select2_input",
        "title"   => __( 'Select (type two)', 'srf_textdomain' ),
        "desc"    => __( 'A select field with a label for the option and a corresponding value.', 'srf_textdomain' ),
        "type"    => "select2",
        "std"    => "",
        "choices" => array( __('Option 1','srf_textdomain') . "|opt1", __('Option 2','srf_textdomain') . "|opt2", __('Option 3','srf_textdomain') . "|opt3", __('Option 4','srf_textdomain') . "|opt4")
    );

    // Checkbox Form Fields section
    $options[] = array(
        "section" => "checkbox_section",
        "id"      => "srf_checkbox_input",
        "title"   => __( 'Checkbox', 'srf_textdomain' ),
        "desc"    => __( 'Some Description', 'srf_textdomain' ),
        "type"    => "checkbox",
        "std"     => 1 // 0 for off
    );

    $options[] = array(
        "section" => "checkbox_section",
        "id"      => "srf_multicheckbox_inputs",
        "title"   => __( 'Multi-Checkbox', 'srf_textdomain' ),
        "desc"    => __( 'Some Description', 'srf_textdomain' ),
        "type"    => "multi-checkbox",
        "std"     => '',
        "choices" => array( __('Checkbox 1','srf_textdomain') . "|chckbx1", __('Checkbox 2','srf_textdomain') . "|chckbx2", __('Checkbox 3','srf_textdomain') . "|chckbx3", __('Checkbox 4','srf_textdomain') . "|chckbx4")
    );

    return $options;
}
