<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CreditCard extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'number'];
    protected $hidden = ['created_at', 'updated_at'];
    public function customer():BelongsTo{
        return $this->belongsTo(Customer::class);
    }
}
