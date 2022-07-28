<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $guardName = config('auth.defaults.guard');
        foreach (['admin', 'customer', 'brand_manager'] as $roleName) {
            Role::create([
                'name' => $roleName,
                'guard_name' => $guardName,
            ]);
        }
    }
}