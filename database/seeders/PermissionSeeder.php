<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // Allowance untuk mengatur role
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            //Allowance untuk mengatur Berita
            'berita-list',
            'berita-create',
            'berita-edit',
            'berita-delete',
            
            // Alowance pengumuman
            'pengumuman-list',
            'pengumuman-create',
            'pengumuman-edit',
            'pengumuman-delete',
            
            // Allowance Agenda
            'agenda-list',
            'agenda-create',
            'agenda-edit',
            'agenda-delete',
            
            // Allowance Guru
            'guru-list',
            'guru-create',
            'guru-edit',
            'guru-delete',

        ];

        foreach ($permissions as $key => $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
