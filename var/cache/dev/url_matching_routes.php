<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/login/create' => [[['_route' => 'create_login', '_controller' => 'App\\Api\\Modules\\Login\\Controller\\LoginController::loginCreate'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'login_page', '_controller' => 'App\\Web\\Controller\\LoginController::index'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'register_page', '_controller' => 'App\\Web\\Controller\\LoginController::register'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Web\\Controller\\LoginController::dashboard'], null, ['GET' => 0], null, false, false, null]],
        '/agendar' => [[['_route' => 'schedule_form', '_controller' => 'App\\Web\\Controller\\ScheduleController::schedule'], null, null, null, false, false, null]],
        '/agendamentos/historico' => [[['_route' => 'schedule_history', '_controller' => 'App\\Web\\Controller\\ScheduleController::history'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/login/(?'
                    .'|edit/([^/]++)(*:65)'
                    .'|([^/]++)(*:80)'
                    .'|list(*:91)'
                    .'|update\\-last\\-access/([^/]++)(*:127)'
                    .'|delete\\-inactive(*:151)'
                    .'|type/([^/]++)(*:172)'
                    .'|verify(*:186)'
                    .'|c(?'
                        .'|heck(*:202)'
                        .'|reate(*:215)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'update_login', '_controller' => 'App\\Api\\Modules\\Login\\Controller\\LoginController::loginUpdate'], ['login_id'], ['PUT' => 0], null, false, true, null]],
        80 => [[['_route' => 'get_login_by_id', '_controller' => 'App\\Api\\Modules\\Login\\Controller\\LoginController::loginGetById'], ['login_id'], ['GET' => 0], null, false, true, null]],
        91 => [[['_route' => 'list_logins', '_controller' => 'App\\Api\\Modules\\Login\\Controller\\LoginController::loginList'], [], ['GET' => 0], null, false, false, null]],
        127 => [[['_route' => 'update_last_access', '_controller' => 'App\\Api\\Modules\\Login\\Controller\\LoginController::updateLastAccess'], ['login_id'], ['PUT' => 0], null, false, true, null]],
        151 => [[['_route' => 'delete_inactive_logins', '_controller' => 'App\\Api\\Modules\\Login\\Controller\\LoginController::deleteInactiveLogins'], [], ['DELETE' => 0], null, false, false, null]],
        172 => [[['_route' => 'get_login_type', '_controller' => 'App\\Api\\Modules\\Login\\Controller\\LoginController::getLoginType'], ['login_id'], ['GET' => 0], null, false, true, null]],
        186 => [[['_route' => 'verify_login', '_controller' => 'App\\Api\\Modules\\Login\\Controller\\LoginController::verifyLogin'], [], ['POST' => 0], null, false, false, null]],
        202 => [[['_route' => 'login_check', '_controller' => 'App\\Web\\Controller\\LoginController::check'], [], ['POST' => 0], null, false, false, null]],
        215 => [
            [['_route' => 'login_create', '_controller' => 'App\\Web\\Controller\\LoginController::create'], [], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
