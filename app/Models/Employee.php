<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // menyetujui seluruh mass assignment
    // protected $guarded = [];

    // menyetujui mass assignment untuk menghindari kerentanan
    // hanya bisa mengisi form dengan elemen name dan address
    protected $fillable = ['name', 'address', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
