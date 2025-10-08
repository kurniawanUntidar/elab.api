<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\MenuModel;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menu = new MenuModel();
        $menu->insert([
            'menu' => 'Dashboard',
            'logo' => 'fas fa-fw fa-tachometer-alt',
            'permission_id' => 2, // Assuming permission_id 1 is for Super Admin
        ]);
        $menu->insert([
            'menu' => 'Management',
            'logo' => 'fas fa-fw fa-bars-progress',
            'permission_id' => 1, // Assuming permission_id 1 is for Super Admin
        ]);
        $menu->insert([
            'menu' => 'Inventory',
            'logo' => 'fas fa-fw fa-warehouse',
            'permission_id' => 4, // Assuming permission_id 1 is for Super Admin
        ]);
        $menu->insert([
            'menu' => 'Dokument Mutu',
            'logo' => 'fas fa-fw fa-book',
            'permission_id' => 5, // Assuming permission_id 1 is for Super Admin
        ]);
        $menu->insert([
            'menu' => 'Pengelolaan Lab',
            'logo' => 'fas fa-fw fa-toolbox',
            'permission_id' => 6, // Assuming permission_id 1 is for Super Admin
        ]);
        $menu->insert([
            'menu' => 'Profile',
            'logo' => 'fas fa-fw fa-toolbox',
            'permission_id' => 2, // Assuming permission_id 1 is for Super Admin
        ]);
    }
}
