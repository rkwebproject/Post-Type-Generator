<?php
// Register Custom Post Type
class Generate_Custom_Post_Type {

   protected  $post_types = array();
   
   /**
    * Constructor.
    */
    
   public function __construct($arg=array()) {
        $post_types = $arg;
        add_action('init', array( $this, 'generate_post_types' ), 0);
   }
   
function generate_post_types() {
   foreach($post_types as $post_type) {
      $labels = array(
         'name'                  => _x($post_type['title'], 'Post Type General Name', 'text_domain'),
         'singular_name'         => _x($post_type['title'], 'Post Type Singular Name', 'text_domain'),
         'menu_name'             => __($post_type['title'], 'text_domain'),
         'name_admin_bar'        => __($post_type['title'], 'text_domain'),
         'archives'              => __($post_type['title']. ' Archives', 'text_domain'),
         'attributes'            => __($post_type['title'].' Attributes', 'text_domain'),
         'parent_item_colon'     => __('Parent '.$post_type['title'].':', 'text_domain'),
         'all_items'             => __('All '.$post_type['plural_title'], 'text_domain'),
         'add_new_item'          => __('Add New '.$post_type['title'], 'text_domain'),
         'add_new'               => __('Add New', 'text_domain'),
         'new_item'              => __('New '.$post_type['title'], 'text_domain'),
         'edit_item'             => __('Edit '.$post_type['title'], 'text_domain'),
         'update_item'           => __('Update '.$post_type['title'], 'text_domain'),
         'view_item'             => __('View '.$post_type['title'], 'text_domain'),
         'view_items'            => __('View '.$post_type['plural_title'], 'text_domain'),
         'search_items'          => __('Search '.$post_type['title'], 'text_domain'),
         'not_found'             => __('Not found', 'text_domain'),
         'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
         'featured_image'        => __('Featured Image', 'text_domain'),
         'set_featured_image'    => __('Set featured image', 'text_domain'),
         'remove_featured_image' => __('Remove featured image', 'text_domain'),
         'use_featured_image'    => __('Use as featured image', 'text_domain'),
         'insert_into_item'      => __('Insert into '.$post_type['title'], 'text_domain'),
         'uploaded_to_this_item' => __('Uploaded to this '.$post_type['title'], 'text_domain'),
         'items_list'            => __($post_type['plural_title'].' list', 'text_domain'),
         'items_list_navigation' => __($post_type['plural_title'].' list navigation', 'text_domain'),
         'filter_items_list'     => __('Filter '.$post_type['plural_title'].' list', 'text_domain'),
      );
      $args = array(
         'label'               => __($post_type['title'], 'text_domain'),
         'description'         => __($post_type['title'].' Description', 'text_domain'),
         'labels'              => $labels,
         'supports'            => $post_type['supports'],
         'taxonomies'          => isset($post_type['taxonomies'])?$post_type['taxonomies']:array(),
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'menu_position'       => 10,
         'show_in_admin_bar'   => true,
         'show_in_nav_menus'   => true,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'page',
      );
      register_post_type($post_type['post_type'], $args);
   }
}


}
/*
   $post_types = array();
   $post_types[] = array(
        "post_type"=>"your-post-type", 
        "title"=>"Your Post Title", 
        "plural_title"=>"Your Post plural",  
        'supports'=> array( 
                        'title', 
                        'editor', 
                        'excerpt', 
                        'author', 
                        'thumbnail', 
                        'comments', 
                        'trackbacks', 
                        'revisions', 
                        'custom-fields', 
                        'page-attributes', 
                        'post-formats', 
                        'taxonomies'=>array("category")
                        )
        );
        
  new Generate_Custom_Post_Type($arg);
  */
      
       
