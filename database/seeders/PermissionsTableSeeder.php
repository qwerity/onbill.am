<?php

namespace Database\Seeders;

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'team_create',
            ],
            [
                'id'    => 18,
                'title' => 'team_edit',
            ],
            [
                'id'    => 19,
                'title' => 'team_show',
            ],
            [
                'id'    => 20,
                'title' => 'team_delete',
            ],
            [
                'id'    => 21,
                'title' => 'team_access',
            ],
            [
                'id'    => 22,
                'title' => 'service_create',
            ],
            [
                'id'    => 23,
                'title' => 'service_edit',
            ],
            [
                'id'    => 24,
                'title' => 'service_show',
            ],
            [
                'id'    => 25,
                'title' => 'service_access',
            ],
            [
                'id'    => 26,
                'title' => 'client_create',
            ],
            [
                'id'    => 27,
                'title' => 'client_edit',
            ],
            [
                'id'    => 28,
                'title' => 'client_show',
            ],
            [
                'id'    => 29,
                'title' => 'client_delete',
            ],
            [
                'id'    => 30,
                'title' => 'client_access',
            ],
            [
                'id'    => 31,
                'title' => 'payment_create',
            ],
            [
                'id'    => 32,
                'title' => 'payment_edit',
            ],
            [
                'id'    => 33,
                'title' => 'payment_show',
            ],
            [
                'id'    => 34,
                'title' => 'payment_delete',
            ],
            [
                'id'    => 35,
                'title' => 'payment_access',
            ],
            [
                'id'    => 36,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
