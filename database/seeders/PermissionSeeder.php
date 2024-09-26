<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'permission' => 'index_user',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'create_user',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'update_user',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'delete_user',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'index_role',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'create_role',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'update_role',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'delete_role',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'index_menu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'create_menu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'update_menu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'delete_menu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'index_pariwisata',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'create_pariwisata',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'update_pariwisata',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'delete_pariwisata',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'index_commodity',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'create_commodity',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'update_commodity',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'permission' => 'delete_commodity',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        DB::table('permissions')->insert($permissions);

        // ! Permission adding to role
        $permissionSuperadmin = [
            'index_user',
            'create_user',
            'update_user',
            'delete_user',
            'index_role',
            'create_role',
            'update_role',
            'delete_role',
            'index_menu',
            'create_menu',
            'update_menu',
            'delete_menu',
            'index_pariwisata',
            'create_pariwisata',
            'update_pariwisata',
            'delete_pariwisata',
            'index_commodity',
            'create_commodity',
            'update_commodity',
            'delete_commodity',

        ];

        $permissionAdmin = [
            'index_user',
            'create_user',
            'update_user',
            'delete_user',
            'index_menu',
            'create_menu',
            'update_menu',
            'delete_menu',
            'index_pariwisata',
            'create_pariwisata',
            'update_pariwisata',
            'delete_pariwisata',
            'index_commodity',
            'create_commodity',
            'update_commodity',
            'delete_commodity',
        ];

        $permissionEditor = [
            'index_pariwisata',
            'create_pariwisata',
            'update_pariwisata',
            'delete_pariwisata',
            'index_commodity',
            'create_commodity',
            'update_commodity',
            'delete_commodity',
        ];

        $permissionDisperindag = [
            'index_commodity',
            'create_commodity',
            'update_commodity',
            'delete_commodity',
        ];

        $getRoles = DB::table('roles')->select(['id', 'role'])->get();
        $getPermissions = DB::table('permissions')->select(['id', 'permission'])->get();
        foreach ($getRoles as $key => $value) {
            switch ($value->role) {
                case 'superadmin':
                    $usePermissions = $permissionSuperadmin;
                    break;

                case 'admin':
                    $usePermissions = $permissionAdmin;

                    break;
                case 'editor':
                    $usePermissions = $permissionEditor;

                    break;

                case 'disperindag':
                    $usePermissions = $permissionDisperindag;
                    break;


                default:
                    $usePermissions = $permissionEditor;
                    break;
            }
            foreach ($getPermissions as $result) {
                if (in_array($result->permission, $usePermissions)) {
                    DB::table('role_permission')->insert([
                        'role_id' => $value->id,
                        'permission_id' => $result->id,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);
                }
            }
        }
    }
}
