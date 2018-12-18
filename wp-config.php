<?php
if ( file_exists( dirname( __FILE__ ) . '/live-config.php' ) ) {
    define( 'WP_LOCAL_DEV', false );
    define( 'DBI_STAGING_SITE', false );
    include dirname( __FILE__ ) . '/live-config.php';
}
elseif ( file_exists( dirname( __FILE__ ) . '/staging-config.php' ) ) {
    define( 'WP_LOCAL_DEV', false );
    define( 'DBI_STAGING_SITE', true );
    include dirname( __FILE__ ) . '/staging-config.php';
}
else {
    define( 'WP_LOCAL_DEV', true );
    define( 'DBI_STAGING_SITE', false );
    include dirname( __FILE__ ) . '/local-config.php';
}
