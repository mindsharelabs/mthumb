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

// tilde support for mthumb, in default WP install this should result in the same value as ABSPATH
$_SERVER['DOCUMENT_ROOT'] = realpath(dirname(__FILE__).'/../../../../../');
//var_dump($_SERVER['DOCUMENT_ROOT']); die;

global $ALLOWED_SITES;

// External Sites
$ALLOWED_SITES = array(
	'mind.sh',
	'mindsharelabs.com',
	'mindsharestudios.com'
);

