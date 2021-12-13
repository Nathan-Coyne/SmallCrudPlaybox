<?php

namespace App\Module\WishList\Repository;

use App\Module\WishList\Model\WishList;

class Repository
{
    private $wishList;

    public function __construct(WishList $wishList)
    {
        $this->wishList = $wishList;
    }

    public function createWishList(string $name)
    {
        $this->wishList = new WishList();
        $this->wishList->name = $name;
        $this->wishList->save();
    }

    public function getAllWishList(): object
    {
        return $this->wishList->with('products')->get();
    }

    public function getAllWishListByCategoryId(int $id): object
    {
        return $this->wishList->with('products')->where('id', $id)->get();
    }

    public function getWishListWithoutProducts()
    {
        return $this->wishList->all();
    }

    public function updateProduct($name, $id)
    {
        $this->wishList =  new WishList();
        $this->wishList->where('id', $id)->update([
            'name' => $name,
        ]);
    }

    public function deleteProduct($id)
    {
        $this->wishList =  new WishList();
        $this->wishList->where('id', $id)->delete();
    }

}
