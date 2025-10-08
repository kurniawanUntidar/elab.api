<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Models\GroupModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = new UserModel();
        $groups = new GroupModel();

        $users->insert([
            'username' => 'superadmin',
            'email'    => 'superadmin@elab.api',
            'password_hash' => password_hash('princessIda1', PASSWORD_DEFAULT),
            'active'   => 1,
        ]);
        $groups->addUserToGroup($users->getInsertId(), 1); // Add to Super Admin group
        $users->insert([
            'username' => 'admin',
            'email'    => 'admin@elab.api',
            'password_hash' => password_hash('princessIda1', PASSWORD_DEFAULT),
            'active'   => 1,
        ]);
        $groups->addUserToGroup($users->getInsertId(), 2); // Add to Admin group
        $users->insert([
            'username' => 'user',
            'email'    => 'user@elab.api',
            'password_hash' => password_hash('princessIda1', PASSWORD_DEFAULT),
            'active'   => 1,
        ]);
        $groups->addUserToGroup($users->getInsertId(), 3); // Add to User group
        $users->insert([
            'username' => 'guest',
            'email'    => 'guest@elab.api',
            'password_hash' => password_hash('princessIda1', PASSWORD_DEFAULT),
            'active'   => 1,
        ]);
        $groups->addUserToGroup($users->getInsertId(), 4); // Add to Guest group
        $users->insert([
            'username' => 'developer',  
            'email'    => 'dev@elab.api',
            'password_hash' => password_hash('princessIda1', PASSWORD_DEFAULT),
            'active'   => 1,
        ]);
        $groups->addUserToGroup($users->getInsertId(), 5); // Add to Developer group
        $users->insert([
            'username' => 'manager',
            'email'    => 'man@elab.api',
            'password_hash' => password_hash('princessIda1', PASSWORD_DEFAULT),
            'active'   => 1,
        ]);
        $groups->addUserToGroup($users->getInsertId(), 6); //
    }
}
