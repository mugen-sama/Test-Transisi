<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nama', 'company', 'email'
    ];

    protected $hidden = [

    ];

    public function companies(){
        // return $this->belongsTo(Company::class, 'companies_id');
    }
}
