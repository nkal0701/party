<?php
if( !isset( $_SESSION ) )
{
	session_start();
}

// site domain name with http
define( 'SITE_URL', 'http://'.$_SERVER['SERVER_NAME'] );

// directory separator
define( 'DS', DIRECTORY_SEPARATOR );

// root path
define( "ROOT_PATH", realpath( dirname( __FILE__ ).DS.'..'.DS ) );

// classes directory
define( 'CLASSES_DIR', 'classes' );

// pages directory
define( 'PAGES_DIR', 'pages' );

// modules directory
define( 'MOD_DIR', 'mod' );

// inc directory
define( 'INC_DIR', 'inc' );

// templates directory
define( 'TEMPLATE_DIR', 'template' );

// emails path
define( 'EMAILS_PATH', ROOT_PATH.DS.'emails' );

// catalogue images path
define( 'CATALOGUE_PATH', ROOT_PATH.DS.'media'.DS.'catalogue' );

// add all the above directory to the include path
set_include_path( implode( PATH_SEPARATOR, array
(
	realpath(ROOT_PATH.DS.CLASSES_DIR),
	realpath(ROOT_PATH.DS.PAGES_DIR),
	realpath(ROOT_PATH.DS.MOD_DIR),
	realpath(ROOT_PATH.DS.INC_DIR),
	realpath(ROOT_PATH.DS.TEMPLATE_DIR),
	get_include_path()
) ) );










