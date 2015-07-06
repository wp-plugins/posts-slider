<?php


add_action('admin_menu','mpsp_admin_menupage');
function mpsp_admin_menupage(){

	add_menu_page( 'Posts Slider', "Posts Slider",'administrator', 'mpsp_bar','mpspFrontpageUI','dashicons-admin-plugins');
}










 ?>