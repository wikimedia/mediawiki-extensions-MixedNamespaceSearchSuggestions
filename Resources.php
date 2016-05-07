<?php
/**
 * @author Niklas Laxström
 * @license MIT
 */

$resourcePaths = [
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'MixedNamespaceSearchSuggestions'
];

$wgResourceModules['ext.mnss.search'] = [
	'styles' => 'resources/ext.mnss.search.less',
	'scripts' => 'resources/ext.mnss.search.js',
	'dependencies' => [
		'mediawiki.searchSuggest',
		'mediawiki.Title',
	],
] + $resourcePaths;
