<?php
/**
 *
 * Topics Hierarchy. [Spanish Casual Honorifics]. An extension for the phpBB Forum Software package.
 * Thanks to: Raul [ThE KuKa]
 *
 * @copyright (c) 2016, 2017 - 3Di, http://3di.space/32/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */
/**

* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'GLOBAL_ANNOUNCEMENTS'			=>	'Anuncios Globales',
	'STICKIES'						=>	'Fijos',
	'ACTIVE_STICKIES'				=>	'Fijos Activos',
	// 3Di add
	'EXTENSION_REQUIREMENTS_NOTICE'	=>	'Su instalación de phpBB no cumple con los requisitos de la extensión <strong>Topics Hierarchy</strong>.<br />Necesita al menos phpBB 3.1.10 y/o <strong>NOT</strong> phpBB 3.2.0.',
));
