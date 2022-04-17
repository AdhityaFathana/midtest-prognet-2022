<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "product";
    protected $primarykey = "id";
    protected $avilable = ['categories_id', 'nama'];
}
