<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $primaryKey = 'id_supplier';
    protected $fillable = [
        'code',
        'name',
        'email',
        'address',
        'phone',
    ];

    public static $rules = [
        'code' => 'required|string',
        'name' => 'required|string',
        'email' => 'required|string',
        'address' => 'required|string',
        'phone' => 'required|string',

        // 'code' => '',
        // 'name' => 'string',
        // 'email' => 'string',
        // 'address' => 'string',
        // 'phone' => 'string',

    ];
}
