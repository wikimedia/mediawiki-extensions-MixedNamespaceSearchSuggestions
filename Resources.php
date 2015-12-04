<?php
/**
 * @author Niklas Laxström
 * @license MIT
 */

$resourcePaths = array(
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'MixedNamespaceSearchSuggestions'
);

$wgResourceModules['ext.mnss.search'] = array(
	'styles' => 'resources/ext.mnss.search.less',
	'scripts' => 'resources/ext.mnss.search.js',
	'dependencies' => array(
		'mediawiki.searchSuggest',
		'mediawiki.Title',
	),
) + $resourcePaths;
