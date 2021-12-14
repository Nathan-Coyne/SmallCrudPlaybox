<?php

namespace App\Http\Controllers;

use App\Module\Product\Model\Product;
use App\Module\WishList\Model\WishList;
use App\Module\WishList\Repository\Repository as WishRepo;
use App\Module\Product\Repository\Repository as ProdRepo;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{

    public function getProducts(): object
    {
        $wishList = new WishRepo(new WishList());
        return $wishList->getAllWishList();
    }
    public function getProductsByCategoryId($id): object
    {
        $wishList = new WishRepo(new WishList());
        return $wishList->getAllWishListByCategoryId((int)$id);
    }
    public function updateProduct(Request $request)
    {
        $product = new ProdRepo(new Product());
        $product->updateProduct($request['name'], $request['price'], $request['desc'], $request['id'], $request['quantity']);
    }

    public function deleteProduct(Request $request)
    {
        $product = new ProdRepo(new Product());
        $product->deleteProduct($request['id']);
    }

    public function createNewProduct(Request $request)
    {
        $product = new ProdRepo(new Product());
        $product->createProduct($request['name'], $request['price'], $request['desc'], $request['category_id'], $request['quantity']);
    }
}
