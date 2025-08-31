<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'shop_name',
        'shop_address',
        'shop_owner_name',
        'shop_contact_number',
        'shop_email',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\ShopFactory::new();
    }
}
