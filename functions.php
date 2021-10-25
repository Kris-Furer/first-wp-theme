<?php
// Theme Supporters// turn on theme support
add_theme_support('post-thumbnails');
add_theme_support('woocommerce');

// Menus
register_nav_menus(['primary'=> 'primary']);
register_nav_menus(['footer'=> 'footer']);

  function custom_theme_assets() {
  wp_enqueue_style('my-custom-style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'custom_theme_assets');



//  ::::::::::::::::::::::::::  Blog Functionality:::::::::::::::::::::::::::::::::::::::::::::::
// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

  // Create blog post_type
  function create_blog_posttype() {
    // set up the arguments
    $args = array(
      'labels' => array(
        //name of the post type
        'name' => 'blog',
        'singular_name' => 'post'
      ),
      'public' => true,
      'menu_icon' => 'dashicons-carrot',
      'supports' => array('title', 'editor', 'thumbnail')
    );
    // Within our function, we need to register the post type
    register_post_type('blog', $args);
  }
  add_action('init','create_blog_posttype');


// Add metabox:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
  function add_blog_metabox(){
    add_meta_box(
      'blog_metabox', // id in dashboard
      'Our First Metabox', // title seen in the dashboard
      'blog_metabox_callback', // callback function to run and render the elements
      'blog', // custom post type to attach it //
      'normal' // position (normal, or side)
    );
  }

  function blog_metabox_callback($post){
    $blurb_data = get_post_meta($post->ID, 'blurb_input', true);

        // blurb
    echo '<label for "blurb">Blurb</label>' .
         '<input text="text" id="blurb_input" class="metabox_input" name="blurb_input" value="'. $blurb_data .'" size="50">';
  }

  // run our metabox function during the admin_menu WP function
  add_action('admin_menu','add_blog_metabox');

  // save our fruit metabox

  function blog_save_metabox_data($post_id, $post){
    // check current permissions of the user
    $post_type = get_post_type_object($post->post_type);
    if(! current_user_can($post_type->cap->edit_post, $post_id)){
      return $post_id;
    }
    // do not save the data if WP is autosaving
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return $post_id;
    }
    if ($post->post_type != 'blog'){
      return $post_id;
    }
    if(isset($_POST['blurb_input'])){
      update_post_meta($post_id, 'blurb_input', sanitize_text_field($_POST['blurb_input']));
    }else {
      delete_post_meta($post_id, 'blurb_input');
    }

    return $post_id;
  }

  add_action('save_post', 'blog_save_metabox_data', 10, 2);





  //  ::::::::::::::::::::::::::  Supporters Functionality:::::::::::::::::::::::::::::::::::::::::
  // ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
function create_supporter_posttype() {
  // set up the arguments
  $args = array(
    'labels' => array(
      //name of the post type
      'name' => 'Supporters',
      'singular_name' => 'supporter'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-megaphone',
    'supports' => array('title', 'editor', 'thumbnail')
  );
  // Within our function, we need to register the post type
  register_post_type('supporters', $args);
}

add_action('init','create_supporter_posttype');


// Create Taxonomy
function create_Posttype_taxonomy() {
  $labels = array(
    'name' => 'Posttype',
    'singular_name' => 'Posttype',
    'search_items' => 'Search Postype',
    'all_items' => 'All Postypes',
    'parent_item' => 'Parent Posttype',
    'parent_item_colon' => 'Parent Posttype:',
    'edit_item' => 'Edit Posttype',
    'update_item' => 'Update Posttype',
    'add_new_item' => 'Add New Posttype',
    'new_item_name' => 'New Posttype Name',
    'menu_name' => 'Posttype'
  );
  // register the taxonomy
  register_taxonomy(
    'Posttype', array('blog'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true
    )
  );
}

// hook in our action to set up our custom taxonomy
add_action('init','create_Posttype_taxonomy', 0);







?>
