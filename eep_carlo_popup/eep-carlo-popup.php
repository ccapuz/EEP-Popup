<?php
/**
Plugin Name: EEP Carlo Popup
Plugin URI: http://www.easyeventplanning.com
Description: EasyEventPlanning Sweet Alert 2 Popup.
Version: 1.0
Author: Easy Event Planning (Carlo)
License: GPLv2 or later
**/

// function eep_popup_load_scripts(){
//     wp_register_script('eep_popup_script', JS_FILE, array('jquery'), NULL, true );
//     wp_enqueue_script('eep_popup_script');
// }
// add_action('wp_enqueue_scripts', 'eep_popup_load_scripts');

function show_eep_custom_popup( $atts, $content = null ) {
    // $atts, $content = null
    echo "<button id='email_list'>Test Popup</button>";
    //echo 'After creating the popup (from the plugin you created), you must generate a code to identify it, this generated code must arrive here and with this code you will know the information and the popup it should show.';
  }
  add_shortcode( 'show_eep_custom_popup', 'show_eep_custom_popup' );
  
  //show popup (where we want the button that opens the popup to be displayed)
  //do_shortcode( '[show_eep_custom_popup('norm')]' );
?>

<!-- <script src="/wp-includes/js/jquery-3.5.1.min.js"></script>
<script src="/wp-includes/js/sweetalert2.all.min.js"></script> -->

<!-- <script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/sweetalert2.all.min.js"></script> -->

<!-- Jquery and Sweet Alert 2 Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
    $(document).ready(function() {
        // Email list popup
        $('#email_list').on('click', function(){
            (async () => {

            const { value: email } = await Swal.fire({
                title: 'Sign up for our newsletter!',
                input: 'email',
                inputPlaceholder: 'Enter your email address',
                imageUrl: 'https://ezeventplanning.net/wp-content/uploads/2020/03/logo-smaller-1024x322.png',
                imageWidth: 300,
                imageHeight: 100,
                showCloseButton: true,
                imageAlt: 'EasyEventPlanning'
                })
            // Validates if email is legit
            if (email) {
                Swal.fire({
                    title: `Thank you for signing up for our newsletter!`,
                    imageUrl: 'https://ezeventplanning.net/wp-content/uploads/2020/03/logo-smaller-1024x322.png'
                })
            }
            })()
        })

        // Normal popup
        $('#norm').on('click', function(){
            Swal.fire({
            icon: 'info',
            title: 'Testing..',
            text: 'This is a test!',
            footer: '<a href="https://www.easyeventplanning.com/" target="_blank">A link where you can add stuff..</a>'
            })
        })
    });
</script>