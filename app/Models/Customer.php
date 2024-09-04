<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'credit_card_id', 'basket_id'];
    protected $hidden = ['created_at', 'updated_at'];
    public function basket(): HasOne{
        return $this->hasOne(Basket::class);
    }
    public function creditCard(): HasOne{
        return $this->hasOne(CreditCard::class);
    }
}
