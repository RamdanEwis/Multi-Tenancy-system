<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\CMS\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds. CRUD create read update destory
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'RamadanEwais',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$77SYhH6daAhRqhIC9vmcDu6cbw8FJT2I8ju0KguORZU9IBzCXUBZK',
        ]);

    }
}
