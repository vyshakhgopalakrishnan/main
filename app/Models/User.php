<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model {
    use HasFactory;
    protected $table = 'usersview';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_name',
        'product_MRP' ,
        'product_selling_price',
        'description' ];
    }
