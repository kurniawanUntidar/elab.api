<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Myth\Auth\Models\GroupModel;
use Myth\Auth\Models\PermissionModel;

class GroupSeeder extends Seeder
{
    public function run()
    {
        $groups = new GroupModel();
        $groups->insert([
            'name'        => 'Super Admin',
            'description' => 'Super Admin Group',
        ]);
        $groups->insert([
            'name'        => 'Admin',
            'description' => 'Admin Group',
        ]);
        $groups->insert([
            'name'        => 'User',
            'description' => 'User Group',
        ]);
        $groups->insert([
            'name'        => 'Guest',
            'description' => 'Guest Group',
        ]);
        $groups->insert([
            'name'        => 'Developer',
            'description' => 'Developer Group',
        ]);
        $groups->insert([
            'name'        => 'Manager',
            'description' => 'Manager Group',
        ]);
        $permissions = new PermissionModel();
        $superAdmin = $permissions->findAll();
        foreach ($superAdmin as $permission) {
            $groups->addPermissionToGroup($permission->id, $groups->getInsertId());
        }
        $admin = $permissions->where('name', 'user-module')->findAll();
        foreach ($admin as $permission) {
            $groups->addPermissionToGroup($permission->id, $groups->getInsertId()); // Admin Group   
        }
    }
}
