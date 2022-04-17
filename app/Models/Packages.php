<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    protected $table = "packages";
    protected $primarykey = "id";
    protected $avilable = ['normal_price', 'end_price'];
}
