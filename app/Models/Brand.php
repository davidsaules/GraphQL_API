<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $primaryKey = 'bnd_id';

    protected $fillable = ['bnd_name,bnd_type'];

    public function products(){
        return $this->hasMany(Product::class,'prod_bnd_id');
    }
}
