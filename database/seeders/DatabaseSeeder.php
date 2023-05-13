<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Department;
use App\Models\Employee;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Department::create([
            'name' => 'Back Office',
            'slug' => 'back-office'
        ]);
        
        Department::create([
            'name' => 'Housekeeping',
            'slug' => 'housekeeping'
        ]);
        
        Department::create([
            'name' => 'Food and Beverage',
            'slug' => 'food-and-Beverage'
        ]);

        Employee::factory(40)->create();

        // Employee::create([
        //     'firstName' => 'Andres',
        //     'lastName' => 'Ang',
        //     'slug' => 'andres-ang',
        //     'sex' => 'Laki',
        //     'age' => '39',
        //     'address' => 'Santigi',
        //     'position' => 'SPV',
        //     'department_id' => '1'
        // ]);
        
        // Employee::create([
        //     'firstName' => 'Grace',
        //     'lastName' => 'Togelang',
        //     'slug' => 'grace-togelang',
        //     'sex' => 'Perempuan',
        //     'age' => '39',
        //     'address' => 'Cut Nyak Dien',
        //     'position' => 'SPV',
        //     'department_id' => '2'
        // ]);

        // Employee::create([
        //     'firstName' => 'Aiden',
        //     'lastName' => 'Ang',
        //     'slug' => 'aiden-ang',
        //     'sex' => 'Laki',
        //     'age' => '12',
        //     'address' => 'Sutomo',
        //     'position' => 'Waiter',
        //     'department_id' => '2'
        // ]);

        // Employee::create([
        //     'firstName' => 'Amelia',
        //     'lastName' => 'Ang',
        //     'slug' => 'amelia-ang',
        //     'sex' => 'Perempuan',
        //     'age' => '10',
        //     'address' => 'Santigi',
        //     'position' => 'Housekeeping',
        //     'department_id' => '3'
        // ]);

        // Employee::create([
        //     'firstName' => 'Adeline',
        //     'lastName' => 'Ang',
        //     'slug' => 'adeline-ang',
        //     'sex' => 'Perempuan',
        //     'age' => '5',
        //     'address' => 'Sis Aljufri',
        //     'position' => 'Leader',
        //     'department_id' => '3'
        // ]);       
    }
}
