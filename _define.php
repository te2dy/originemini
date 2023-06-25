<?php
/**
 * Origine Mini, a minimal theme for Dotclear.
 *
 * @author    Teddy <zozxebpyr@mozmail.com>
 * @copyright 2022-2023 Teddy
 * @license   GPL-3 (https://www.gnu.org/licenses/gpl-3.0.en.html)
 */

$this->registerModule(
    'Origine Mini',             // Name
    'A minimal Dotclear theme', // Description
    'Teddy',                    // Author
    '2.2',                      // Version
    [
        'requires' => [
            ['core', '2.26'],
            ['php', '8']
        ],

        'type' => 'theme',

        // Allows a full control for the theme configurator.
        'standalone_config' => true,

        // Replaces default heading levels.
        'widgettitleformat'    => '<h3>%s</h3>',
        'widgetsubtitleformat' => '<h4>%s</h4>'
    ]
);
