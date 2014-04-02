<?php
/**
 * mthumb-config.php
 *
 * Example mThumb configuration file.
 *
 * @created   4/2/14 11:52 AM
 * @author    Mindshare Studios, Inc.
 * @copyright Copyright (c) 2014
 * @link      http://www.mindsharelabs.com/documentation/
 *
 */

//$_SERVER['DOCUMENT_ROOT'] = '/path/to/your/root/'; // uncomment this for tilde support

global $ALLOWED_SITES;

// Max sizes
define('MAX_WIDTH', 3600);
define('MAX_HEIGHT', 3600);
define ('MAX_FILE_SIZE', 20971520); // 20MB

// External Sites
$ALLOWED_SITES = array(
	'flickr.com',
	'staticflickr.com',
	'picasa.com',
	'img.youtube.com',
	'upload.wikimedia.org',
	'photobucket.com',
	'imgur.com',
	'imageshack.us',
	'tinypic.com',
	'mind.sh',
	'mindsharelabs.com',
	'mindsharestudios.com'
);
