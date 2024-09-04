<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'description', 'product_image'];
    protected $hidden = ['created_at', 'updated_at'];
    public function baskets():BelongsToMany{
        return $this->belongsToMany(Basket::class);
    }
}
