<?php
/**
 *
 * Live topic update. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.0] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2017, Ger, https://github.com/GerB
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

$lang = array_merge($lang, array(
    'LTU_CHECK_INTERVAL'            => 'Intervalo para atualização do tópico ao vivo',
    'LTU_CHECK_INTERVAL_EXPLAIN'    => 'Qual a frequência (em segundos), o forum procura por novas postagens em um tópico. Um valor menor significa atualizações mais freqüentes, mas pode ser estressante para o servidor.',
    'LTU_INVALID_QUERY'             => 'Pedido inválido',
    'LTU_NEW_POSTS'                 => array(
		1	=> 'Tem %d nova postagem neste tópico',
		2	=> 'Tem %d novas postagens neste tópico',
	),
    'LTU_REFRESH'                    => 'Clique para mostrar',
));
