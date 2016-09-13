<?php
/**
 * Created by IntelliJ IDEA.
 * User: tore
 * Date: 12.09.16
 * Time: 14:56
 */

return [
    'routes' => [
        [
            'name' => 'settings#getDefaultConfig',
            'url' => '/admin/default',
            'verb' => 'GET',
        ],
        [
            'name' => 'settings#setDefaultConfig',
            'url' => '/admin/default',
            'verb' => 'POST',
        ],
    ],
];