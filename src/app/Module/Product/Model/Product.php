<?php

namespace App\Module\Product\Model;

use App\Module\WishList\Model\WishList;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $fillable = [
        'name',
        'quantity',
        'description',
        'wish_list_id',
        'created_at',
        'updated_at'
    ];

    public function wishList()
    {
        return $this->belongsToMany(WishList::class);
    }

}
