<?php
if( !isset( $_SESSION ) )
{
	session_start();
}

// site domain name with http
define( 'SITE_URL' )
	|| define( 'SITE_URL', 'http://'.$_SERVER['SERVER_NAME'] );

// directory separator
define( 'DS' )
	|| define( 'DS', DIRECTORY_SEPARATOR );

// root path
define( "ROOT_PATH" )
	|| define( "ROOT_PATH", realpath( dirname( __FILE__ ).DS.'..'.DS ) );

// classes folder
define( 'CLASSES_DIR' )
	|| define( 'CLASSES_DIR', 'classes' );

// modules folder
define( 'MOD_DIR' )
	|| define( 'MOD_DIR', 'mod' );

// inc folder
define( 'INC_DIR' )
	|| define( 'INC_DIR', 'inc' );

// templates folder
define( 'TEMPLATE_DIR' )
	|| define( 'TEMPLATE_DIR', 'template' );

// emails path
define( 'EMAILS_PATH' )
	|| define( 'EMAILS_PATH', ROOT_PATH.DS.'emails' );

// catalogue images path
define( 'CATALOGUE_PATH' )
	|| define( 'CATALOGUE_PATH', ROOT_PATH.DS.'media'.DS.'catalogue' );