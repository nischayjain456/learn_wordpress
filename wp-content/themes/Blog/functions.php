<?php


function load_stylesheet()
{


    wp_register_style('font' , get_template_directory_uri()  . '/fonts/beyond_the_mountains-webfont.css', array() ,1 , 'all' );

    wp_enqueue_style('font');


    wp_register_style('icomoon' , get_template_directory_uri()  . '/icomoon/style.css', array() ,1 , 'all' );

    wp_enqueue_style('icomoon');

    wp_register_style('bootstrap' , get_template_directory_uri()  . '/css/bootstrap.min.css', array() ,1 , 'all' );

    wp_enqueue_style('bootstrap');

    wp_register_style('magnific-popup' , get_template_directory_uri()  . '/css/magnific-popup.css', array() ,1 , 'all' );

    wp_enqueue_style('magnific-popup');

    wp_register_style('jquery-ui' , get_template_directory_uri()  . '/css/jquery-ui.css', array() ,1 , 'all' );

    wp_enqueue_style('jquery-ui');

    wp_register_style('owl.carousel' , get_template_directory_uri()  . '/css/owl.carousel.min.css', array() ,1 , 'all' );

    wp_enqueue_style('owl.carousel');

    wp_register_style('owl.theme' , get_template_directory_uri()  . '/css/owl.theme.default.min.css', array() ,1 , 'all' );

    wp_enqueue_style('owl.theme');

    wp_register_style('bootstrap-datepicker' , get_template_directory_uri()  . '/css/bootstrap-datepicker.css', array() ,1 , 'all' );

    wp_enqueue_style('bootstrap-datepicker');

    wp_register_style('fonts' , get_template_directory_uri()  . '/fonts/flaticon/font/flaticon.css', array() ,1 , 'all' );

    wp_enqueue_style('fonts');

    wp_register_style('css/aos' , get_template_directory_uri()  . '/css/aos.css', array() ,1 , 'all' );

    wp_enqueue_style('css/aos');


    wp_register_style('css/style' , get_template_directory_uri()  . '/css/style.css', array() ,1 , 'all' );

    wp_enqueue_style('css/style');

    wp_register_style('Custom' , get_template_directory_uri()  . '/custom.css', array() ,1 , 'all' );

    wp_enqueue_style('custom');


}
add_action('wp_enqueue_scripts', 'load_stylesheet' );




//Load scripts

function addjs()

{

    wp_register_script('jquery' , get_template_directory_uri() . '/js/jquery-3.3.1.min.js' , array(),1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('migrate-3.0.1' , get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js' , array(),1, 1, 1);
    wp_enqueue_script('migrate-3.0.1');

    wp_register_script('jquery-ui' , get_template_directory_uri() . '/js/jquery-ui.js' , array(),1, 1, 1);
    wp_enqueue_script('jquery-ui');

    wp_register_script('popper' , get_template_directory_uri() . '/js/popper.min.js' , array(),1, 1, 1);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap' , get_template_directory_uri() . '/js/bootstrap.min.js' , array(),1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('carousel' , get_template_directory_uri() . '/js/owl.carousel.min.js' , array(),1, 1, 1);
    wp_enqueue_script('carousel');

    wp_register_script('stellar' , get_template_directory_uri() . '/js/jquery.stellar.min.js' , array(),1, 1, 1);
    wp_enqueue_script('stellar');

    wp_register_script('countdown' , get_template_directory_uri() . '/js/jquery.countdown.min.js' , array(),1, 1, 1);
    wp_enqueue_script('countdown');

    wp_register_script('popup' , get_template_directory_uri() . '/js/jquery.magnific-popup.min.js' , array(),1, 1, 1);
    wp_enqueue_script('popup');

    wp_register_script('datepicker' , get_template_directory_uri() . '/js/bootstrap-datepicker.min.js' , array(),1, 1, 1);
    wp_enqueue_script('datepicker');

    wp_register_script('aos' , get_template_directory_uri() . '/js/aos.js' , array(),1, 1, 1);
    wp_enqueue_script('aos');

    wp_register_script('main' , get_template_directory_uri() . '/js/main.js' , array(),1, 1, 1);
    wp_enqueue_script('main');

    wp_register_script('custom' , get_template_directory_uri() . '/custom.js' , array(),1, 1, 1);
    wp_enqueue_script('custom');
}


