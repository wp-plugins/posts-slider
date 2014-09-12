<?php

function mpsp_slider_posts_settings($post){
    // $post is already set, and contains an object: the WordPress post
    global $post;
 //////////////////////////////////////////////////////////////////////////
                                                                        //  
                               //START                                 //
                                                                      //  
                                                                     //
    ///////  MAIN SETTINGS var assign BOX Starts HERE!!! /////////////

    $mpsp_post_types = get_post_meta($post->ID,'mpsp_post_types',true);
    $mpsp_posts_visible = get_post_meta($post->ID,'mpsp_posts_visible',true);
    $mpsp_posts_Desc_limit = get_post_meta($post->ID,'mpsp_posts_Desc_limit',true);
    $mpsp_posts_order = get_post_meta($post->ID,'mpsp_posts_order',true);
    $mpsp_posts_orderby = get_post_meta($post->ID,'mpsp_posts_orderby',true);
    $mpsp_posts_key = get_post_meta($post->ID,'mpsp_posts_key',true);
    $mpsp_posts_value = get_post_meta($post->ID,'mpsp_posts_value',true);
    $mpsp_posts_img_size = get_post_meta($post->ID,'mpsp_posts_img_size',true);
    $mpsp_slide_layout_custom = get_post_meta($post->ID,'mpsp_slide_layout_custom',true);



    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );


    ?>

<div class='formLayout'>

  <div id="mpsp_slider_posts_settings">

      <br>
      <br>
      <br>

      <label for="cs_post_types">Select Post Type :</label>

     <?php 
     $post_types = get_post_types('', 'names');

      echo "<select name='mpsp_post_types'>
      <option value='' selected( 'select', $mpsp_post_types );>Select</option>
      ";


    foreach($post_types as $post_type) {
       ?>

      <option value='<?php echo $post_type;?>' <?php selected($post_type, $mpsp_post_types ); ?> ><?php echo $post_type;?> </option>
      <?php
     }

      echo "</select>";

     ?>
      <br>
      <br>


      <label for="mpsp_posts_visible">No. of Posts In Slider :</label>
      <input type="number" name="mpsp_posts_visible" value="<?php echo $mpsp_posts_visible; ?>">
      
      <br>
      <br>
      <label for="mpsp_posts_order">Posts Order :</label>
      <select name="mpsp_posts_order">
        <option value="ASC"
<?php selected( "ASC", $mpsp_posts_order ); ?>


        >Ascending</option>
        <option value="DESC"
<?php selected( "DESC", $mpsp_posts_order ); ?>

        >Descending</option>

      </select>
      <br>
      <br>

      <label for="mpsp_posts_orderby"  title="Sort retrieved posts by.">Posts Order By :</label >
      <select name="mpsp_posts_orderby">
        <option selected value=""
        >Choose..</option>
        <option value="none" 

        <?php selected( 'none',$mpsp_posts_orderby ); ?>

        >None</option>
        <option value="rand"
        <?php selected( 'rand',$mpsp_posts_orderby ); ?>

        >Random</option>
        <option value="id"
        <?php selected( 'id',$mpsp_posts_orderby ); ?>

        >ID</option>
        <option value="title"
        <?php selected( 'title',$mpsp_posts_orderby ); ?>

        >Title</option>
        <option value="name"
        <?php selected( 'name',$mpsp_posts_orderby ); ?>
>Slug</option>
        <option value="date"
        <?php selected( 'date',$mpsp_posts_orderby ); ?>

        >Date - Default</option>
        <option value="modified"
        <?php selected( 'modified',$mpsp_posts_orderby ); ?>
        >Modified Date</option>
        <option value="parent"
        <?php selected( 'parent',$mpsp_posts_orderby ); ?>

        >Parent ID</option>
        <option value="menu_order" <?php selected( 'menu_order',$mpsp_posts_orderby ); ?>>Comment Count</option>>Menu Order</option>
        <option value="comment_count" <?php selected( 'comment_count',$mpsp_posts_orderby ); ?>>Comment Count</option>
        

      </select>
      <br>
      <br>


      <label for="mpsp_posts_key">Get Posts By :</label>
      <select name="mpsp_posts_key">
        <option value="">Choose..</option>
        <option value="category_name"
<?php selected( "category_name",$mpsp_posts_key ); ?>

        >Category Name</option>
        <option value="post_name"
<?php selected( "post_name",$mpsp_posts_key ); ?>

        >Post Name</option>
        <option value="tag_name"
<?php selected( "tag_name",$mpsp_posts_key ); ?>

        >Tag Name</option>
        <option value="author_name"
<?php selected( "author_name",$mpsp_posts_key ); ?>

        >Author Name</option>

      </select>
      <br>
      <br>
      <label for="mpsp_posts_value">Get Posts By (Value) :</label>
      <input type="text" name="mpsp_posts_value" value="<?php echo $mpsp_posts_value; ?>" placeholder="i.e category name" style="width:150px;">

      <br>
      <br>
      
      <label for="mpsp_posts_img_size">Image Size :</label>
      <select name="mpsp_posts_img_size">
        <option value="thumbnail"
<?php selected( "thumbnail",$mpsp_posts_img_size ); ?>


        >Small</option>
        <option value="medium"
<?php selected( "medium",$mpsp_posts_img_size ); ?>

        >Medium</option>
        <option value="large"
<?php selected( "large",$mpsp_posts_img_size ); ?>

        >Large</option>
        <option value="original"
<?php selected( "original",$mpsp_posts_img_size ); ?>

        >Original</option>

      </select>

      <h2 align="center">Select layout</h2>
      <label for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-def.png',__FILE__); ?>" width="150px" height"150px"></label>

      <input disabled type="radio" name="mpsp_slide_layout_custom" value="" style="width:15px;"  <?php checked( "display:none;", $mpsp_slide_layout_custom ); ?>
   checked >
      <br>

      <label for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-1.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input type="radio" name="mpsp_slide_layout_custom" checked value='float:left; margin-right:15px;' style="width:15px;"

<?php checked( "float:left; margin-right:15px;", $mpsp_slide_layout_custom ); ?>
      >
          <br>

      <label for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-2.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input disabled type="radio" name="mpsp_slide_layout_custom"
      value=''style="width:15px;" selected     
<?php checked( "margin-left:40%;", $mpsp_slide_layout_custom ); ?>
      >
          <br>
          <label for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-3.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input  disabled type="radio" name="mpsp_slide_layout_custom"

      value='' style="width:15px;"     
<?php checked( "", $mpsp_slide_layout_custom ); ?>

      >
          <br>


  </div>
  
</div>
<a href="http://web-settler.com/posts-slider/" target="_blank" style='font-size:22px;'>To Unlock all layouts please buy premium Version : Click here</a>



<?php
  }


  ?>