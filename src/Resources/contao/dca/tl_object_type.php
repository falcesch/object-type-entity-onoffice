<?php
/*
 * This file is part of Oveleon ContaoOnofficeApiBundle.
 *
 * (c) https://www.oveleon.de/
 */

$GLOBALS['TL_DCA']['tl_object_type']['list']['global_operations']['importObjectTypes'] = array(
    'href'                => 'key=importObjectTypes',
    'class'               => 'header_theme_import'
);

// Add fields
$GLOBALS['TL_DCA']['tl_object_type']['fields']['oid'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
