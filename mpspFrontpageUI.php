<?php

function mpspFrontpageUI(){
$ulp = 'ultimate-landing-page';
	$ulp_install_link = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $ulp . '&TB_iframe=true&width=600&height=550' ) ) . '" class="thickbox" title="More info about ' . $ulp . '">Install Now' . '</a>';


$tss = 'testimonial-add';
	$tss_install_link = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $tss . '&TB_iframe=true&width=600&height=550' ) ) . '" class="thickbox" title="More info about ' . $tss . '">Install Now' . '</a>';

$msfp = 'mailchimp-subscribe-sm';
	$msfp_install_link = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $msfp . '&TB_iframe=true&width=600&height=550' ) ) . '" class="thickbox" title="More info about ' . $msfp . '">Install Now' . '</a>';


$pss = 'posts-slider';
	$pss_install_link = '<a href="' . esc_url( network_admin_url('plugin-install.php?tab=plugin-information&plugin=' . $pss . '&TB_iframe=true&width=600&height=550' ) ) . '" class="thickbox" title="More info about ' . $pss . '">Install Now' . '</a>';



	?>


		<h1>Posts Slider Plugin</h1>
		<div id='sec_left'>
			<br>
			<br>
			<a style='background:#F27935; color:#fff; text-decoration:none;padding:15px; border-bottom:10px solid #ed5f12;' 
			href="edit.php?post_type=mpsp_slider"><b>All Sliders</a>
			<br>
			<br>
			<br>
			<br>
			<a  style='background:#F27935; color:#fff; text-decoration:none;padding:15px; border-bottom:10px solid #ed5f12;' 
			href="post-new.php?post_type=mpsp_slider">Add New Slider</a>
			<br>
			<br>
			<br>
			<br>
			<a target="_balnk" style='background:#A5D27D; color:#fff; text-decoration:none;padding:15px; border-bottom:10px solid #75ad41;' 
			href="http://web-settler.com/posts-slider/"> Upgrade To Premium </b></a>
			<br>
			<br>
			</div>
			<a target="_balnk" href="http://web-settler.com/posts-slider/" ><img src="<?php echo plugins_url('imgs/banner.png',__FILE__); ?>" alt="" id='img_ad'></a>
		<div id='sec_right'>
				<h3>Recommended Plugins</h3>
				<img src="<?php echo plugins_url('imgs/ulp.png',__FILE__); ?>" class="rc_plugin_thumb">
				<p><b>Ultimate Landing Page - <?php echo $ulp_install_link; ?></p>
				<img src="<?php echo plugins_url('imgs/psp.png',__FILE__); ?>" class="rc_plugin_thumb">
				<p>Posts Slider Plugin - <?php echo $pss_install_link; ?></p>
				<img src="<?php echo plugins_url('imgs/ts.png',__FILE__); ?>" class="rc_plugin_thumb">
				<p>Testimonial Slider Plugin - <?php echo $tss_install_link; ?></p>
				<img src="<?php echo plugins_url('imgs/msf.png',__FILE__); ?>" class="rc_plugin_thumb">
				<p>Subscribe Form Plugin - <?php echo $msfp_install_link; ?></p>
				</b>
		</div>

		<style>
		#img_ad{
			width:50%;
			height: 400px;
			display: inline-block;
			float: left;
			margin-top: 105px;
		}
		.rc_plugin_thumb{
			width: 200px;
			height: 100px;
			border:7px solid #fff;
			background: #fff;
		}

		#sec_left{
			margin-top:100px;
			width:20%;
			display: inline-block;
			float: left;
		}
		#sec_right{
			margin-top:100px;
			width:20%;
			display: inline-block;
			float: right;
			background: #e3e3e3;
			padding: 20px;

		}

		</style>

	<?php


}


 ?>