<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nama', 'email', 'logo', 'website'
    ];

    protected $hidden = [

    ];

    public function employees(){
        // return $this->hasMany(Employee::class, 'employees_id');
    }

}
