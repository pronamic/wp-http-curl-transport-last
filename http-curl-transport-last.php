<?php
/*
Plugin Name: HTTP cURL transport last
Plugin URI: http://pronamic.eu/wordpress-plugins/gravity-forms-nl/
Description: This WordPress plugin ensures that the HTTP cURL transport is used as last.

Version: 1.0.0
Requires at least: 3.0

Author: Pronamic
Author URI: http://www.pronamic.eu/

Text Domain: http_curl_transport_last
Domain Path: /languages/

License: GPL

GitHub URI: https://github.com/pronamic/wp-http-curl-transport-last
*/

function http_curl_transport_last( $request_order ) {
	$i = array_search( 'curl', $request_order );

	if ( $i !== false ) {
		unset( $request_order[$i] );

		$request_order[] = 'curl';
	}

	return $request_order;
}

add_filter( 'http_api_transports', 'http_curl_transport_last' );
