<?php
/**
 *
 * phpBB mentions. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, paul999, https://www.phpbbextensions.io
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

/**
 * As there is no proper way of including this file just when the notification is
 * loaded we need to include it on all pages. Make sure to only include important
 * language items (That are directly needed by the notification system) in this file.
 */
$lang = array_merge($lang, array(
	'MENTION_LENGTH'                => 'Vermelding systeem minimale lengte',
	'MENTION_LENGTH_EXPLAIN'        => 'De minimale tekstlengte voordat de vervolgkeuzelijst voor eenvoudige vermeldingen wordt weergegeven.<br>Op grotere forums wil je deze waarde misschien verhogen.',
	'MENTION_COLOR'                 => 'Vermelding systeem kleur',
	'MENTION_COLOR_EXPLAIN'         => 'Deze kleur wordt in het bericht gebruikt om te bepalen welke gebruiker wordt genoemd. Alleen hexadecimale waarden kunnen worden gebruikt.',
	'MENTION_COLOR_INVALID'         => 'De geselecteerde vermelding kleur (%s) is ongeldig. Selecteer een geldige HEX kleur, zonder #',
));
