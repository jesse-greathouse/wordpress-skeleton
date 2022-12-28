<?php
/**
 * It is recoomended to load all plugins for your site in code. Loading plugins
 * through code results in more control and greater consistency across
 * development environments. Using this file to do so helps load and activate
 * plugins as early as possible in the WordPress load order.
 */

function run_activate_plugin( $plugin ) {
    $plugin = trim( $plugin );
    $current = get_option( 'active_plugins' );
    $plugin = plugin_basename( $plugin );

    if ( ! in_array( $plugin, $current ) ) {
        $current[] = $plugin;
        sort( $current );
        do_action( 'activate_plugin', $plugin );
        update_option( 'active_plugins', $current );
        do_action( 'activate_' . $plugin );
        do_action( 'activated_plugin', $plugin );
    }

    return null;
}

// run_activate_plugin( 'plugin-name' );
