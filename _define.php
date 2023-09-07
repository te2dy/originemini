<?php
/**
 * Odyssey, a Dotclear theme.
 *
 * @author    Teddy <zozxebpyr@mozmail.com>
 * @copyright 2022-2023 Teddy
 * @license   GPL-3 (https://www.gnu.org/licenses/gpl-3.0.en.html)
 */

$this->registerModule(
    'Odyssey',
    'Write your own with this theme',
    'Teddy',
    '0.1-alpha',
    [
        'requires' => [
            ['core', '2.27'],
            ['php', '8']
        ],

        'type' => 'theme',

        // Allows a full control for the theme configurator.
        'standalone_config' => false,

        // Replaces default heading levels.
        'widgettitleformat'    => '<h3>%s</h3>',
        'widgetsubtitleformat' => '<h4>%s</h4>'
    ]
);
