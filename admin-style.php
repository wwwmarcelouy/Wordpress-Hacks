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
    }
  </style>';
}
