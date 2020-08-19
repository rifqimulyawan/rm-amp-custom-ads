<?php
/*
Plugin Name: RM AMP Custom Ads
Plugin URI: https://github.com/rifqimulyawan/rm-amp-custom-ads
Description: Custom extension made for Wordpress AMPforWP to add a custom banner after the post content.
Version: 1.0
Author:  Rifqi Mulyawan
Author URI: http://rifqimulyawan.com/ 
License: GPL2
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('ampforwp_after_post_content','amp_custom_banner_extension_insert_banner');
function amp_custom_banner_extension_insert_banner() { ?>
	<div class="amp-custom-banner-after-post above_post rm-carpet">
	    <div class="rm-carpet-text">Lihat juga:</div>
		<amp-fx-flying-carpet height="300px">
			<amp-ad data-ad-client="ca-pub-9495219818644530" data-ad-slot="1201653141" height="600" layout="fixed" type="adsense" width="300">
			</amp-ad>
        </amp-fx-flying-carpet>
	</div>
	<?php 
}

/*
Note:
- Create new ads unit with 600 height and 300 width.
- Change data-ad-client dan data-ad-slot based on Yout Adsense account.
*/
