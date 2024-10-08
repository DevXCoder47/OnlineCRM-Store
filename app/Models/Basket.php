<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Basket extends Model
{
    use HasFactory;
    protected $fillable = ['product_count'];
    protected $hidden = ['created_at', 'updated_at'];
    public function customer():BelongsTo{
        return $this->belongsTo(Customer::class);
    }
    public function products():BelongsToMany{
        return $this->belongsToMany(Product::class);
    }
}
