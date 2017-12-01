<?php

  namespace SettlementCalculator\Library;

  class Settings {

    public function __construct(){
      add_action( 'admin_init', array($this, 'settings_init') );
      add_action( 'admin_menu', array($this, 'options_page' ) );
    }


    /**
     * custom option and settings
     */

    public function settings_init() {

     register_setting( 'settcalc', 'settcalc_options' );

     add_settings_section(
     'settcalc_section_developers',
     __( 'Getting Started:', 'settcalc' ),
     array($this,'section_developers_cb'),
     'settcalc'
     );

     add_settings_field(
       'settcalc_field_phonelabel',
       __( 'Phone Number Label', 'settcalc' ),
       array($this,'field_phonelabel_cb'),
       'settcalc',
       'settcalc_section_developers',
       [
       'label_for' => 'settcalc_field_phonelabel',
       'class' => 'settcalc_row',
       'settcalc_custom_data' => 'custom',
       ]
     );

     add_settings_field(
       'settcalc_field_phonenumber',
       __( 'Phone Number', 'settcalc' ),
       array($this,'field_phonenumber_cb'),
       'settcalc',
       'settcalc_section_developers',
       [
       'label_for' => 'settcalc_field_phonenumber',
       'class' => 'settcalc_row',
       'settcalc_custom_data' => 'custom',
       ]
     );



     add_settings_field(
       'settcalc_field_contact',
       __( 'Contact Page Link', 'settcalc' ),
       array($this,'field_contact_cb'),
       'settcalc',
       'settcalc_section_developers',
       [
       'label_for' => 'settcalc_field_contact',
       'class' => 'settcalc_row',
       'settcalc_custom_data' => 'custom',
       ]
     );



    }

    function field_phonelabel_cb( $args ) {

     $options = get_option( 'settcalc_options' );

     ?>
     <input
      id="<?php echo esc_attr( $args['label_for'] ); ?>"
      data-custom="<?php echo esc_attr( $args['settcalc_custom_data'] ); ?>"
      name="settcalc_options[<?php echo esc_attr( $args['label_for'] ); ?>]"
      type="text" value="<?php echo $options[ $args['label_for'] ]; ?>"
      placeholder="1(800)555-5555"
      />

      <p class="description">
      <?php esc_html_e( 'Enter the phone number you want to appear on the "Speak To An Attorney Now" button. Enter this number exactly as you want it to show on the label. ', 'settcalc' ); ?>
      </p>
     <?php

    }

    function field_phonenumber_cb( $args ) {

     $options = get_option( 'settcalc_options' );

     ?>
     <input
      id="<?php echo esc_attr( $args['label_for'] ); ?>"
      data-custom="<?php echo esc_attr( $args['settcalc_custom_data'] ); ?>"
      name="settcalc_options[<?php echo esc_attr( $args['label_for'] ); ?>]"
      type="text" value="<?php echo $options[ $args['label_for'] ]; ?>"
      placeholder="1-800-555-5555"
      />

      <p class="description">
      <?php esc_html_e( "This is the actual numbers that will be dialed by the user's phone. Make sure this is the entire 10 digit number with dashes and no other symbols. ", 'settcalc' ); ?>
      </p>
     <?php

    }



    function field_contact_cb( $args ) {

     $options = get_option( 'settcalc_options' );

     ?>
     <?php echo site_url();?>/<input
      id="<?php echo esc_attr( $args['label_for'] ); ?>"
      data-custom="<?php echo esc_attr( $args['settcalc_custom_data'] ); ?>"
      name="settcalc_options[<?php echo esc_attr( $args['label_for'] ); ?>]"
      type="text" value="<?php echo $options[ $args['label_for'] ]; ?>"
      placeholder="contact"
      />

      <p class="description">
      <?php esc_html_e( 'Enter the link to your contact page. This is the page that users will be directed to when they click on the "Have An Attorney Call You" button. ', 'settcalc' ); ?>
      </p>
     <?php

    }





    public function section_developers_cb( $args ) {
     ?>
     <p id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'You can display an injury settlement calculator anywhere on your wordpress site by using the following shortcode anywhere in the content section of your page.', 'settcalc' ); ?></p>
     [settlement_calculator]
     <?php
    }



    /**
     * top level menu
     */
    public function options_page() {
     // add top level menu page
     add_menu_page(
     'Settlement Calculator',
     'Settlement Calculator Options',
     'manage_options',
     'settcalc',
     array($this, 'options_page_html')
     );
    }



    /**
     * top level menu:
     * callback functions
     */
    public function options_page_html() {
     // check user capabilities
     if ( ! current_user_can( 'manage_options' ) ) {
     return;
     }

     // add error/update messages

     // check if the user have submitted the settings
     // wordpress will add the "settings-updated" $_GET parameter to the url
     if ( isset( $_GET['settings-updated'] ) ) {
     // add settings saved message with the class of "updated"
     add_settings_error( 'settcalc_messages', 'settcalc_message', __( 'Settings Saved', 'settcalc' ), 'updated' );
     }

     // show error/update messages
     settings_errors( 'settcalc_messages' );
     ?>
     <div class="wrap">
     <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
     <form action="options.php" method="post">
     <?php
     // output security fields for the registered setting "wporg"
     settings_fields( 'settcalc' );
     // output setting sections and their fields
     // (sections are registered for "wporg", each field is registered to a specific section)
     do_settings_sections( 'settcalc' );
     // output save settings button
     submit_button( 'Save Settings' );
     ?>
     </form>
     </div>
     <?php
    }


  }

 ?>


 <?php
