<?php

// mod_rewrite is being used?
// in case the server does not have mod_rewrite
define('MODREWRITE', false);

// image quality
$default['img_quality'] = 100;

// things you don't want stats to track
$default['ignore_ip'] = array();

//////////// you won't normally need to edit anything below this line ////////////

// darn quotes
#set_magic_quotes_runtime(0);
// Yep, another PHP 5.0 workaround
ini_set("magic_quotes_runtime", 0);

// FIX: PHP >5.1 requires valid timezone
// So we will just play nice and set this default to UTC. Change to your need 
// or set system-wide in php.ini
if (!ini_get('date.timezone')) {
	date_default_timezone_set('UTC');
}

// database prefix
define('PX', 'ndxz_');

// version
define('VERSION', '0.70d');

// language default in case of error
define('LANGUAGE', 'en-us');
	
// Paths/definitions of things (relative to index file)
define('LIBPATH', 'lib');
define('HELPATH', 'helper');
define('MODPATH', 'module');
define('DBPATH', 'db');
define('LANGPATH', 'lang');
define('EXTPATH', 'ext');

// paths to internal parts
define('ASSET', 'asset/');
define('CSS', ASSET . 'css/');
define('JS', ASSET . 'js/');
define('IMG', ASSET . 'img/');
define('TPLPATH', ASSET . 'tpl/');

// improve this later
$adjust = realpath(dirname(__FILE__));

define('BASENAME', '/ndxhbt');
define('DIRNAME', str_replace(BASENAME, '', $adjust));

$self = (dirname($_SERVER['PHP_SELF']) == '/') ? '' : dirname($_SERVER['PHP_SELF']);
$base = 'http://' . $_SERVER['HTTP_HOST'] . $self . '/';
$base = str_replace(BASENAME, '', $base);
define('BASEURL', preg_replace("/\/$/i", '', $base)); // no trailing slashes


// default module
$default['module'] = 'exhibits';

// do we want to use the internal stats?
$default['statistics'] = TRUE;
// If we are behind proxy, remote address may be stored differently
define('REMOTE_ADDR_HEADER', 'REMOTE_ADDR');

// for paths to files/images
define('BASEFILES', '/files');
define('GIMGS', BASEFILES . '/gimgs');

// use an editor, i guess...
$default['tinymce'] = FALSE; // not yet
	
// cache time
$default['cache_time'] = '30'; // not yet

// report to Indexhibit
$default['reporting'] = FALSE; // not yet

// first year
$default['first_year'] = 1994;

// Add default types for files, images and movies upload
// if we add new 'media' we need to update modedit.js
$uploads['images'] 	= array('jpg', 'gif', 'png');
$uploads['media']	= array('mov', 'mp3', 'jar');
$uploads['files']	= array('txt', 'pdf', 'doc', 'xls');
$uploads['flash'] 	= array('swf');
	
// define the default encoding
$default['encoding'] = 'UTF-8';

// basic sizes for images and thumbnails uploading
$default['thumbsize'] = array(100 =>100, 150 => 150, 200 => 200);
$default['imagesize'] = array(200 => 200, 400 => 400, 600 => 600, 'full' => 9999);

// max exhibit images upload
$default['exhibit_imgs'] = 6;

// 'standard' formats
$default['standard_formats'] = array('grow', 'grow_no_title', 'over_and_over', 'no_thumbs_w_captions');

// many requests for this
// have a box for background colors instead of picker
$default['color_picker'] = true;

// No hardcoded magic values ... and setting 12 for password?! you made little kittens sad
define('PASSWORD_MIN', 6);
define('PASSWORD_MAX', 32);
define('USERID_MIN', 6);
define('USERID_MAX', 12);
?>
