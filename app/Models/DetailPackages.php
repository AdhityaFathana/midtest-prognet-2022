<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPackages extends Model
{
    use HasFactory;
    protected $table = "detail_packages";
    protected $primarykey = "id";
    protected $avilable = ['packages_id', 'product_id', 'quantity'];
}
