<?php
/**
 * @author Niklas Laxström
 * @license MIT
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die();
}

$wgExtensionCredits['other'][] = [
	'path' => __FILE__,
	'name' => 'MixedNamespaceSearchSuggestions',
	'version' => '2015-12-04',
	'author' => 'Niklas Laxström',
	'descriptionmsg' => 'mnss-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:MixedNamespaceSearchSuggestions',
	'license-name' => 'MIT',
];

$dir = __DIR__;
require_once "$dir/Resources.php";

$wgMessagesDirs['MNSS'] = "$dir/i18n";

$wgHooks['BeforePageDisplay'][] = function ( OutputPage $out ) {
	$out->addModules( 'ext.mnss.search' );
};
