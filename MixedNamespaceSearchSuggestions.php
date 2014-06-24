<?php
/**
 * @author Niklas Laxström
 * @license MIT
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die();
}

$GLOBALS['wgExtensionCredits']['other'][] = array(
	'path' => __FILE__,
	'name' => 'MixedNamespaceSearchSuggestions',
	'version' => '2014-06-24',
	'author' => 'Niklas Laxström',
	'descriptionmsg' => 'mnss-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:MixedNamespaceSearchSuggestions',
	'license-name' => 'MIT',
);

$dir = __DIR__;
require_once "$dir/Resources.php";

$GLOBALS['wgMessagesDirs']['MNSS'] = "$dir/i18n";

$GLOBALS['wgHooks']['BeforePageDisplay'][] = function ( OutputPage $out ) {
	$out->addModules( 'ext.mnss.search' );
};
