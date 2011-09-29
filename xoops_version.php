<?php
// $Id: $

// XOOPS - WAKU version 1
// Presented by Keiichi SHIGA, 2004-2011.

// module name:
$modversion['name'] = 'WAKU sample';

// folder name:
$modversion['dirname'] = "waku";

// sub menu:
//  $modversion['sub'][1]['name'] = "menu name";
//  $modversion['sub'][1]['url'] = 'index.php/filename';
// If use of rewrite:
//  $modversion['sub'][1]['name'] = "menu name";
//  $modversion['sub'][1]['url'] = 'filename';
// support of multi lingual...
//  $modversion['sub'][1]['name'] = _AT_MENU_1;
//  $modversion['sub'][1]['url'] = 'index.php/filename';
// add of lunguage/(language name)/main.php
//  define ( "_AT_MENU_1" , "sub menu name"); 

$modversion['description'] = $modversion['name'];
$modversion['version'] = "1.22";
$modversion['credits'] = "";
$modversion['author'] = 'Presented by Keiichi SHIGA.';
$modversion['help'] = "help.html";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;

if ( preg_match ( "/^XOOPS Cube/" , XOOPS_VERSION ) )
{ $modversion['image'] = "files/wakulogoxc.png"; }
else if ( preg_match ( "/^ImpressCMS/" , XOOPS_VERSION ) )
{ $modversion['image'] = "files/wakulogoic.png"; }
else
{ $modversion['image'] = "files/wakulogo.png"; }

$modversion['hasMain'] = 1;
$modversion['hasAdmin'] = 0;

