<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'prod_id';

    protected $fillable = ['prod_category','prod_color','prod_size','prod_price','prod_bnd_id'];

    public function brand(){
        return $this->belongsTo(Brand::class,'prod_bnd_id');
    }
}
