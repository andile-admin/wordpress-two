 <?php
 /**
 * @package Ster Kinekor Movie
 */
/*
Plugin Name: Ster Kinekor Movie
Plugin URI: http://yworld.co.za
Description: Provides space where the admin can publish content for the Ster Kinekor Page
Version: 1.0-dev
Author: YFM Dev
Author URI: http://yworld.co.za
*/
/***********************************************************/
// Hooks For The Plugin
/***********************************************************/
register_activation_hook(__FILE__, 'sterkinekor_activation');
register_deactivation_hook(__FILE__, 'sterkinekor_deactivation');
add_action('init', 'ster_kinekor_init');

function sterkinekor_activation() {
	 
	  /*$link = mysqli_connect('localhost','root','', 'ydev_db');
	  if (!$link) {
  	  } else {
	        $query = 'CREATE TABLE sterkinekor_movies (movie_name varchar(255),movie_synopsis varchar(5000),movie_genre varchar(255),movie_director varchar(255),movie_starring varchar(255),movie_video varchar(255)
	        	,movie_booking varchar(255),movie_link varchar(255),also_showing1_image varchar(255), also_showing1_url varchar(255), also_showing2_image varchar(255), also_showing2_url varchar(255)
	        	,also_showing3_image varchar(255), also_showing3_url varchar(255) ,also_showing4_image varchar(255), also_showing4_url varchar(255)
	        	,also_showing5_image varchar(255), also_showing5_url varchar(255) ) '; 
	        $res = mysql_query($query);
	    mysql_close($link);
	  }*/
}

function sterkinekor_deactivation() {
 /*$link = mysqli_connect('localhost','root','');
    if (!$link) {
      } else {

      if(mysql_select_db('ydev_db', $link)) {
          $query = 'DROP TABLE sterkinekor_movies'; 
          $res = mysql_query($query);
            
      }
      mysql_close($link);
    }*/
}



function ster_kinekor_init() {

    $labels = array(
    'name'               => 'Movies',
    'singular_name'      => 'Movie',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Movie',
    'edit_item'          => 'Edit Movie',
    'new_item'           => 'New Movie',
    'all_items'          => 'All Movies',
    'view_item'          => 'View Movie',
    'search_items'       => 'Search Movies',
    'not_found'          => 'No movies found',
    'not_found_in_trash' => 'No movies found in Trash',
    'parent_item_colon'  => '',
    'menu_name' => _x('Ste Kinekor', 'ster_kinekor_post'),

    );

    $args = array( 

       'labels' => $labels,

       'hierarchical' => true,

       'description' => 'Ster Kinekor',

       'supports' => array('title'),

       'public' => true,

       'show_ui' => true,

       'show_in_menu' => true,

       'show_in_nav_menus' => true,

       'publicly_queryable' => true,

       'exclude_from_search' => false,

       'has_archive' => true,

       'query_var' => true,

       'can_export' => true,

       'rewrite' => true,

       'capability_type' => 'post'

    );

    register_post_type('ster_kinekor_post', $args);

}

/************************************/

// Add the Meta Box  
function add_custom_meta_box() {  
    add_meta_box(  
        'sterkinekor_movies_fields', // $id  
        'Ster Kinekor ', // $title   
        'show_custom_meta_box', // $callback  
        'ster_kinekor_post', // $page  
        'normal', // $context  
        'high'); // $priority  
}  
add_action('add_meta_boxes', 'add_custom_meta_box');        

    // Field Array  
    $prefix = 'custom_';  
    $custom_meta_fields = array(  
        array(  
            'label'=> 'Movie Title',  
            'desc'  => 'Enter the name of the movie.',  
            'id'    => $prefix.'text_movie_name',  
            'type'  => 'text'  
        ),  
        array(  
            'label'=> 'Booking Link',  
            'desc'  => 'Enter the link for booking the movie ticket.',  
            'id'    => $prefix.'text_movie_booking',  
            'type'  => 'text'  
        ), 
        array(  
            'label'=> 'Movie Synopsis',  
            'desc'  => 'Enter a synopsis of the movie.',  
            'id'    => $prefix.'textarea_synopsis',  
            'type'  => 'textarea'  
        ),  
        array(  
            'label'=> 'Movie Genre',  
            'desc'  => 'Enter the genre of the movie.',  
            'id'    => $prefix.'text_movie_genre',  
            'type'  => 'text'  
        ), 
        array(  
            'label'=> 'Movie Director',  
            'desc'  => 'Enter the name of the movie director.',  
            'id'    => $prefix.'text_movie_director',  
            'type'  => 'text'  
        ), 
        array(  
            'label'=> 'Starring',  
            'desc'  => 'Enter the actors who are starring in  the movie.',  
            'id'    => $prefix.'textarea_movie_starring',  
            'type'  => 'textarea'  
        ),
        array(  
            'label'=> 'Movie Trailer',  
            'desc'  => 'Enter the id of the movie trailer.',  
            'id'    => $prefix.'text_movie_trailer',  
            'type'  => 'text'  
        ), 
        array(  
            'label'=> 'Also Showing (Movie Links)',  
            'desc'  => 'Enter 6 more links of movies that are also showing. Have each link on its line.',  
            'id'    => $prefix.'textarea_movie_alsoshowing',  
            'type'  => 'textarea'  
        ),
        array(  
            'label'=> 'Also Showing (Image Links)',  
            'desc'  => 'Enter 6 more links of movies that are also showing. Have each link on its line.',  
            'id'    => $prefix.'textarea_movie_alsoshowing_images',  
            'type'  => 'textarea'  
        ),
        array(  
        'name'  => 'Movie Cover Image',  
        'desc'  => 'Make sure this image is 439px X 660px',  
        'id'    => $prefix.'movie_image',  
        'type'  => 'image'  
        )  
        /*array(  
            'label'=> 'Checkbox Input',  
            'desc'  => 'A description for the field.',  
            'id'    => $prefix.'checkbox',  
            'type'  => 'checkbox'  
        ),  
        array(  
            'label'=> 'Select Box',  
            'desc'  => 'A description for the field.',  
            'id'    => $prefix.'select',  
            'type'  => 'select',  
            'options' => array (  
                'one' => array (  
                    'label' => 'Option One',  
                    'value' => 'one'  
                ),  
                'two' => array (  
                    'label' => 'Option Two',  
                    'value' => 'two'  
                ),  
                'three' => array (  
                    'label' => 'Option Three',  
                    'value' => 'three'  
                )  
            )  
        )  */
    );  
 /*if(function_exists( 'wp_enqueue_media' )){
    wp_enqueue_media();
}else{
    wp_enqueue_style('thickbox');
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
}*/
/*function mediaenque(){
    wp_enqueue_media();
}
add_action('custome_upload', 'mediaenque' );*/
wp_enqueue_script('custom-js', '/wp-content/plugins/ster_kinekor/js/custom_image_upload.js');

    // The Callback  
function show_custom_meta_box() {  
global $custom_meta_fields, $post;  
// Use nonce for verification  
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
      
    // Begin the field table and loop  
    echo '<table class="form-table">';  
    foreach ($custom_meta_fields as $field) {  
        // get value of this field if it exists for this post  
        $meta = get_post_meta($post->ID, $field['id'], true);  
        // begin a table row with  
        echo '<tr> 
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th> 
                <td>';  
                switch($field['type']) {  
                    // text  
          case 'text':  
              echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="40" /> 
                  <br /><span class="description">'.$field['desc'].'</span>';  
          break; 

          // textarea  
            case 'textarea':  
                echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="120" rows="6">'.$meta.'</textarea> 
                    <br /><span class="description">'.$field['desc'].'</span>';  
            break;  

            // checkbox  
          case 'checkbox':  
              echo '<input type="checkbox" name="'.$field['id'].'" id="'.$field['id'].'" ',$meta ? ' checked="checked"' : '','/> 
                  <label for="'.$field['id'].'">'.$field['desc'].'</label>';  
          break; 

          // select  
            case 'select':  
                echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';  
                foreach ($field['options'] as $option) {  
                    echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';  
                }  
                echo '</select><br /><span class="description">'.$field['desc'].'</span>';  
            break;  

                // image  
          // image
                case 'image':
                        $image = get_post_meta( get_the_ID(), 'custom_movie_image', true);          
                        /*echo '<div class="meta_box_image"><span class="meta_box_default_image" style="display:none">' . $image . '</span>';
                        if ( $meta ) {
                                $image = wp_get_attachment_image_src( intval( $meta ), 'medium' );
                                $image = $image[0];
                        }  */                              
                        /*echo        '<input name="' . esc_attr( $name ) . '" type="hidden" class="meta_box_upload_image" value="' . intval( $meta ) . '" />
                                                <img src="' . esc_attr( $image ) . '" class="meta_box_preview_image" alt="" />
                                                        <a href="#" class="meta_box_upload_image_button button" rel="' . get_the_ID() . '">Choose Image</a>
                                                        <small>&nbsp;<a href="#" class="meta_box_clear_image_button">Remove Image</a></small></div>
                                                        <br clear="all" />' . $desc;*/
                        //echo $image;
                       echo "<span class='upload'>
        <input type='text' id='custom_movie_image_text' class='regular-text text-upload' name='custom_movie_image' value='".esc_url( $options['custom_movie_image'] )."'/>
        <input type='button' class='button button-upload' rel='" . get_the_ID() . "' name='custom_movie_image' value='Upload an image'/> <span><br/>Make sure Image is 439 x 660</span></br>
        <img style='max-width: 300px; display: block;' src='".esc_url( $options['custom_movie_image'] )."' class='preview-upload'/></span>";
        echo        '<input name="' . esc_attr( $name ) . '" type="hidden" class="meta_box_upload_image" value="' . intval( $meta ) . '" />
                                                <img src="' . $image. '" class="meta_box_preview_image" alt="" width="150px"/>';
                                                $custom_movie_image = get_option( 'custom_movie_image' );

                break;
                // file
                /*case 'file':                
                        $iconClass = 'meta_box_file';
                        if ( $meta ) $iconClass .= ' checked';
                        echo        '<div class="meta_box_file_stuff"><input name="' . esc_attr( $name ) . '" type="hidden" class="meta_box_upload_file" value="' . esc_url( $meta ) . '" />
                                                <span class="' . $iconClass . '"></span>
                                                <span class="meta_box_filename">' . esc_url( $meta ) . '</span>
                                                        <a href="#" class="meta_box_upload_image_button button" rel="' . get_the_ID() . '">Choose File</a>
                                                        <small>&nbsp;<a href="#" class="meta_box_clear_file_button">Remove File</a></small></div>
                                                        <br clear="all" />' . $desc;
                break;*/



                } //end switch  
        echo '</td></tr>';  
    } // end foreach  
    echo '</table>'; // end table  
}  

// Save the Data  
function save_custom_meta($post_id) {  
    global $custom_meta_fields;  
      
    // verify nonce  
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))   
        return $post_id;  
    // check autosave  
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;  
    // check permissions  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
      
    // loop through fields and save the data  
    foreach ($custom_meta_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true);  
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  
            update_post_meta($post_id, $field['id'], $new);  
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old);  
        }  
    } // end foreach  
}  
add_action('save_post', 'save_custom_meta');   

add_action('admin_enqueue_scripts', 'my_admin_scripts');
 
function my_admin_scripts() {
    wp_enqueue_style( 'thickbox' ); // Stylesheet used by Thickbox
    wp_enqueue_script( 'thickbox' );
    wp_enqueue_script( 'media-upload' );
        wp_register_script('custom_image_upload', WP_PLUGIN_URL.'/ster_kinekor/js/custom_image_upload.js', array('jquery'));
        wp_enqueue_script('custom_image_upload');
    
}


function wptuts_section_callback() { /* Print nothing */ };
 
function wptuts_logo_callback() {
    $options = get_option( 'wptuts_options' );
    ?>
    <span class='upload'>
        <input type='text' id='wptuts_logo' class='regular-text text-upload' name='wptuts_options[logo]' value='<?php echo esc_url( $options["logo"] ); ?>'/>
        <input type='button' class='button button-upload' value='Upload an image'/></br>
        <img style='max-width: 300px; display: block;' src='<?php echo esc_url( $options["logo"] ); ?>' class='preview-upload' />
    </span>
    <?php
}
 
function wptuts_favicon_callback() {
    $options = get_option( 'wptuts_options' );
    ?>
    <span class='upload'>
        <input type='text' id='wptuts_favicon' class='regular-text text-upload' name='wptuts_options[favicon]' value='<?php echo esc_url( $options["favicon"] ); ?>'/>
        <input type='button' class='button button-upload' value='Upload an image'/></br>
        <img style='max-width: 300px; display: block;' src='<?php echo esc_url( $options["favicon"] ); ?>' class='preview-upload'/>
    </span>
    <?php
}
//wptuts_logo_callback();
//wptuts_favicon_callback();
?>
