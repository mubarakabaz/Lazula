<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cahced roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Buat Permission
        Permission::create(['name' => 'view posts']);
        Permission::create(['name' => 'create posts']);
        Permission::create(['name' => 'edit posts']);
        Permission::create(['name' => 'delete posts']);
        Permission::create(['name' => 'publish posts']);
        Permission::create(['name' => 'unpublish posts']);

        // Buat Role dan menetapkan izinnya
        $writerRole = Role::create(['name' => 'writer']);
        $writerRole->givePermissionTo('view posts');
        $writerRole->givePermissionTo('create posts');
        $writerRole->givePermissionTo('edit posts');
        $writerRole->givePermissionTo('delete posts');

        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo('view posts');
        $adminRole->givePermissionTo('create posts');
        $adminRole->givePermissionTo('edit posts');
        $adminRole->givePermissionTo('delete posts');
        $adminRole->givePermissionTo('publish posts');
        $adminRole->givePermissionTo('unpublish posts');

        $masterRole = Role::create(['name' => 'master']);

        $user = User::factory()->create([
            'name' => 'Example User',
            'email' => 'writer@mubarakabaz.my.id',
            'password' => bcrypt('12345678'),
        ]);
        $user->assignRole($writerRole);

        $user = User::factory()->create([
            'name' => 'Example User',
            'email' => 'admin@mubarakabaz.my.id',
            'password' => bcrypt('12345678'),
        ]);
        $user->assignRole($adminRole);
        
        $user = User::factory()->create([
            'name' => 'Master Room',
            'email' => 'master@mubarakabaz.my.id',
            'password' => bcrypt('12345678'),
        ]);
        $user->assignRole($masterRole);

    }
}
