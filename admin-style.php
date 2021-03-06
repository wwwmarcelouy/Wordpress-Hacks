<?php
/**
 * REMOVE Entire Left Side Admin Menu and remove margin-left footer
 */
add_action('admin_head', 'my_custom_admin_css');

function my_custom_admin_css() {
  echo '<style>
    #adminmenuwrap {
        display: none;
    }
    #adminmenuback {
        display: none;
    }
    #wpcontent {
        margin-left: 0;
    }
    #wpfooter {
        margin-left: 0;
    }
  </style>';
}

/**
* View in https://code.tutsplus.com/articles/customizing-the-wordpress-admin-adding-styling--wp-33530
**/

// let's start by enqueuing our styles correctly
function admin_style() {
    wp_register_style( 'admin_stylesheet', plugins_url( '/css/style.css', __FILE__ ) );
    wp_enqueue_style( 'admin_stylesheet' );
}
add_action( 'admin_enqueue_scripts', 'admin_style' );

/**
* View in https://speckyboy.com/20-snippets-and-hacks-to-make-wordpress-user-friendly-for-your-clients/
**/

//change the footer text
function my_admin_footer_text () {
    echo '<img src="' . plugins_url( 'images/wptutsplus-icon.png' , __FILE__ ) . '">By <a href="https://marcelo.uym">INFOCUS</a>.';
}
add_filter( 'admin_footer_text', 'my_admin_footer_text' );

// login page logo
function custom_login_logo() {
	echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/companylogo.png) 50% 50% no-repeat !important; }</style>';
}
add_action('login_head', 'custom_login_logo');

//hook the administrative header output
add_action('admin_head', 'my_custom_logo');

function my_custom_logo() {
echo '
<style type="text/css">
#header-logo { background-image: url('.get_bloginfo('template_directory').'/images/custom-logo.gif) !important; }
</style>
';
}
