<?php 
//THIS FILE OVERWRITES SOME OF THE DEFAULT WORDPRESS INSTALLATION STEPS

!defined( 'ABSPATH' ) AND exit;


//Auto Activates all packaged plugins
function az_activate_plugin( $plugin )
{
  $current = get_option( 'active_plugins' );
  $plugin  = plugin_basename( trim( $plugin ) );
  if( !in_array( $plugin, $current ) )
  {
    $current[] = $plugin;
    sort( $current );
    do_action( 'activate_plugin', trim( $plugin ) );
    update_option( 'active_plugins', $current );
    do_action( 'activate_' . trim( $plugin ) );
    do_action( 'activated_plugin', trim( $plugin ) );
  }
  return null;
}

function write_fresh_salts(){
	// Define the name of the salts file
	$salts_file = '../wp-pepper.php';
	// Define the address of the Salts
	$salts_api = 'https://api.wordpress.org/secret-key/1.1/salt/';

	// Get a new set of salts
	$new_salts = file_get_contents( $salts_api );
	// Open the salts file
	$sf = fopen( $salts_file, 'w' );
	// Write the new salts to the salts file
	fwrite( $sf, "<?php\n".$new_salts."?>" );
	// Close the file
	fclose( $sf );
}


//Stops default first posts etc.
//Creates a homepage and sets it as the static page
function wp_install_defaults( $user_id ) {
	global $wpdb, $wp_rewrite, $table_prefix;

	// First Page
	if ( is_multisite() )
		$first_page = get_site_option( 'first_page' );

	$first_page = ! empty( $first_page ) ? $first_page : sprintf( __( "Hello World." ), admin_url() );

	$now = current_time( 'mysql' );
	$now_gmt = current_time( 'mysql', 1 );
	$first_post_guid = get_option('home') . '/?page_id=1';
	$wpdb->insert( $wpdb->posts, array(
		'post_author' => $user_id,
		'post_date' => $now,
		'post_date_gmt' => $now_gmt,
		'post_content' => $first_page,
		'post_excerpt' => '',
		'comment_status' => 'closed',
		'post_title' => __( 'Homepage' ),
		/* translators: Default page slug */
		'post_name' => __( 'homepage' ),
		'post_modified' => $now,
		'post_modified_gmt' => $now_gmt,
		'guid' => $first_post_guid,
		'post_type' => 'page',
		'to_ping' => '',
		'pinged' => '',
		'post_content_filtered' => ''
	));
	$wpdb->insert( $wpdb->postmeta, array( 'post_id' => 1, 'meta_key' => '_wp_page_template', 'meta_value' => 'default' ) );
	update_option( 'page_on_front', 1 );
	update_option( 'show_on_front', 'page' );

	az_activate_plugin( 'akismet/akismet.php' );
  az_activate_plugin( 'advanced-custom-fields-pro/acf.php' );
  write_fresh_salts();
}

function wp_new_blog_notification( $blog_title, $blog_url, $user_id, $password ) { /* empty function */ }

function self_destruct(){
	unlink(__FILE__);
}

add_action( 'wp_install', 'self_destruct', 999, 0 );

?>