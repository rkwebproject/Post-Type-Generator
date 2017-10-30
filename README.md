# Post-Type-Generator
Generate multiple Post Type


Include post_type.php in your theme function file 


Add this code to function

<pre>$arg= array(
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
</pre>
