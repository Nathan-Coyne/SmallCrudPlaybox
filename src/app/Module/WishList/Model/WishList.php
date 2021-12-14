<?php

namespace App\Module\WishList\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Module\Product\Model\Product;

class WishList extends Model
{
    use HasFactory;

    protected $table = 'wish_list';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $casts = [
        'created_at' => 'datetime:d/m/Y H:i:s',
        'updated_at' => 'datetime:d/m/Y H:i:s'
    ];

    protected $fillable = [
        'created_date',
        'updated_date',
        'name'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
