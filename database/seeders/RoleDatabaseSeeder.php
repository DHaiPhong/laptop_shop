<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'super-admin','display_name' => 'Super Admin', 'group' => 'system'],
            ['name' => 'admin','display_name' => 'Admin', 'group' => 'system'],
            ['name' => 'employee','display_name' => 'Nhân Viên', 'group' => 'system'],
            ['name' => 'manager','display_name' => 'Quản Lí', 'group' => 'system'],
            ['name' => 'guest','display_name' => 'Khách Hàng', 'group' => 'system'],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate($role);
        }

        $permissions = [
            ['name' => 'create-user', 'display_name' => 'Tạo User', 'group' => 'User'],
            ['name' => 'update-user', 'display_name' => 'Sửa User', 'group' => 'User'],
            ['name' => 'show-user', 'display_name' => 'Hiển Thị User', 'group' => 'User'],
            ['name' => 'delete-user', 'display_name' => 'Xóa User', 'group' => 'User'],

            ['name' => 'create-role', 'display_name' => 'Tạo Role', 'group' => 'role'],
            ['name' => 'update-role', 'display_name' => 'Sửa Role', 'group' => 'role'],
            ['name' => 'show-role', 'display_name' => 'Hiển Thị Role', 'group' => 'role'],
            ['name' => 'delete-role', 'display_name' => 'Xóa Role', 'group' => 'role'],

            ['name' => 'create-category', 'display_name' => 'Tạo Category', 'group' => 'category'],
            ['name' => 'update-category', 'display_name' => 'Sửa Category', 'group' => 'category'],
            ['name' => 'show-category', 'display_name' => 'Hiển Thị Category', 'group' => 'category'],
            ['name' => 'delete-category', 'display_name' => 'Xóa Category', 'group' => 'category'],

            ['name' => 'create-product', 'display_name' => 'Tạo Product', 'group' => 'product'],
            ['name' => 'update-product', 'display_name' => 'Sửa Product', 'group' => 'product'],
            ['name' => 'show-product', 'display_name' => 'Hiển Thị Product', 'group' => 'product'],
            ['name' => 'delete-product', 'display_name' => 'Xóa Product', 'group' => 'product'],

            ['name' => 'create-coupon', 'display_name' => 'Tạo Coupon', 'group' => 'coupon'],
            ['name' => 'update-coupon', 'display_name' => 'Sửa Coupon', 'group' => 'coupon'],
            ['name' => 'show-coupon', 'display_name' => 'Hiển Thị Coupon', 'group' => 'coupon'],
            ['name' => 'delete-coupon', 'display_name' => 'Xóa Coupon', 'group' => 'coupon'],

        ];
            foreach ($permissions as $item) {
                Permission::updateOrCreate($item);
            }
    }
}
