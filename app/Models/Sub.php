<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    use HasFactory;
    public $timestamaps=false;


    
    protected $fillable = [
        'name',
        'file_path'
    ];
}
