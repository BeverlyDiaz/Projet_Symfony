<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/mars' => [[['_route' => 'app_mars', '_controller' => 'App\\Controller\\MarsController::index'], null, null, null, false, false, null]],
        '/curiosity' => [[['_route' => 'app_curiosity', '_controller' => 'App\\Controller\\MarsController::app_curiosity'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_Search', '_controller' => 'App\\Controller\\SearchController::app_Search'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/search(?'
                    .'|(?:/([^/]++))?(*:66)'
                    .'|back/([^/]++)(*:86)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [[['_route' => 'search', 'query' => null, '_controller' => 'App\\Controller\\SearchController::searchAction'], ['query'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        86 => [
            [['_route' => 'searchback', '_controller' => 'App\\Controller\\SearchController::searchback'], ['query'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
