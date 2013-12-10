 <?php
 /**
 * @package The Playroom 
 */
/*
Plugin Name: The Playroom 
Plugin URI: http://yworld.co.za
Description: Provides space where the admin can publish content for the Ster Kinekor Page
Version: 1.0-dev
Author: YFM Dev
Author URI: http://yworld.co.za
*/
/***********************************************************/
// Hooks For The Plugin
/***********************************************************/
register_activation_hook(__FILE__, 'playroom_activation');
register_deactivation_hook(__FILE__, 'playroom_deactivation');
add_action('init', 'the_playroom_init');

function playroom_activation() {
	 
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

function playroom_deactivation() {
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



function the_playroom_init() {

    $labels = array(
    'name'               => 'Playroom',
    'singular_name'      => 'Games',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Game',
    'edit_item'          => 'Edit Game',
    'new_item'           => 'New Game',
    'all_items'          => 'All Game',
    'view_item'          => 'View Game',
    'search_items'       => 'Search Game',
    'not_found'          => 'No Game found',
    'not_found_in_trash' => 'No Game found in Trash',
    'parent_item_colon'  => '',
    'menu_name' => _x('The Playroom', 'the_playroom_post'),

    );

    $args = array( 

       'labels' => $labels,

       'hierarchical' => true,

       'description' => 'The Playroom',

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

    register_post_type('the_playroom_post', $args);

}

/************************************/

// Add the Meta Box  
function add_custom_meta_box() {  
    add_meta_box(  
        'the_playroom_fields', // $id  
        'The Playroom', // $title   
        'show_custom_meta_box', // $callback  
        'the_playroom_post', // $page  
        'normal', // $context  
        'high'); // $priority  
}  
add_action('add_meta_boxes', 'add_custom_meta_box');        

    // Field Array  
    $prefix = 'custom_';  
    $custom_meta_fields = array(  
        array(  
            'label'=> 'Game Title',  
            'desc'  => 'Enter the name of the game.',  
            'id'    => $prefix.'text_game_name',  
            'type'  => 'text'  
        ),  
        /*array(  
            'label'=> 'Booking Link',  
            'desc'  => 'Enter the link for booking the movie ticket.',  
            'id'    => $prefix.'text_movie_booking',  
            'type'  => 'text'  
        ),*/ 
        array(  
            'label'=> 'Game Teaser',  
            'desc'  => 'Enter game teaser.',  
            'id'    => $prefix.'textarea_teaser',  
            'type'  => 'text'  
        ), 
        array(  
            'label'=> 'Game Intro',  
            'desc'  => 'Enter game intro.',  
            'id'    => $prefix.'textarea_intro',  
            'type'  => 'textarea'  
        ),
        array(  
            'label'=> 'Game Full Content',  
            'desc'  => 'Enter game Full Content.<br><br><strong>Rating</strong>',  
            'id'    => $prefix.'textarea_full_content',  
            'type'  => 'textarea'  
        ),    
        array(  
            'label'=> 'Rating: Overall Rating',  
            'desc'  => 'Overall rating (number between 1 and 5).',  
            'id'    => $prefix.'text_overall_rating',  
            'type'  => 'text'  
        ),
        array(  
            'label'=> 'Graphics Rating',  
            'desc'  => 'Graphics rating (number between 1 and 5).',  
            'id'    => $prefix.'text_graphics_rating',  
            'type'  => 'text'  
        ),
        array(  
            'label'=> 'Experience Rating',  
            'desc'  => 'Experience rating (number between 1 and 5).',  
            'id'    => $prefix.'text_experience_rating',  
            'type'  => 'text'  
        ),
        array(  
            'label'=> 'Gameplay Rating',  
            'desc'  => 'Gameplay rating (number between 1 and 5).',  
            'id'    => $prefix.'text_gameplay_rating',  
            'type'  => 'text'  
        ),
        array(  
            'label'=> 'Entertainment factor Rating',  
            'desc'  => 'Entertainment factor rating (number between 1 and 5).',  
            'id'    => $prefix.'text_entertainment_rating',  
            'type'  => 'text'  
        ),
        array(  
            'label'=> 'Game Trailer',  
            'desc'  => 'Enter the id of the game trailer.',  
            'id'    => $prefix.'text_game_trailer',  
            'type'  => 'text'  
        ),
        /* 
        array(  Graphics Experience Gameplay Entertainment factor
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
        ),*/

        array(  
        'name'  => 'Game Carousel Image',  
        'desc'  => 'Make sure this image is 762px X 388px',  
        'id'    => $prefix.'movie_image',  
        'type'  => 'image'  
        ),

        array(  
        'name'  => 'Thumbnail Carousel Image',  
        'desc'  => 'Make sure this image is 127px X 67px',  
        'id'    => $prefix.'thumb_image',  
        'type'  => 'image2'  
        ),

        array(  
        'name'  => 'Video Trailer Image',  
        'desc'  => 'Make sure this image is 299px X 192px',  
        'id'    => $prefix.'trailer_image',  
        'type'  => 'image3'  
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
wp_enqueue_script('custom-js', '/wp-content/plugins/the_playroom/js/custom_image_upload.js');

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
        <input type='button' class='button button-upload' rel='" . get_the_ID() . "' name='custom_movie_image' value='Upload an image'/> <span><br/>Make sure Image is 762 x 388</span></br>
        <img style='max-width: 300px; display: block;' src='".esc_url( $options['custom_movie_image'] )."' class='preview-upload'/></span>";
        echo        '<input name="' . esc_attr( $name ) . '" type="hidden" class="meta_box_upload_image" value="' . intval( $meta ) . '" />
                                                <img src="' . $image. '" class="meta_box_preview_image" alt="" width="150px"/>';
                                                $custom_movie_image = get_option( 'custom_movie_image' );
                    break;


        case 'image2':
                $thumb = get_post_meta(get_the_ID(), 'custom_thumb_image', true);
                echo "<span class='upload'>
        <input type='text' id='custom_thumb_image_text' class='regular-text text-upload' name='custom_thumb_image' value='".esc_url( $options['custom_thumb_image'] )."'/>
        <input type='button' class='button button-upload' rel='" . get_the_ID() . "' name='custom_thumb_image' value='Upload an image'/> <span><br/>Make sure Image is 127 x 67</span></br>
        <img style='max-width: 300px; display: block;' src='".esc_url( $options['custom_thumb_image'] )."' class='preview-upload'/></span>";
        echo        '<input name="' . esc_attr( $name ) . '" type="hidden" class="meta_box_upload_image" value="' . intval( $meta ) . '" />
                                                <img src="' . $image. '" class="meta_box_preview_image" alt="" width="150px"/>';
                                                $custom_thumb_image = get_option( 'custom_thumb_image' );
                 break;


        case 'image3':
               
               $video = get_post_meta(get_the_ID(), 'custom_video_image', true);
               
                echo "<span class='upload'>
        <input type='text' id='custom_video_image_text' class='regular-text text-upload' name='custom_video_image' value='".esc_url( $options['custom_video_image'] )."'/>
        <input type='button' class='button button-upload' rel='" . get_the_ID() . "' name='custom_video_image' value='Upload an image'/> <span><br/>Make sure Image is 299 x 192</span></br>
        <img style='max-width: 300px; display: block;' src='".esc_url( $options['custom_video_image'] )."' class='preview-upload'/></span>";
        echo        '<input name="' . esc_attr( $name ) . '" type="hidden" class="meta_box_upload_image" value="' . intval( $meta ) . '" />
                                                <img src="' . $image. '" class="meta_box_preview_image" alt="" width="150px"/>';
                                                $custom_video_image = get_option( 'custom_video_image' );


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
        wp_register_script('custom_image_upload', WP_PLUGIN_URL.'/the_playroom/js/custom_image_upload.js', array('jquery'));
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
