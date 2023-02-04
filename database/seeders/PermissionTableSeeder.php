<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'product-list',
           'product-create',
           'product-edit',
           'product-delete',
           'video-list',
           'video-create',
           'video-edit',
           'video-delete',
           'photo-list',
           'photo-create',
           'photo-edit',
           'photo-delete',
           'subscription-plan-gold',
           'subscription-plan-silver',
           'subscription-plan-bronze'
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}