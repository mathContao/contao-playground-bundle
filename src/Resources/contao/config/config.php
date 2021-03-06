<?php

/*
 * This file is part of Playground Bundle.
 * 
 * (c) µaTh 2020 <geheim@web.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/mathContao/contao-playground-bundle
 */

use MathContao\ContaoPlaygroundBundle\Model\PlaygroundModel;


// Hooks
$GLOBALS['TL_HOOKS']['getUserNavigation'][] = ['eikona_media.contao.system_information.listener.navigation', 'onGetUserNavigation'];




/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['playground_cat']['playground_type'] = array(
    'tables' => array('tl_playground')
);
$GLOBALS['BE_MOD']['playground_cat']['testpage'] = [];


/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_playground'] = PlaygroundModel::class;
