<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Employee 
{
    //use HasFactory;
    private static $employees = [
        [
            "id" => "1",
            "firstName" => "Andres",
            "lastName" => "Ang",
            "slug" => "andres-ang",
            "sex" => "Laki",
            "age" => "39",
            "address" => "monginsidi",
            "position" => "Manager"
        ],
        [
            "id" => "2",
            "firstName" => "Grace",
            "lastName" => "Togelang",
            "slug" => "grace-togelang",
            "sex" => "Perempuan",
            "age" => "39",
            "address" => "Cut Nyak Dien",
            "position" => "SPV"
        ],
        [
            "id" => "3",
            "firstName" => "Aiden",
            "lastName" => "Ang",
            "slug" => "aiden-ang",
            "sex" => "Laki",
            "age" => "12",
            "address" => "Sutomo",
            "position" => "Waiter"
        ],
        [
            "id" => "4",
            "firstName" => "Amelia",
            "lastName" => "Ang",
            "slug" => "amelia-ang",
            "sex" => "Perempuan",
            "age" => "10",
            "address" => "Santigi",
            "position" => "Housekeeping"
        ],
        [
            "id" => "5",
            "firstName" => "Adeline",
            "lastName" => "Ang",
            "slug" => "adeline-ang",
            "sex" => "Perempuan",
            "age" => "5",
            "address" => "Sis Aljufri",
            "position" => "Leader"
        ]
    ];

    public static function all()
    {
        return collect(self::$employees);
    }

    public static function find ($slug)
    {
        $employees = static::all();
        return $employees->firstWhere('slug',$slug);
    }
}
