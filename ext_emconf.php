<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "be_acl".
 *
 * Auto generated 08-01-2015 11:05
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Backend ACLs',
	'description' => 'Backend Access Control Lists',
	'category' => 'be',
	'version' => '1.5.0',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Sebastian Kurfuerst',
	'author_email' => 'sebastian@garbage-group.de',
	'author_company' => '',
	'constraints' => 
	array (
		'depends' => 
		array (
			'php' => '5.2.0-5.5.99',
			'typo3' => '7.6.0-7.6.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

