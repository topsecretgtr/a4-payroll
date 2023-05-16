<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with =['user', 'department'];

    public function scopeFilter($query, array $filters )
    {
        //filter using isset method
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('firstName', 'like', '%' . $filters['search'] . '%')
        //     ->orWhere('lastName', 'like', '%' . $filters['search'] . '%')
        //     ->orWhere('position', 'like', '%' . $filters['search'] . '%');
        // }

        //filter using null coalescing operator and when() method

        $query->when($filters['search'] ??  false, function($query, $search) {
            return $query->where(function ($query) use ($search){
                $query->where('firstName', 'like', '%' . $search . '%')
                ->orWhere('lastName', 'like', '%' . $search . '%')
                ->orWhere('position', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['department'] ?? false, function($query, $department){
            return $query->whereHas('department', function($query) use ($department) {
                $query->where('slug', $department);
            });                
        });
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
