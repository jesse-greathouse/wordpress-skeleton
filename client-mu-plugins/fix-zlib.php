<?php

/**
 * Fix zlib Error
 */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', static function () {
	$levels = ob_get_level();
	for ( $i = 0; $i < $levels; $i ++ ) {
		@ob_end_flush();
	}
}, 9999999 );
