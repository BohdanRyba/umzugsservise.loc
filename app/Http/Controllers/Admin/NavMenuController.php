<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavMenuController extends Controller
{

    public static $icons = [
        'fa-dashboard',
        'fa-area-chart',
        'fa-table',
        'fa-wrench',
    ];


    public static $a = [
        0 => [
            'indent' => 1,
            'name' => 'Dashboard',
            'alias' => 'dashboard',
            'icon' => 'fa-dashboard',
            'item_order' => 0,
            'is_archived' => 0,
            'id' => 1,
            'children' => [],
            'parent' => 'root',
        ],
        1 => [
            'indent' => 1,
            'name' => 'Users',
            'alias' => 'users',
            'icon' => 'fa-user',
            'item_order' => 0,
            'is_archived' => 0,
            'id' => 2,
            'children' => [],
            'parent' => 'root',
        ],
        2 => [
            'indent' => 1,
            'name' => 'Categories',
            'alias' => 'categories',
            'icon' => 'fa-bars',
            'item_order' => 0,
            'is_archived' => 0,
            'id' => 3,
            'children' => [],
            'parent' => 'root',
        ],
        3 => [
            'indent' => 1,
            'name' => 'Roles',
            'alias' => 'roles',
            'icon' => 'fa-users',
            'item_order' => 0,
            'is_archived' => 0,
            'id' => 4,
            'children' => [],
            'parent' => 'root',
        ],
        5 => [
            'indent' => 1,
            'name' => 'Permitions',
            'alias' => 'perms',
            'icon' => 'fa-address-card',
            'item_order' => 0,
            'is_archived' => 0,
            'id' => 5,
            'children' => [],
            'parent' => 'root',
        ],
        6 => [
            'indent' => 1,
            'name' => 'Posts',
            'alias' => 'posts',
            'icon' => 'fa-file-text',
            'item_order' => 0,
            'is_archived' => 0,
            'id' => 6,
            'children' => [],
            'parent' => 'root',
        ],
    ];

//        1 => [
//            'indent' => 2,
//            'name' => 'Work indent 2-1',
//            'color' => '#a8c9e5',
//            'is_deleted' => 0,
//            'collapsed' => 0,
//            'archived_date' => null,
//            'item_order' => 6,
//            'is_archived' => 0,
//            'archived_timestamp' => 0,
//            'user_id' => 3840103,
//            'id' => 139576622,
//            'children' => [
//                0 => [
//                    'indent' => 3,
//                    'name' => 'Work indent 2-2',
//                    'color' => '#dddddd',
//                    'is_deleted' => 0,
//                    'collapsed' => 0,
//                    'archived_date' => null,
//                    'item_order' => 7,
//                    'is_archived' => 0,
//                    'archived_timestamp' => 0,
//                    'user_id' => 3840103,
//                    'id' => 139576636,
//                    'children' => array(),
//                    'parent' => 139576622,
//                ],
//            ],
//            'parent' => 138837509,
//        ],
//        2 => [
//            'indent' => 2,
//            'name' => 'Work indent 3-1',
//            'color' => '#dddddd',
//            'is_deleted' => 0,
//            'collapsed' => 0,
//            'archived_date' => null,
//            'item_order' => 8,
//            'is_archived' => 0,
//            'archived_timestamp' => 0,
//            'user_id' => 3840103,
//            'id' => 139576646,
//            'children' => array(),
//            'parent' => 138837509,
//        ],
//    ],
//            'parent' => 'root',
//        ],
//        3 => [
//            'indent' => 1,
//            'name' => 'Errands',
//            'color' => '#74e8d4',
//            'is_deleted' => 0,
//            'collapsed' => 0,
//            'archived_date' => null,
//            'item_order' => 9,
//            'is_archived' => 0,
//            'archived_timestamp' => 0,
//            'user_id' => 3840103,
//            'id' => 138837510,
//            'children' => array(),
//            'parent' => 'root',
//        ],
//        4 => [
//            'indent' => 1,
//            'name' => 'Shopping',
//            'color' => '#dddddd',
//            'is_deleted' => 0,
//            'collapsed' => 0,
//            'archived_date' => null,
//            'item_order' => 10,
//            'is_archived' => 0,
//            'archived_timestamp' => 0,
//            'user_id' => 3840103,
//            'id' => 138837511,
//            'children' => array(),
//            'parent' => 'root',
//        ],
//        5 => [
//            'indent' => 1,
//            'name' => 'Movies to watch',
//            'color' => '#e3a8e5',
//            'is_deleted' => 0,
//            'collapsed' => 0,
//            'archived_date' => null,
//            'item_order' => 11,
//            'is_archived' => 0,
//            'archived_timestamp' => 0,
//            'user_id' => 3840103,
//            'id' => 138837512,
//            'children' => array(),
//            'parent' => 'root',
//        ],
//    ];
}