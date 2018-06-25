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


    public static $categories = [
        0 => [
            'indent' => 1,
            'name' => 'Dashboard',
            'alias' => 'dashboard',
            'icon' => 'fa-dashboard',
            'route' => '/',
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
            'route' => '/users',
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
            'route' => '/categories',

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
            'route' => '/roles',

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
            'route' => '/perms',

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
            'route' => '/posts',

            'item_order' => 0,
            'is_archived' => 0,
            'id' => 6,
            'children' => [],
            'parent' => 'root',
        ],
        7 => [
            'indent' => 1,
            'name' => 'Pages',
            'alias' => 'pages',
            'icon' => '',
            'route' => '/pages',

            'item_order' => 0,
            'is_archived' => 0,
            'id' => 7,
            'children' => [],
            'parent' => 'root',
        ],
    ];
}
