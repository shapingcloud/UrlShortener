<?php
/* This is a sample config file.
 * Edit this file with your own settings and save it as "config.php"
 */

/*
 ** MySQL settings - You can get this info from your web host
 */

/** MySQL database username */
define( 'YOURLS_DB_USER', 'b4e69d1da72050' );

/** MySQL database password */
define( 'YOURLS_DB_PASS', '16e8c21c' );

/** The name of the database for YOURLS */
define( 'YOURLS_DB_NAME', 'shrtAUSREXkR9cid' );

/** MySQL hostname */
define( 'YOURLS_DB_HOST', 'eu-cdbr-azure-north-a.cloudapp.net' );

/** MySQL tables prefix */
define( 'YOURLS_DB_PREFIX', 'yourls_' );

/*
 ** Site options
 */

/** YOURLS installation URL -- all lowercase and with no trailing slash.
 ** If you define it to "http://site.com", don't use "http://www.site.com" in your browser (and vice-versa) */
define( 'YOURLS_SITE', 'http://shrt.sc' );

/** Timezone GMT offset */
define( 'YOURLS_HOURS_OFFSET', 0 ); 

/** Allow multiple short URLs for a same long URL
 ** Set to true to have only one pair of shortURL/longURL (default YOURLS behavior)
 ** Set to false to allow multiple short URLs pointing to the same long URL (bit.ly behavior) */
define( 'YOURLS_UNIQUE_URLS', true );

/** Private means the Admin area will be protected with login/pass as defined below.
 ** Set to false for public usage (eg on a restricted intranet or for test setups)
 ** Read http://yourls.org/privatepublic for more details if you're unsure */
define( 'YOURLS_PRIVATE', true );

/** A random secret hash used to encrypt cookies. You don't have to remember it, make it long and complicated. Hint: copy from http://yourls.org/cookie **/
define( 'YOURLS_COOKIEKEY', 'm3du54ispaimc[a04-1345' );

/** Username(s) and password(s) allowed to access the site. Passwords either in plain text or as salted hashes.
 ** Read http://yourls.org/userpassword for more information */
$yourls_user_passwords = array(
	'shaping' => 'Shaping1',
	'username2' => 'password2'	// You can have one or more 'login'=>'password' lines
	);

/*
 ** URL Shortening settings
 */

/** URL shortening method: 36 or 62 */
define( 'YOURLS_URL_CONVERT', 36 );
/*
 * 36: generates all lowercase keywords (ie: 13jkm)
 * 62: generates mixed case keywords (ie: 13jKm or 13JKm)
 * Stick to one setting. It's best not to change after you've started creating links.
 */

/** 
* Reserved keywords (so that generated URLs won't match them)
* Define here negative, unwanted or potentially misleading keywords.
*/
$yourls_reserved_URL = array(
	'porn', 'faggot', 'sex', 'nigger', 'fuck', 'cunt', 'dick', 'gay',
);

/*
 ** Personal settings would go after here.
 */

