<?php
    // config routing
    //foreach( scandir( ROOT . '/app/Plugin/' ) AS $dir ) {
    //    if( $dir == '..' ) { continue; }
    //    if( file_exists( ROOT . '/app/plugins/' . $dir . '/config/admin_routes.php' ) ) {
    //        include_once( ROOT . '/app/plugins/' . $dir . '/config/admin_routes.php' );
    //    }
    //}

    // admin routing
    Router::connect( '/admin',                          array( 'admin' => true, 'prefix' => 'admin', 'plugin' => 'LayerCake', 'controller' => 'Admins', 'action' => 'index' ) );
    Router::connect( '/admin/:controller',              array( 'admin' => true, 'prefix' => 'admin', 'plugin' => 'LayerCake' ) );
    Router::connect( '/admin/:controller/:action/*',    array( 'admin' => true, 'prefix' => 'admin', 'plugin' => 'LayerCake' ) );
