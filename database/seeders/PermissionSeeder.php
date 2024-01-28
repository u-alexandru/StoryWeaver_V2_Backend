<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'id' => 1,
                'name' => 'create-novel',
            ],
            [
                'id' => 2,
                'name' => 'edit-novel',
            ],
            [
                'id' => 3,
                'name' => 'delete-novel',
            ],
            [
                'id' => 4,
                'name' => 'create-chapter',
            ],
            [
                'id' => 5,
                'name' => 'edit-chapter',
            ],
            [
                'id' => 6,
                'name' => 'delete-chapter',
            ],
            [
                'id' => 7,
                'name' => 'create-comment',
            ],
            [
                'id' => 8,
                'name' => 'edit-comment',
            ],
            [
                'id' => 9,
                'name' => 'delete-comment',
            ],
            [
                'id' => 10,
                'name' => 'create-tag',
            ],
            [
                'id' => 11,
                'name' => 'edit-tag',
            ],
            [
                'id' => 12,
                'name' => 'delete-tag',
            ],
            [
                'id' => 13,
                'name' => 'create-genre',
            ],
            [
                'id' => 14,
                'name' => 'edit-genre',
            ],
            [
                'id' => 15,
                'name' => 'delete-genre',
            ],
            [
                'id' => 16,
                'name' => 'create-typology',
            ],
            [
                'id' => 17,
                'name' => 'edit-typology',
            ],
            [
                'id' => 18,
                'name' => 'delete-typology',
            ],
            [
                'id' => 19,
                'name' => 'create-user',
            ],
            [
                'id' => 20,
                'name' => 'edit-user',
            ],
            [
                'id' => 21,
                'name' => 'delete-user',
            ],
            [
                'id' => 22,
                'name' => 'create-role',
            ],
            [
                'id' => 23,
                'name' => 'edit-role',
            ],
            [
                'id' => 24,
                'name' => 'delete-role',
            ],
            [
                'id' => 25,
                'name' => 'create-permission',
            ],
            [
                'id' => 26,
                'name' => 'edit-permission',
            ],
            [
                'id' => 27,
                'name' => 'delete-permission',
            ],
            [
                'id' => 28,
                'name' => 'create-report',
            ],
            [
                'id' => 29,
                'name' => 'edit-report',
            ],
            [
                'id' => 30,
                'name' => 'delete-report',
            ],
            [
                'id' => 31,
                'name' => 'create-like',
            ],
            [
                'id' => 32,
                'name' => 'edit-like',
            ],
            [
                'id' => 33,
                'name' => 'delete-like',
            ],
            [
                'id' => 34,
                'name' => 'create-bookmark',
            ],
            [
                'id' => 35,
                'name' => 'edit-bookmark',
            ],
            [
                'id' => 36,
                'name' => 'delete-bookmark',
            ],
            [
                'id' => 37,
                'name' => 'create-reading-list',
            ],
            [
                'id' => 38,
                'name' => 'edit-reading-list',
            ],
            [
                'id' => 39,
                'name' => 'delete-reading-list',
            ],
            [
                'id' => 40,
                'name' => 'create-reading-list-item',
            ],
            [
                'id' => 41,
                'name' => 'edit-reading-list-item',
            ],
            [
                'id' => 42,
                'name' => 'delete-reading-list-item',
            ],
            [
                'id' => 43,
                'name' => 'create-reading-list-item',
            ],
            [
                'id' => 44,
                'name' => 'edit-reading-list-item',
            ],
            [
                'id' => 45,
                'name' => 'delete-reading-list-item',
            ],
            [
                'id' => 46,
                'name' => 'create-reading-list-item',
            ],
            [
                'id' => 47,
                'name' => 'edit-reading-list-item',
            ],
            [
                'id' => 48,
                'name' => 'delete-reading-list-item',
            ],
            [
                'id' => 49,
                'name' => 'create-reading-list-item',
            ],
            [
                'id' => 50,
                'name' => 'edit-reading-list-item',
            ],
            [
                'id' => 51,
                'name' => 'delete-reading-list-item',
            ],
            [
                'id' => 52,
                'name' => 'create-reading-list-item',
            ],
            [
                'id' => 53,
                'name' => 'edit-reading-list-item',
            ],
            [
                'id' => 54,
                'name' => 'delete-reading-list-item',
            ]
        ];

        foreach($permissions as $permission) {
            Permission::create($permission);
        }

        // add all permissions to role admin
        $role = Role::find(1);
        $role->permissions()->sync(Permission::all());

        $admin = User::find(1);
        $admin->roles()->sync(1);
    }
}
